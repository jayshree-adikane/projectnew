<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chat Application</title>
  <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 
 <style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    body {
      background-color: #f0f0f0;
      font-family: 'Mulish';
    }
    .avatar-circle {
    width: 40px;
    height: 40px;
    background-color: #007bff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: bold;
    margin-right: 10px;
}
.user {
    display: flex;
    align-items: center;
}

    .container {
      max-width: 100%;
      margin: 50px auto;
      padding: 0 20px;
    }

    .people-list {
     
      float: left;
      background: #fff;
      padding: 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    }

    .people-list .user {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      cursor: pointer;
      margin: 16px;
      padding: 15px;
    }
    li.user:hover 
    {
      border-radius: 15px;
    padding: 15px;
      background-color:#f0f0f0;
    }

    .people-list .user img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      border-radius: 50%;
    }

    .people-list .user .about {
      display: flex;
      flex-direction: column;
    }

    .people-list .user .about .name {
      font-weight: 500;
      font-size: 17px;
    }

    .people-list .user .about .status {
      font-size: 16px;
      color: #2e2e2e;
    }

    .chat {
   
      float: left;
      background: #fff;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    }

    .chat .chat-header {
      padding: 20px;
      border-bottom: 1px solid #eee;
    }

    .chat .chat-header .chat-about {
      display: flex;
      justify-content: space-between;
    }

    .chat .chat-header .chat-with {
      font-weight: 600;
      font-size: 20px;
    }

    .chat .chat-header .chat-num-messages {
      font-size: 12px;
      color: #999;
      margin-left: 10px;
    }
   
    .chat .chat-history {
      padding: 30px 30px 20px;
      border-bottom: 1px solid #eee;
      height: 400px;
      overflow-y: auto;
    }

    .chat .chat-history .message {
      margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    list-style: none;
   
    flex-direction: column;
    justify-content: flex-start;
    }

    .my-message .message-time {
    align-self: flex-end;
}

.other-message .message-time {
    align-self: flex-start;
}
.message-time {
    font-size: 0.8em;
    color: #888;
}
    .chat-history::-webkit-scrollbar {
      width: 10px;
    }
    .chat-history::-webkit-scrollbar-track {
      background: #ddd;
      border-radius: 20px;
    }

    .chat-history::-webkit-scrollbar-thumb {
      background: #666;
      border-radius: 20px;
    }
    .date-label {
      width: 16%;
    margin: 10px auto;
    padding: 5px 10px;
    font-weight: 500;
    color: #2c2b2b;
    background-color: #dfdfdf;
    border-radius: 5px;
    text-align: center;
}
.unread-message {
    font-weight: bold;
}
    span.user-dept {
    font-size: 14px;
    font-weight: 400;
}
    li.user.selected-user {
    background-color: #e8f3ff;
    border-radius: 15px;
    padding: 15px;
    
    }
    .chat .chat-history .message .message-data {
      margin-right: 10px;
      margin-left: auto;
    }

    .chat .chat-history .message .message-data .message-data-name {
      font-weight: 600;
      display: inline-block;
    }

    .chat .chat-history .message .message-data .message-data-time {
      font-size: 12px;
      color: #999;
      margin-left: 10px;
    }

    .chat .chat-history .message .message-data .fa {
      margin-right: 5px;
    }

    .chat .chat-history .message .message-content {
      position: relative;
    color: #020202;
    padding: 0.5rem 1rem;
    border-radius: 22px;

    max-width: 30rem;
    font-size: 0.9rem;
    overflow: hidden;
    overflow-wrap: break-word;
    word-break: break-word;
    }

    .chat .chat-history .message.my-message .message-content {
      background: #efefef;
      align-self: flex-end;
    }

    .chat .chat-history .message.other-message .message-content {
      background: #3996fb;
    align-self: flex-start;
    color: white;
      
    }

    .chat .chat-message {
      padding: 20px;
      display: flex;
      align-items: center;
      border-top: 1px solid #eee;
    }

    .chat .chat-message .emoji-picker {
      position: relative;
    }

    .chat .chat-message .emoji-picker .emoji-icon {
      font-size: 24px;
      cursor: pointer;
      margin-right: 10px;
    }

    .chat .chat-message .emoji-picker emoji-picker {
      display: none;
      position: absolute;
      bottom: 50px;
      right: 0;
    }

   .chat-message input {
  flex: 1;
  padding: 10px;
  border-radius: 7px;
  border: 1px solid #ddd;
  margin-right: 10px;
  height: auto; 
  resize: vertical;
   }

    .chat .chat-message .attachment-icon {
      font-size: 24px;
      margin-right: 10px;
      cursor: pointer;
    }
    .custom-form__search-wrapper input:placeholder-shown {
    background-color: #f2f2f2;
    border: 1px solid var(--bg-page);
}
    .chat .chat-message .send-button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 7px;
      cursor: pointer;
    }
    button.custom-form__search-submit {
    position: absolute;
    top: -297px;
    right: 0;
    height: 100%;
    width: 100%;
    cursor: pointer;
    background-color: transparent;
    border: none;
    outline: none;
    display: flex;
    justify-content: center;
    align-items: center;
}
.search-bar {
  max-width: 400px;
  margin: 20px 50px;
  border: none;
}

