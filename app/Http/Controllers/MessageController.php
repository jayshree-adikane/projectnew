<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', 
            'recipient_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            DB::beginTransaction();

            $message = Message::create([
                'sender_id' => $request->input('user_id'), 
                'recipient_id' => $request->input('recipient_id'),
                'message' => $request->input('message'),
            ]);

            DB::commit();

            \Log::info('Message stored successfully', $message->toArray());

            return response()->json($message, 201);
        } catch (\Exception $e) {
            DB::rollBack();

            \Log::error('Error storing message: ' . $e->getMessage());

            return response()->json(['error' => 'Message could not be sent.'], 500);
        }
    }
    
    public function index(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required|exists:users,id',
                'recipient_id' => 'required|exists:users,id',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }
    
            $userId = $request->input('user_id');
            $recipientId = $request->input('recipient_id');
    
            $messages = Message::where(function ($query) use ($userId, $recipientId) {
                $query->where('sender_id', $userId)
                      ->where('recipient_id', $recipientId);
            })->orWhere(function ($query) use ($userId, $recipientId) {
                $query->where('sender_id', $recipientId)
                      ->where('recipient_id', $userId);
            })->orderBy('created_at', 'asc')->get();
    
            return response()->json($messages);
        } catch (\Exception $e) {
            \Log::error('Error retrieving messages: ' . $e->getMessage());
            return response()->json(['error' => 'Messages could not be retrieved.'], 500);
        }
    }
    
    public function uploadFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,txt,xls,xlsx,csv|max:20480',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');

            return response()->json(['filePath' => Storage::url($filePath)], 201);
        } catch (\Exception $e) {
            \Log::error('Error uploading file: ' . $e->getMessage());

            return response()->json(['error' => 'File could not be uploaded.'], 500);
        }
    }


    public function batchMessages(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'recipient_ids' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $userId = $request->input('user_id');
        $recipientIds = explode(',', $request->input('recipient_ids'));
    
        // Retrieve messages where the user is either the sender or the recipient
        $messages = Message::where(function ($query) use ($userId, $recipientIds) {
                $query->whereIn('recipient_id', $recipientIds)
                      ->where('sender_id', $userId)
                      ->orWhereIn('sender_id', $recipientIds)
                      ->where('recipient_id', $userId);
            })
            ->with('sender', 'recipient')
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Group messages by the involved user (recipient or sender)
        $formattedMessages = $messages->groupBy(function ($message) use ($userId) {
            return $message->recipient_id == $userId ? $message->sender_id : $message->recipient_id;
        });
    
        // Format the result
        $result = $formattedMessages->mapWithKeys(function ($msgs, $key) {
            return [
                $key => $msgs->map(function ($msg) {
                    return [
                        'id' => $msg->id,
                        'sender_id' => $msg->sender_id,
                        'recipient_id' => $msg->recipient_id,
                        'message' => $msg->message,
                        'created_at' => $msg->created_at->toDateTimeString(),
                        'sender_name' => $msg->sender->name,
                        'recipient_name' => $msg->recipient->name,
                    ];
                })
            ];
        });
    
        return response()->json($result);
    }
    

    
    
}
