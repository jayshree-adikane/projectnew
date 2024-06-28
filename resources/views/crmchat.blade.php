<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chat Application</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  <div class="home-page__content messages-page">
  <div class="container-fluid h-100">
    <div class="row px-0 h-100">
      <div class="col-12 col-md-4 col-lg-5 col-xl-3 px-0 messages-page__list-scroll">

        <div class="messages-page__header mb-0 px-4 pt-3 pb-3">
          <span class="messages-page__title">Chats</span>
          <div class="messages-page__dark-mode-toogler">
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--dark-mode" viewBox="0 0 49.7 49.7">
              <path d="M25.4,49.7A25.6,25.6,0,0,1,1.3,32.3,25.6,25.6,0,0,1,17.3.1a2,2,0,0,1,2.1.5,2.2,2.2,0,0,1,.5,2.1,19.9,19.9,0,0,0-1.2,6.8A21,21,0,0,0,25,24.7,21,21,0,0,0,40.2,31h0a20.9,20.9,0,0,0,6.9-1.2,2,2,0,0,1,2.5,2.5,25.8,25.8,0,0,1-16,16.1A28.7,28.7,0,0,1,25.4,49.7ZM15,5.5A21.4,21.4,0,0,0,5.1,31.1,21.5,21.5,0,0,0,15.9,43.4a21.2,21.2,0,0,0,28.3-8.8,17.5,17.5,0,0,1-4,.4h0a24.9,24.9,0,0,1-18-7.5,24.9,24.9,0,0,1-7.5-18A26.9,26.9,0,0,1,15,5.5Z" fill="#f68b3c" />
            </svg>
          </div>
        </div>
        <div class="messages-page__search mb-0 px-3 pb-3">
          <div class="custom-form__search-wrapper">
            <input type="text" class="form-control custom-form" id="searchBarInput" placeholder="Search User........" autocomplete="off">
            <button type="submit" class="custom-form__search-submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--search" viewBox="0 0 46.6 46.6">
                <path d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z" fill="#f68b3c" />
              </svg>
            </button>
          </div>
        </div>

        <ul class="messages-page__list pb-5 px-1 px-md-3" id="user-list">
     
        </ul>
      </div>
   
      <div class="chat col-12 col-md-8 col-lg-7 col-xl-9 px-0 pl-md-1">
        <div class="chat__container">
          <div class="chat__wrapper py-2 pt-mb-2 pb-md-3">
            <div class="chat__messaging messaging-member--online pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
              <div class="chat__previous d-flex d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                  <path d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z" fill="#f68b3c" />
                </svg>
              </div>
              <div class="chat__notification d-flex d-md-none chat__notification--new">
                <span>1</span>
              </div>
              <div class="chat__infos pl-2 pl-md-0 chat-header">
                <div class="chat-member__wrapper" data-online="true">
                  <div class="chat-member__avatar">
                    <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                    <div class="user-status user-status--large"></div>
                  </div>
                  <div class="chat-member__details" id="chatHeader">
                    <span class="chat-member__name">Jenny Smith</span>
                    <span class="chat-member__status">Online</span>
                  </div>
                </div>
              </div>
              <div class="chat__actions mr-2 ">
                <ul class="m-0">
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 48 48">
                      <path d="M38.4,48c-2.1,0-5.1-.8-9.5-3.2a62.9,62.9,0,0,1-14.6-11A61.7,61.7,0,0,1,3.2,19C-.9,11.8-.3,8.5.7,6.4A9.7,9.7,0,0,1,4.8,2,21.1,21.1,0,0,1,7.8.4h.3c1.8-.7,3-.3,4.9,1.5h.1a40.1,40.1,0,0,1,5.4,8.2c1.3,2.6,1.6,4.3-.2,6.9l-.5.6c-.8,1-.8,1.2-.8,1.6s1.9,3.4,5.2,6.7S28,30.8,28.8,31s.6,0,1.6-.8l.7-.4c2.5-1.9,4.2-1.6,6.8-.3A40.6,40.6,0,0,1,46.1,35h.1c1.8,1.9,2.2,3.1,1.5,4.9v.2h0a21.1,21.1,0,0,1-1.6,3,10,10,0,0,1-4.3,4.1A7.7,7.7,0,0,1,38.4,48ZM9.5,4.1H9.2L6.9,5.4H6.8A6.3,6.3,0,0,0,4.3,8.1c-.3.7-1.2,2.6,2.4,9A58.9,58.9,0,0,0,17.1,30.9,58.2,58.2,0,0,0,30.9,41.3c6.4,3.6,8.4,2.7,9.1,2.4a6.7,6.7,0,0,0,2.5-2.5.1.1,0,0,0,.1-.1c.5-.8.9-1.6,1.3-2.4v-.2l-.5-.6a35.4,35.4,0,0,0-7.3-4.8c-1.7-.8-1.8-.8-2.7-.1l-.6.4A5.3,5.3,0,0,1,28,34.9c-2.9-.6-7.4-4.9-8.7-6.2s-5.6-5.8-6.2-8.7.6-3.6,1.5-4.8l.4-.6c.7-.9.8-1-.1-2.7a35.4,35.4,0,0,0-4.8-7.3Z" fill="#f68b3c" />
                    </svg>
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 46.8 47.4">
                      <path d="M35.8,47.4H11a11,11,0,0,1-11-11V11.6A11,11,0,0,1,11,.6h8.8a2,2,0,1,1,0,4H11a7,7,0,0,0-7,7V36.4a7,7,0,0,0,7,7H35.8a7,7,0,0,0,7-7v-9a2,2,0,1,1,4,0v9A11,11,0,0,1,35.8,47.4Z" fill="#f68b3c" />
                      <path d="M36.6,20.4A10.2,10.2,0,1,1,46.8,10.2,10.2,10.2,0,0,1,36.6,20.4ZM36.6,4a6.2,6.2,0,1,0,6.2,6.2A6.2,6.2,0,0,0,36.6,4Z" fill="#f68b3c" />
                    </svg>
                  </li>
                  <li class="chat__details d-flex d-xl-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 42.2 11.1">
                      <g>
                        <circle cx="5.6" cy="5.6" r="5.6" fill="#d87232" />
                        <circle cx="21.1" cy="5.6" r="5.6" fill="#d87232" />
                        <circle cx="36.6" cy="5.6" r="5.6" fill="#d87232" />
                      </g>
                    </svg>
                  </li>
                </ul>

              </div>
            </div>
            <div class="chat__content pt-4 px-3" id="chatContent">
              <ul class="chat__list-messages">
              
               
              </ul>
            </div>
            <div class="chat__send-container px-2 px-md-3 pt-1 pt-md-3">
              <div class="custom-form__send-wrapper">
                <input type="text" class="form-control custom-form chat-input" id="chatInput" placeholder="Type Message here …" autocomplete="off">
                <div class="custom-form__send-img">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img" viewBox="0 0 45.7 45.7">
                    <path d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z" fill="#f68b3c" />
                  </svg> -->
                  <label for="fileInput" class="attachment-icon">&#128206;</label>
                
                  <input type="file" id="fileInput" style="display: none;">

                </div>
                <div class="custom-form__send-emoji emoji-picker">
                
                  <span class="emoji-icon">&#x1F600;</span>
                  <emoji-picker></emoji-picker>
                </div>
                <button type="submit" id="sendButton" class="custom-form__send-submit">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send" viewBox="0 0 45.6 45.6">
                    <g>
                      <path d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z" fill="#d87232" />
                      <path d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z" fill="#d87232" />
                    </g>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end content section  -->
      <!-- start infos section  -->
     
    </div>
  </div>
