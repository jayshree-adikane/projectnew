<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chat Application</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="home-page__content messages-page">
  <div class="container-fluid h-100">
    <div class="row px-0 h-100">
      <!-- start message list section  -->
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
            <input type="text" class="form-control custom-form" id="search" placeholder="Rechercher un message, un utilisateur…" autocomplete="off">
            <button type="submit" class="custom-form__search-submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--search" viewBox="0 0 46.6 46.6">
                <path d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z" fill="#f68b3c" />
              </svg>
            </button>
          </div>
        </div>

        <ul class="messages-page__list pb-5 px-1 px-md-3">
          <li class="messaging-member messaging-member--new messaging-member--online">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/men/74.jpg" alt="Bessie Cooper" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Bessie Cooper</span>
              <span class="messaging-member__message">Yes, I need your help with the project, it need it done by tomorrow 😫</span>
            </div>
          </li>
          <li class="messaging-member messaging-member--online messaging-member--active">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Jenny Smith</span>
              <span class="messaging-member__message">Perfect, thanks !</span>
            </div>
          </li>
          <li class="messaging-member">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/women/17.jpg" alt="Courtney Simmons" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Courtney Simmons</span>
              <span class="messaging-member__message">Going home soon, don't worry</span>
            </div>
          </li>
          <li class="messaging-member messaging-member--online">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/women/39.jpg" alt="Martha Curtis" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Martha Curtis</span>
              <span class="messaging-member__message">Great 😂</span>
            </div>
          </li>
          <li class="messaging-member messaging-member--online">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/men/27.jpg" alt="Rozie Tucker" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Gab Ryan</span>
              <span class="messaging-member__message">Sure, may I get your phone number? 😃</span>
            </div>
          </li>
          <li class="messaging-member">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/men/17.jpg" alt="Jules Zimmermann" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Jules Zimmermann</span>
              <span class="messaging-member__message">Well, here I am, coming as faaast as I can !</span>
            </div>
          </li>
          <li class="messaging-member">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/men/9.jpg" alt="Mark Reid" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Mark Reid</span>
              <span class="messaging-member__message">Have you listened to the latest album? Pure perfection</span>
            </div>
          </li>
          <li class="messaging-member  messaging-member--online">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/men/54.jpg" alt="Russell Williams" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Russell Williams</span>
              <span class="messaging-member__message">Nice to meet you again </span>
            </div>
          </li>
          <li class="messaging-member">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg" alt="Savannah Nguyen" loading="lazy">
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name">Savannah Nguyen</span>
              <span class="messaging-member__message">Really ?!</span>
            </div>
          </li>
        </ul>
      </div>
      <!-- end message list section  -->
      <!-- start content section  -->
      <div class="chat col-12 col-md-8 col-lg-7 col-xl-6 px-0 pl-md-1">
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
              <div class="chat__infos pl-2 pl-md-0">
                <div class="chat-member__wrapper" data-online="true">
                  <div class="chat-member__avatar">
                    <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                    <div class="user-status user-status--large"></div>
                  </div>
                  <div class="chat-member__details">
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
            <div class="chat__content pt-4 px-3">
              <ul class="chat__list-messages">
                <li>
                  <div class="chat__time">Yesterday at 16:43</div>
                  <div class="chat__bubble chat__bubble--you">
                    Hey, I bought something yesterdat but haven't gotten any confirmation. Do you know I if the order went through?
                  </div>
                </li>
                <li>
                  <div class="chat__bubble chat__bubble--me">
                    Hi! I just checked, your order went through and is on it's way home. Enjoy your new computer! 😃
                  </div>
                </li>
                <li>
                  <div class="chat__bubble chat__bubble--you">
                    Ohh thanks ! I was really worried about it !
                  </div>
                  <div class="chat__bubble chat__bubble--you">
                    Can't wait for it to be delivered
                  </div>
                </li>
                <li>
                  <div class="chat__time">07:14</div>
                  <div class="chat__bubble chat__bubble--me">
                    Aenean iaculis massa non lorem dignissim volutpat. Praesent id faucibus lorem, a sagittis nunc. Duis facilisis lectus vel sapien ultricies, sed placerat augue elementum. In sagittis, justo nec sodales posuere, nunc est sagittis tellus, eget scelerisque dolor risus vel augue
                  </div>
                  <div class="chat__bubble chat__bubble--me">
                    Is everything alright?
                  </div>

                </li>
                <li>
                  <div class="chat__bubble chat__bubble--you">
                    Vestibulum finibus pulvinar quam, at tempus lorem. Pellentesque justo sapien, pulvinar sed magna et, vulputate commodo nisl. Aenean pharetra ornare turpis. Pellentesque viverra blandit ullamcorper. Mauris tincidunt ac lacus vel convallis. Vestibulum id nunc nec urna accumsan dapibus quis ullamcorper massa. Aliquam erat volutpat. Nam mollis mi et arcu dapibus condimentum.
                  </div>
                  <div class="chat__bubble chat__bubble--you">
                    Nulla facilisi. Duis laoreet dignissim lectus vel maximus
                  </div>
                  <div class="chat__bubble chat__bubble--you">
                    Curabitur volutpat, ipsum a condimentum hendrerit ! 😊
                  </div>
                </li>
                <li>
                  <div class="chat__time">09:26</div>
                  <div class="chat__bubble chat__bubble--me">
                    Perfect, thanks !
                  </div>
                </li>
              </ul>
            </div>
            <div class="chat__send-container px-2 px-md-3 pt-1 pt-md-3">
              <div class="custom-form__send-wrapper">
                <input type="text" class="form-control custom-form" id="message" placeholder="Ecrivez un message …" autocomplete="off">
                <div class="custom-form__send-img">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img" viewBox="0 0 45.7 45.7">
                    <path d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z" fill="#f68b3c" />
                  </svg>
                </div>
                <div class="custom-form__send-emoji">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-emoji" viewBox="0 0 46.2 46.2">
                    <path d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z" fill="#f68b3c" />
                  </svg>
                </div>
                <button type="submit" class="custom-form__send-submit">
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
      <div class="col-12 col-md-5 col-lg-4 col-xl-3 px-4 px-sm-5 px-lg-4 user-profile">
        <div class="user-profile__close d-flex d-xl-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 38.8 38.9">
            <g>
              <path d="M2,38.9a1.9,1.9,0,0,1-1.4-.5,2.1,2.1,0,0,1,0-2.9L35.4.6a1.9,1.9,0,0,1,2.8,0,1.9,1.9,0,0,1,0,2.8L3.4,38.4A1.9,1.9,0,0,1,2,38.9Z" fill="#d87232" />
              <path d="M36.8,38.9a1.9,1.9,0,0,1-1.4-.5L.6,3.4A1.9,1.9,0,0,1,.6.6,1.9,1.9,0,0,1,3.4.6L38.2,35.5a2.1,2.1,0,0,1,0,2.9A1.9,1.9,0,0,1,36.8,38.9Z" fill="#d87232" />
            </g>
          </svg>
        </div>
        <div class="user-profile__wrapper">
          <div class="user-profile__avatar">
            <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Jenny Smith" loading="lazy">
          </div>
          <div class="user-profile__details mt-1">
            <span class="user-profile__name">Jenny Smith</span>
            <span class="user-profile__phone">(025) 015-234-567</span>
            <span class="user-profile__location">New York, United States</span>
          </div>
          <div class="user-profile__description">
            <p>Fly me to the moon 🌙 If you feel like your life is a routine, step back and take a deep breath.</p>
          </div>
          <div class="user-profile__learning mt-4">
            <span class="user-profile__label">Social Medias</span>
            <ul class="user-profile__tags user-profile__tags--primary mt-2">
              <li><a href="https://www.instagram.com/tiantsoa_sh/" target="_blank">Instagram</a></li>
              <li><a href="https://www.linkedin.com/in/tiantsoa-rabemananjara-254655152/" target="_blank">Linkedin</a></li>
              <li><a href="https://codepen.io/tiantsoa" target="_blank">Codepen</a></li>
            </ul>
          </div>
          <div class="user-profile__hobbies">
            <span class="user-profile__label">Activities</span>
            <ul class="user-profile__tags user-profile__tags--secondary mt-2">
              <li>Biking</li>
              <li>Cooking</li>
              <li>Traveling</li>
              <li>Grahic design</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
  </html>
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
    </style>

    <script>
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

  console.log("callling function>>>>>>>>>>>>>>>>>")
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