#searchBarInput {
    position: relative;
    background: #ebebeb;
    padding: 7px 14px;
    border-radius: 8px;
    border: 2px solid #ede8e8;
    width: 100%;
}
.status.active::before {
      content: '\f111'; 
      font-family: 'FontAwesome';
      color: green;
      margin-right: 5px;
      margin-left: -22px;
    }
.search-bar__icon {
    position: absolute;
  
    width: 77%;
    right: 22px;
    top: 84px;
}

.list::-webkit-scrollbar {
  width: 10px;
}
.list::-webkit-scrollbar-track {
  background: #ddd;
  border-radius: 20px;
}

.list::-webkit-scrollbar-thumb {
  background: #666;
  border-radius: 20px;
}
ul.list 
{
  margin-top: 14px;
    margin-left: -27px;
    overflow-y: auto;
    flex-grow: 1;
    height: 58vh;
}


.chat-icons i {
    margin: 5px; /* Adjust spacing between icons */
    font-size: 20px; /* Adjust icon size */
    cursor: pointer;
}
    @media (max-width: 768px) {
      .people-list {
        width: 100%;
        float: none;
        padding: 20px 10px;
      }

      .chat {
        width: 100%;
        float: none;
      }
    }
  </style>
</head>
<body>
<div class="container clearfix">
  <div class="row">
    <div class="people-list col-3" id="people-list">
      <div class ="chat-header">
    <div class="custom-form__search-wrapper">
    <input type="text" placeholder="Search User" id="searchBarInput" />
    <i class="fa fa-search search-bar__icon" aria-hidden="true"></i>
    
          </div>  
  </div>
      <ul class="list" id="user-list">
      </ul>
    </div>
 
    <div class="chat col-9">
      <div class="chat-header clearfix">
        <div class="chat-about">
          <div class="chat-with" id="chatHeader">Chat Application</div>
          <div class="chat-icons">
       
       <i class="fas fa-ellipsis-v"></i>
   </div>
        </div>
      
      </div>
      <div class="chat-history" id="chatContent">
      </div>
      <div class="chat-message clearfix">
       <input type="text" class="form-control chat-input" placeholder="Type your message..." id="chatInput">
        <div class="emoji-picker">
          <span class="emoji-icon">&#x1F600;</span>
          <emoji-picker></emoji-picker>
        </div>
        <label for="fileInput" class="attachment-icon">&#x1F4CE;</label>
        <input type="file" id="fileInput" style="display: none;">
        <button class="btn btn-primary send-button" id="sendButton"> <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.socket.io/4.7.5/socket.io.min.js"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
  <script>
  $(function() {
    let ip_address = '127.0.0.1';
    let socket_port = '3000';
    let socket = io(`${ip_address}:${socket_port}`);
    let userInfo = getUserInfo();
    let chatInput = $('#chatInput');
    let chatContent = $('#chatContent');
    let fileInput = $('#fileInput');
    let chatHeader = $('#chatHeader');
    let userList = document.getElementById('user-list');
    let selectedUserId = null;
    let allUsers = [];
    let allMessages = {};
    chatHeader.text(`Chat Application - Welcome, ${userInfo.username}`);

    // Stored the information about user on localstorage
    function getUserInfo() {
        let userInfo = localStorage.getItem('userInfo');
        if (!userInfo) {
            let username = prompt('Please enter your username:');
            if (!username) {
                username = 'Anonymous';
            }
            let userId = prompt('Please enter your user ID:');
            if (!userId) {
                userId = Math.floor(Math.random() * 1000000);
            }
            userInfo = {
                username: username,
                userId: userId
            };
            localStorage.setItem('userInfo', JSON.stringify(userInfo));
        } else {
            userInfo = JSON.parse(userInfo);
        }
        return userInfo;
    }

    // get file inpu
    fileInput.change(function() {
        let file = fileInput[0].files[0];
        if (file) {
            sendFile(file);
        }
    });

    document.getElementById('searchBarInput').addEventListener('input', filterUsers);

  
function fetchUsers() {
    fetch('/api/users')
        .then(response => response.json())
        .then(users => {
            allUsers = users; 
            fetchMessages();
        });
}

function fetchMessages() {
    const recipientIds = allUsers.map(user => user.id).join(',');

    $.ajax({
        url: `/api/batchMessages?user_id=${userInfo.userId}&recipient_ids=${recipientIds}`,
        method: 'GET',
        success: function(messages) {
            allMessages = messages;
            console.log("allMessages", allMessages)
            updateRecentMessages();
        },
        error: function(error) {
            console.error('Error fetching messages:', error);
        }
    });
}

function getDateLabel(date) {
    const today = new Date();
    const messageDate = new Date(date);

    const isToday = today.toDateString() === messageDate.toDateString();

    const yesterday = new Date(today);
    yesterday.setDate(today.getDate() - 1);
    const isYesterday = yesterday.toDateString() === messageDate.toDateString();

    if (isToday) {
        return 'Today';
    } else if (isYesterday) {
        return 'Yesterday';
    } else {
        return messageDate.toLocaleDateString([], { month: 'long', day: 'numeric', year: 'numeric' });
    }
}

function filterUsers() {
    const searchTerm = document.getElementById('searchBarInput').value.toLowerCase();
    const filteredUsers = allUsers.filter(user => user.name.toLowerCase().includes(searchTerm));
    displayUsers(filteredUsers);
}
function getInitials(name) {
    return name.split(' ').map(word => word[0].toUpperCase()).join('');
}
function displayUsers(users) {
    userList.innerHTML = '';
    let currentUserLi = null;

    users.forEach(user => {
      const initials = getInitials(user.name);
      

        const li = document.createElement('li');
        li.classList.add('clearfix', 'user');
        li.innerHTML = `
          <div class="avatar-circle">${initials}</div>
            <div class="about">
                <div class="name">${user.name} ${user.id == userInfo.userId ? '(you)' : ''} - <span class="user-dept"> ${user.team} </span> </div>
        <div class="status ${user.status == 'active' ? 'active' : ''}" style="${!user.recentMessage.read ? 'font-weight: bold;' : ''}">
                    ${user.recentMessage.message || ''}
                </div>     
                  
                </div>
        `;
        li.addEventListener('click', () => {
            selectUser(user);
            user.recentMessage.read = true;
            const localStorageKey = `readStatus_${user.id}_${user.recentMessage.messageId}`;
            localStorage.setItem(localStorageKey, 'true');
            displayUsers(users);
        });

        if (user.id == userInfo.userId) {
            currentUserLi = li;
        } else {
            userList.appendChild(li);
        }
    });

    if (currentUserLi) {
        userList.prepend(currentUserLi);
    }
    }

    function updateRecentMessages() {
    allUsers.forEach(user => {
      console.log("user>>>>")
        if (allMessages[user.id] && allMessages[user.id].length > 0) {
            console.log("user2222>>>>", allMessages[user.id])
            const relevantMessages = allMessages[user.id].filter(message =>
                (message.sender_id == userInfo.userId && message.recipient_id == user.id) ||
                (message.sender_id == user.id && message.recipient_id == userInfo.userId)
            );

            relevantMessages.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            console.log("relevantMessages", relevantMessages)
            const latestMessage = relevantMessages.length > 0 ? relevantMessages[0] : null;
            console.log("latestMessage", latestMessage)

            if (latestMessage) {
                let messageContent;
                if (latestMessage.message.match(/\.(jpeg|jpg|gif|png)$/) !== null) {
                    messageContent = `<span>Image</span>`;
                } else if (latestMessage.message.match(/\.(pdf|doc|docx|xls|xlsx|csv)$/) !== null) {
                    messageContent = `<span>Document</span>`;
                } else {
                    messageContent = `<span>${latestMessage.message}</span>`;
                }
                console.log("messageContent", messageContent);
                console.log("read by recevier", latestMessage.read_by_receiver)
                const localStorageKey = `readStatus_${user.id}_${latestMessage.id}`;

                const isRead = latestMessage.sender_id == userInfo.userId || localStorage.getItem(localStorageKey) === 'true';
                console.log("isreaderyy>>>", isRead)
                user.recentMessage = { message: messageContent, read: isRead, messageId: latestMessage.id };
            } else {
                user.recentMessage = { message: '', read: true };
            }
        } else {
            user.recentMessage = { message: '', read: true };
        }
    });

    displayUsers(allUsers);
}


function selectUser(user) {
    selectedUserId = user.id;
    localStorage.setItem('selectedUserId', selectedUserId);
    chatHeader.textContent = `Chat with ${user.name}`;
    loadChatForUser(user.id, user.name);
    document.querySelectorAll('li.user').forEach((el) => el.classList.remove('selected-user'));
    const selectedElement = Array.from(userList.children).find(el => el.querySelector('.name').textContent.includes(user.name));
    if (selectedElement) selectedElement.classList.add('selected-user');
}


function loadChatForUser(userId, username) {
    chatContent.html('');
    chatHeader.text(`Chat Application - Chat with ${username}`);

    userId = localStorage.getItem('selectedUserId');

    $.ajax({
        url: `/api/messages?user_id=${userId}&recipient_id=${userInfo.userId}`,
        method: 'GET',
        success: function(messages) {
          chatContent.data('lastMessageDate', null);
            if (messages.length > 0) {
               //when we reload the page Display the latest messages
                messages.forEach(function(message) {
                  console.log("messgaesss>>>>", message)
                    let messageClass = (message.sender_id == userInfo.userId) ? 'my-message' : 'other-message';
                    let messageTime = new Date(message.created_at).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    let messageContent;
                  
                    if (message.message.match(/\.(jpeg|jpg|gif|png)$/) != null) {
                        messageContent = `<img src="${message.message}" alt="Image" style="max-width: 150px; height: auto;">`;
                    } else if ( message.message.match(/\.(pdf|doc|docx|xls|xlsx|csv)$/) != null) {
                      const url = message.message;
                       const filename = url.substring(url.lastIndexOf('/') + 1);

                        messageContent = `<a href="${message.message}" download>${filename} <i class="fas fa-download"></i></a>`;
                    } else {
                        messageContent = `<div class="message-content">${message.message}</div>`;
                    }

                    let messageDateLabel = getDateLabel(message.created_at);
                      console.log("created at>>>", message.created_at)
                      // Add the  date label if necessary
                      let lastMessageDate = chatContent.data('lastMessageDate');
                      let dateLabelElement = '';
                      if (!lastMessageDate || new Date(lastMessageDate).toDateString() !== new Date(message.created_at).toDateString()) {
                          dateLabelElement += `<div class="date-label">${messageDateLabel}</div>`;
                          console.log("messageDateLabel", messageDateLabel)
                          chatContent.data('lastMessageDate', message.created_at);
                      }

                    let messageElement = `  ${dateLabelElement}
                    <div class="message ${messageClass}">
                        ${messageContent} 
                        <span class="message-time">${messageTime}</span>
                    </div>`;

                    chatContent.append(messageElement);
                });

                chatContent.scrollTop(chatContent[0].scrollHeight);
            }
        },
        error: function(error) {
            console.error('Error loading messages:', error);
        }
    });
}


function sendFile(file) {
    let formData = new FormData();
    formData.append('file', file);

    $.ajax({
        url: '/api/upload',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            let filePath = response.filePath; 
            let fileType = file.type;
            let message;

            if (fileType.startsWith('image/')) {
                message = `<img src="${filePath}" alt="${file.name}" style="max-width: 100%; height: auto;">`;
            } else {
                message = `<a href="${filePath}" download="${file.name}">${file.name} <i class="fas fa-download"></i></a>`;
            }

            socket.emit('sendChatToServer', { message: message, userInfo: userInfo, recipient_id: selectedUserId });
            saveMessageDatabase(userInfo.userId, selectedUserId, filePath);
        },
        error: function(error) {
            console.error('Error uploading file:', error);
        }
    });
  }

    $('#sendButton').click(function() {
        sendMessage();
    });


    chatInput.keydown(function(e) {
        if (e.which === 13 && !e.shiftKey) {
            e.preventDefault(); 
            sendMessage(); 
        } else if (e.which === 13 && e.shiftKey) {
            let content = this.value;
            this.value = content + '\n';
            this.scrollTop = this.scrollHeight; 
        }
    });


    function sendMessage() {
        let message = chatInput.val().trim();
        if (message !== '' || fileInput[0].files.length > 0) {
            if (fileInput[0].files.length > 0) {
                sendFile(fileInput[0].files[0]);
                fileInput.val('');
                
            } else {
              
              socket.emit('sendChatToServer', { message: message, userInfo: userInfo, recipient_id: selectedUserId });
              saveMessageDatabase(userInfo.userId, selectedUserId, message);
            }
            chatInput.val('');
        }
    }
    
    function saveMessageDatabase(userId, selectedUserId, message) {
      $.ajax({
        url: '/api/messages',
        method: 'POST',
        data: {
            user_id: userId,
            recipient_id: selectedUserId,
            message: message
        },
        success: function(response) {
            console.log('Message saved in the database:', response);
        },
        error: function(error) {
            console.error('Error saving message in the database:', error);
        }
    });
}



    
socket.on('sendChatToClient', function(data) {


  const recipientUserId = data.recipient_id;
    const senderUserId = data.userInfo.userId;

    // Check if the message involves the current user as sender or recipient
    if (recipientUserId == userInfo.userId) {
        const userToUpdate = allUsers.find(user => user.id == senderUserId);
        if (userToUpdate) {
            userToUpdate.recentMessage = { message: data.message, read: false };
            displayUsers(allUsers);
        }
    }
    let messageClass = (senderUserId === userInfo.userId) ? 'my-message' : 'other-message';
    let messageTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  

    let messageElement = `<div class="message ${messageClass}">
                            <div class="message-content">${data.message} </div>
                            <span class="message-time">${messageTime}</span>
                          </div>`;
                      
                        
    chatContent.append(messageElement);
    chatContent.scrollTop(chatContent[0].scrollHeight);

    if (Notification.permission === 'granted') {
        showNotification(data);
    } else if (Notification.permission !== 'denied') {
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                showNotification(data);
            }
        });
    }
});