</div>
  </body>
  </html>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.socket.io/4.7.5/socket.io.min.js"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap");
/* ===================================
    Variables
====================================== */
:root {
  --bg-page: #ffffff;
  --bg-page-darker: #f7f7f7;
  --bg-page-darkest: #b3b3b3;
  --colour-primary: #3996fb;
  --colour-primary-lightest: #e8f3ff;
  --colour-primary-darker: #1a7ee6;
  --colour-third: #419d78;
  --colour-third-lighter: #7bc9aa;
  --colour-third-lightest: #e6f7f0;
  --colour-text: #696969;
  --colour-text-lighter: #9b9b9b;
  --colour-text-darker: #626262;
  --colour-text-darkest: #363636;
  --border-color: #e8e7e7;
  --form-radius: 13px;
  --search-form-bg-colour: #f2f2f2;
  --send-form-bg-colour: #f2f2f2;
  --send-btn-box-shadow-colour: #7bbafd;
  --chat-bubble-me: #f2f2f2;
  --chat-bubble-you: var(--colour-primary);
}
.attachment-icon {
  font-size: 21px;
      margin-right: 10px;
      cursor: pointer;
      margin-top: 9px;
    }
.dark-mode {
  --bg-page: #1a1a1a;
  --bg-page-darker: #363636;
  --bg-page-darkest: #818181;
  --colour-primary: #1a71d0;
  --colour-primary-lightest: #202c3a;
  --colour-primary-darker: #449ffd;
  --colour-third: #41c590;
  --colour-third-lighter: #56d6a3;
  --colour-third-lightest: #272f2c;
  --colour-text: #c7c7c7;
  --colour-text-lighter: #868686;
  --colour-text-darker: #dcdcdc;
  --colour-text-darkest: #eaeaea;
  --border-color: #4c4c4c;
  --search-form-bg-colour: #363636;
  --send-form-bg-colour: #363636;
  --send-btn-box-shadow-colour: #44515f;
  --chat-bubble-me: #363636;
  --chat-bubble-you: var(--colour-primary);
}
li {
    list-style: none;
}
/* ===================================
    Base
====================================== */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: "Inter", sans-serif;
  font-weight: normal;
  color: var(--colour-text);
  background-color: var(--bg-page);
}

