import express from 'express';
import http from 'http';
import { Server } from 'socket.io';
import cors from 'cors';

const app = express();
const server = http.createServer(app);
const io = new Server(server, {
  cors: {
    origin: '*',
  }
});

app.use(cors());

io.on('connection', (socket) => {
  console.log('a user connected');

  socket.on('sendChatToServer', (message) => {
    console.log('Message received:', message);
    io.emit('sendChatToClient', message);
  });

  socket.on('disconnect', () => {
    console.log('user disconnected');
  });
});

const PORT = 3000;
server.listen(PORT, () => {
  console.log(`Socket.io server running at http://localhost:${PORT}/`);
});