function showNotification(data) {
    console.log("dataaa>>>>>", data);

    const senderName = data.userInfo.username;
    const firstLetter = senderName.charAt(0).toUpperCase();

    const canvas = document.createElement('canvas');
    canvas.width = 100;
    canvas.height = 100;
    const ctx = canvas.getContext('2d');

   
    ctx.fillStyle = '#007bff'; 
    ctx.beginPath();
    ctx.arc(50, 50, 50, 0, 2 * Math.PI);
    ctx.fill();

    ctx.fillStyle = '#ffffff'; 
    ctx.font = '50px Arial';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(firstLetter, 50, 50);

    const iconDataUrl = canvas.toDataURL();

    const options = {
        body: data.message,
        icon: iconDataUrl 
    };

    if (Notification.permission === 'granted') {
        new Notification(`${senderName} says:`, options);
    } else if (Notification.permission !== 'denied') {
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                new Notification(`${senderName} says:`, options);
            }
        });
    }
}


    $('.emoji-icon').click(function() {
        $('emoji-picker').toggle();
    });

    document.querySelector('emoji-picker').addEventListener('emoji-click', event => {
        const emoji = event.detail.unicode;
        chatInput.val(chatInput.val() + emoji);
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.emoji-picker, .emoji-icon').length) {
            $('emoji-picker').hide();
        }
    });

    loadChatForUser();
    fetchUsers();
});
  </script>
</body>
</html>