/* ===================================
    Mixins & functions
====================================== */
/* ===================================
    Main
====================================== */
.messages-page {
  height: 100vh;
}
.messages-page__header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.messages-page__title {
  color: var(--colour-text-darker);
  font-weight: bold;
  font-size: 1.5rem;
}
@media screen and (max-width: 1199px) {
  .messages-page__title {
    font-size: 1.5rem;
  }
}
.messages-page__dark-mode-toogler {
  width: 2.6rem;
  height: 2.6rem;
  padding: 0.35rem;
  border-radius: 50%;
  border: 1px solid var(--border-color);
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.messages-page__dark-mode-toogler:hover {
  background-color: var(--colour-primary);
  border-color: var(--colour-primary);
}
.messages-page__dark-mode-toogler:hover path {
  fill: var(--bg-page-darker);
}
.messages-page__list {
  list-style: none;
  flex-grow: 1;
  overflow-y: auto;
}
.messages-page__list-scroll {
  height: 100%;
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.custom-form {
  color: var(--colour-text-darkest);
  padding: 1.5rem;
  border-radius: 13px;
}
.custom-form__search-wrapper, .custom-form__send-wrapper {
  width: 100%;
  height: 100%;
  position: relative;
}
.custom-form__search-wrapper input::placeholder, .custom-form__send-wrapper input::placeholder {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.custom-form__search-wrapper input:focus, .custom-form__send-wrapper input:focus {
  outline: none;
  box-shadow: none;
}
.custom-form__search-wrapper input {
  padding-right: 3rem;
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:placeholder-shown {
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:focus {
  background-color: var(--bg-page);
  border-color: var(--border-color);
  color: var(--colour-text);
}
.custom-form__send-wrapper input {
  padding-right: 6rem;
  padding-left: 3.25rem;
  background-color: var(--send-form-bg-colour);
  border: none;
}
.custom-form__send-wrapper input:focus {
  background-color: var(--send-form-bg-colour);
  border-color: transparent;
  color: var(--colour-text);
}
.custom-form__search-submit {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: 3.5rem;
  cursor: pointer;
  background-color: transparent;
  border: none;
  outline: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
.emoji-picker emoji-picker {
      display: none;
      position: absolute;
      bottom: 50px;
      right: 0;
    }
.custom-form__search-submit:focus {
  outline: none;
  border: none;
}
.custom-form__send-submit {
  position: absolute;
  top: 50%;
  right: 0.5rem;
  transform: translateY(-50%);
  height: 2.3rem;
  width: 2.3rem;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--colour-primary);
  border-radius: 50%;
  box-shadow: 0 3px 3px var(--send-btn-box-shadow-colour);
  border: none;
  outline: none;
  text-align: center;
  font-size: 1.2rem;
  padding-top: 0.3rem;
  color: white;
  padding-right: 0.1rem;
}
.custom-form__send-submit:focus {
  outline: none;
  border: none;
}
.custom-form__send-submit:hover {
  background-color: var(--colour-primary-darker);
}
.custom-form__send-img {
  position: absolute;
  top: 50%;
  left: 0.5rem;
  transform: translateY(-50%);
  width: 2.3rem;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.custom-form__send-emoji {
  position: absolute;
  top: 50%;
  right: 3.2rem;
  transform: translateY(-50%);
  width: 2.3rem;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}

.messaging-member {
  border-radius: var(--form-radius);
}
.messaging-member:hover {
  background-color: var(--bg-page-darker);
}
.messaging-member--new .messaging-member__name {
  color: var(--colour-text-darker);
}
.messaging-member--new .messaging-member__message {
  color: var(--colour-text-darker);
  font-weight: bold;
}
.messaging-member--online .user-status {
  background-color: var(--colour-third-lighter);
}
.messaging-member--active {
  background-color: var(--colour-primary-lightest);
}
.messaging-member--active:hover {
  background-color: var(--colour-primary-lightest);
}
@media screen and (max-width: 767px) {
  .messaging-member--active {
    background-color: var(--bg-page);
  }
  .messaging-member--active:hover {
    background-color: var(--bg-page-darker);
  }
}
.messaging-member__wrapper {
  cursor: pointer;
  padding: 0.5rem 1rem;
  border-radius: var(--form-radius);
  display: grid;
  grid-template-columns: 4rem 4fr;
  grid-template-rows: 2rem 2rem;
  column-gap: 1rem;
  grid-template-areas: "avatar     name" "avatar     message";
}
@media screen and (max-width: 1199px) {
  .messaging-member__wrapper {
    grid-template-columns: 3.5rem 1fr;
    grid-template-rows: 1.75rem 1.75rem;
  }
}
@media screen and (max-width: 991px) {
  .messaging-member__wrapper {
    grid-template-columns: 3.2rem 1fr;
    grid-template-rows: 1.75rem 1.75rem;
  }
}
.messaging-member__avatar {
  grid-area: avatar;
  position: relative;
}
.messaging-member__avatar img {
  border-radius: 50%;
  width: 100%;
}
.messaging-member__name {
  font-weight: bold;
  grid-area: name;
  color: var(--colour-text-darker);
  margin-top: auto;
  font-size: 0.9rem;
}
.messaging-member__message {
  grid-area: message;
  white-space: nowrap;
  word-break: break-word;
  text-overflow: ellipsis;
  overflow: hidden;
  font-size: 0.9rem;
}

.chat {
  height: 100%;
  width: 100%;
}
.chat__container {
  height: 100%;
  width: 100%;
}
.chat__wrapper {
  background-color: var(--bg-page);
  height: 100%;
  width: 100%;
  border-left: 1px solid var(--border-color);
  border-right: 1px solid var(--border-color);
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
@media screen and (max-width: 767px) {
  .chat__wrapper {
    border-left: none;
    border-right: none;
  }
}
.chat__messaging {
  width: 100%;
  border-bottom: 1px solid var(--border-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.chat__previous {
  width: 8%;
  min-width: 2rem;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.7rem;
  cursor: pointer;
  color: var(--colour-primary);
}
.chat__notification {
  width: 4%;
  min-width: 1.5rem;
}
.chat__notification span {
  display: none;
  width: 1.4rem;
  height: 1.4rem;
  text-align: center;
  border-radius: 50%;
  font-weight: bold;
  color: white;
  background-color: var(--colour-primary);
  font-size: 0.9rem;
}
.chat__notification--new span {
  display: block;
}
.chat__infos {
  flex-grow: 1;
}
.chat__actions {
  font-size: 5px;
  height: 2rem;
  min-width: 2rem;
  color: var(--colour-primary);
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
.chat__actions ul {
  list-style: none;
  display: flex;
}
.chat__actions li {
  width: 2.6rem;
  height: 2.6rem;
  padding: 0.35rem;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: var(--bg-page);
}
.chat__actions li + li {
  margin-left: 0.3rem;
}
.chat__actions li:hover {
  background-color: var(--colour-primary-lightest);
}
.chat__content {
  flex-grow: 1;
  overflow-y: auto;
}
.chat__list-messages {
  list-style: none;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.chat__list-messages li {
  margin-bottom: 0.7rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
}
.chat__list-messages li .chat__bubble {
  margin-bottom: 0.2rem;
}
.chat__bubble {
  position: relative;
  color: var(--colour-text-darkest);
  padding: 0.5rem 1rem;
  border-radius: 22px;
  background-color: var(--bg-page);
  max-width: 30rem;
  font-size: 0.9rem;
  overflow: hidden;
  overflow-wrap: break-word;
  word-break: break-word;
}
.chat__bubble--you {
  margin-right: 2rem;
  color: white;
  background-color: var(--chat-bubble-you);
}
.chat__bubble--me {
  margin-left: 2rem;
  background-color: var(--chat-bubble-me);
  align-self: flex-end;
}
.chat__time {
  font-size: 0.8rem;
  color: var(--colour-text-lighter);
  align-self: center;
  padding-bottom: 0.2rem;
}
.chat__send-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.chat-member__wrapper {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.chat-member__avatar {
  position: relative;
  width: 3.5rem;
}
.chat-member__avatar img {
  border-radius: 50%;
  width: 100%;
}
@media screen and (max-width: 767px) {
  .chat-member__avatar {
    width: 2.5rem;
  }
}
.chat-member__name {
  font-weight: bold;
  color: var(--colour-text-darker);
  margin-top: auto;
  white-space: nowrap;
  word-break: break-all;
  text-overflow: ellipsis;
  overflow: hidden;
  font-size: 1rem;
}
@media screen and (max-width: 1199px) {
  .chat-member__name {
    font-size: 0.9rem;
  }
}
.chat-member__details {
  margin-left: 0.8rem;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
@media screen and (max-width: 767px) {
  .chat-member__details {
    margin-left: 1rem;
  }
}
.chat-member__age {
  font-size: 0.9rem;
  color: var(--colour-text-lighter);
  position: relative;
}
.chat-member__age::after {
  content: " . ";
  font-size: 0px;
  position: absolute;
  top: 50%;
  right: -4px;
  width: 3px;
  height: 3px;
  background-color: var(--colour-text-lighter);
  border-radius: 50%;
}
.chat-member__status {
  color: var(--colour-text-lighter);
  font-size: 0.8rem;
}
.chat__profile {
  width: 100%;
  height: 100%;
  max-width: 20rem;
}
.chat--mobile {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10001;
  transform: translateY(100%);
  display: none;
  transition: transform 0.3s ease-in-out 0.1s;
}
.chat--mobile .chat__wrapper {
  border-radius: 0;
}
.chat--mobile.chat--show {
  display: block;
  transform: translateY(0%);
  border-radius: 0;
}

.user-profile {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  overflow-y: auto;
}
.user-profile__wrapper {
  position: relative;
  height: 100%;
  width: 100%;
  padding-top: 5rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.user-profile__close {
  position: absolute;
  top: 1rem;
  left: 1.5rem;
  width: 2rem;
  height: 2rem;
  color: var(--colour-primary);
  font-size: 1.375rem;
  cursor: pointer;
  z-index: 10003;
}
.user-profile__avatar {
  display: flex;
  justify-content: center;
  align-items: center;
}
.user-profile__avatar img {
  width: 9rem;
  border-radius: 50%;
}
.user-profile__name {
  font-weight: bold;
  margin-top: 0.7rem;
  color: var(--colour-text-darker);
  word-wrap: break-word;
  font-size: 1.15rem;
}
@media screen and (max-width: 767px) {
  .user-profile__name {
    font-size: 1.1rem;
  }
}
.user-profile__phone {
  color: var(--colour-text-darker);
  font-size: 0.9rem;
}
.user-profile__details {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}
.user-profile__location {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.user-profile__description {
  text-align: center;
}
.user-profile__description p {
  margin-top: 1.3rem;
  word-wrap: break-word;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 0.9rem;
}
.user-profile__label {
  font-size: 0.9rem;
  font-weight: bold;
}
.user-profile__tags {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.user-profile__tags li {
  padding: 0.3rem 1rem;
  border-radius: 1rem;
  margin-right: 0.3rem;
  margin-bottom: 0.3rem;
  font-size: 0.9rem;
}
.user-profile__tags a:hover {
  text-decoration: none;
}
.user-profile__tags--primary li {
  background-color: var(--colour-primary-lightest);
  color: var(--colour-primary-darker);
}
.user-profile__tags--primary a:hover {
  color: var(--colour-primary-darker);
}
.user-profile__tags--secondary li {
  background-color: var(--colour-third-lightest);
  color: var(--colour-third);
}
.user-profile__tags--secondary a:hover {
  color: var(--colour-third);
}
.user-profile--large {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10002;
  transform: translateX(100%);
  transition: transform 0.3s ease-in-out 0.1s;
  background-color: var(--bg-page);
  box-shadow: -3px 0 3px rgba(0, 0, 0, 0.06);
}
.user-profile--large.user-profile--show {
  display: block;
  transform: translateX(0%);
  border-radius: 0;
}

.user-status {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 1rem;
  height: 1rem;
  background-color: var(--colour-text-lighter);
  border: 3px solid white;
  border-radius: 50%;
}
.user-status--online {
  background-color: var(--colour-third);
}

.svg-icon {
  width: 70%;
}
.svg-icon path,
.svg-icon circle {
  fill: var(--colour-primary);
}
.svg-icon--send {
  width: 60%;
}
.svg-icon--send path,
.svg-icon--send circle {
  fill: white;
}
.svg-icon--search {
  width: 40%;
}
.svg-icon--search path,
.svg-icon--search circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--send-img {
  width: 55%;
}
.svg-icon--send-img path,
.svg-icon--send-img circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--send-emoji {
  width: 60%;
}
.svg-icon--send-emoji path,
.svg-icon--send-emoji circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--previous {
  width: 55%;
}
.svg-icon--dark-mode {
  width: 80%;
}
.svg-icon--dark-mode path,
.svg-icon--dark-mode circle {
  fill: var(--colour-primary);
}
.avatar-circle {
    width: 66px;
    height: 66px;
    background-color: #000;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: bold;
    margin-right: 10px;
}
.message
{
  margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    list-style: none;
    flex-direction: column;
    justify-content: flex-start;
}
.message-time {
    font-size: 0.8em;
    color: #888;
}
.chat__bubble--me .message-time {
    align-self: flex-end;
}
.chat__bubble--you .message-time {
    align-self: flex-start;
    color: #fff !important;
}
    </style>

    <script>
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
        li.classList.add('clearfix', 'user', 'messaging-member',  'messaging-member--online');
        li.innerHTML = `
          <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
          <div class="avatar-circle">${initials}</div>
          <div class="user-status"></div>
          </div>
               <span class="messaging-member__name name">${user.name} ${user.id == userInfo.userId ? '(you)' : ''} - <span class="user-dept"> ${user.team} </span> </span>
        <span class="status messaging-member__message ${user.status == 'active' ? 'active' : ''}" style="${!user.recentMessage.read ? 'font-weight: bold;' : ''}">
                    ${user.recentMessage.message || ''}
                </span>     
                  
                
                </li>
        `;
        li.addEventListener('click', () => {
            selectUser(user);
            user.recentMessage.read = true;
            const localStorageKey = `readStatus_${user.id}_${user.recentMessage.messageId}`;
            localStorage.setItem(localStorageKey, 'true');
            $chat.fadeIn();
            $chat.addClass("chat--show");
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
                    let messageClass = (message.sender_id == userInfo.userId) ? 'chat__bubble--me' : 'chat__bubble--you';
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

                    let messageElement = `<li class="message">     
                    <div class="chat__time">${dateLabelElement}</div>
                    <div class="message ${messageClass} chat__bubble">
                        ${messageContent}
                        <span class="message-time">${messageTime}</span>
                    </div>
                        </li>
                    `;

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
    let messageClass = (senderUserId === userInfo.userId) ? 'chat__bubble--me' : 'chat__bubble--you';
    let messageTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  

    let messageElement = ` <li class="message">
                            <div class="message ${messageClass} chat__bubble">${data.message}
                            <span class="message-time">${messageTime}</span>
                          </div></li>`;
                      
                    //       <li class="message">     
                    // <div class="chat__time">${dateLabelElement}</div>
                    // <div class="message ${messageClass} chat__bubble">
                    //     ${messageContent}
                    //     <span class="message-time">${messageTime}</span>
                    // </div>
                    //     </li>
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






// chat Js
        $chat = $(".chat");
$profile = $(".user-profile");

/* ===================================
    Screen resize handler
====================================== */
const smallDevice = window.matchMedia("(max-width: 767px)");
const largeScreen = window.matchMedia("(max-width: 1199px)");
smallDevice.addEventListener("change", handleDeviceChange);
largeScreen.addEventListener("change", handleLargeScreenChange);

handleDeviceChange(smallDevice);
handleLargeScreenChange(largeScreen);

function handleDeviceChange(e) {
  if (e.matches) chatMobile();
  else chatDesktop();
}

function handleLargeScreenChange(e) {
  if (e.matches) profileToogleOnLarge();
  else profileExtraLarge();
}

function chatMobile() {
  $chat.addClass("chat--mobile");
}

function chatDesktop() {
  $chat.removeClass("chat--mobile");
}

function profileToogleOnLarge() {
  $profile.addClass("user-profile--large");
}

function profileExtraLarge() {
  $profile.removeClass("user-profile--large");
}

/* ===================================
    Events
====================================== */

$(".messaging-member").click(function () {
  console.log("calling function")
  $chat.fadeIn();
  $chat.addClass("chat--show");
});

$(".chat__previous").click(function () {
  $chat.removeClass("chat--show");
});

$(".chat__details").click(function () {
  $profile.fadeIn();
  $profile.addClass("user-profile--show");
});

$(".user-profile__close").click(function () {
  $profile.removeClass("user-profile--show");
});

$(".messages-page__dark-mode-toogler").click(function () {
  $("body").toggleClass("dark-mode");
});

        </script>
