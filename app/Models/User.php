<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'employee_id', 'status', 'team', 'role_id', 'email', 'password', 'phone', 'team_manager', 'team_lead',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
