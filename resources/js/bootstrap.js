import _ from 'lodash';
window._ = _;
import Popper from './admin/lib/popper.js';
import Swal from 'sweetalert2';

import 'bootstrap';

try {
   window.Popper = Popper;
   window.Swal = Swal;
} catch (e) { console.log(e) }

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
   broadcaster: 'pusher',
   key: import.meta.env.VITE_PUSHER_APP_KEY,
   cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
   wsHost: window.location.hostname,
   wsPort: 6001,
   forceTLS: false,
   disableStats: true,
   encrypted: false,
   csrfToken: $('meta[name="csrf-token"]').attr('content'),
   auth: {
      withCredentials: true,
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   },
});
   // authEndpoint: '/broadcasting/auth',

const a = window.Echo.channel('caoson')
   .listen('.server.created', (e) => {
      console.log(e);
   });

   console.log(a)

window.Echo.private(`lockacc.` + document.getElementById("user_id").value)
   .listen('.server.created', (event) => {
      console.log('Received message:', event);
   });

   var user_id = document.getElementById("user_id").value;
   window.Echo.join(`online.`+ document.getElementById("user_id").value)
        .here(users => {
            // Handle online users
            const online = users.some(user => user.id === user_id);
            console.log(`User ${user_id} is ${online ? 'online' : 'offline'}`);
            console.log("listen : " + users)
        })
        .joining(user => {
            // Handle user joining
            console.log("joining : " + users)
        })
        .leaving(user => {
            // Handle user leaving
            console.log("leaving : " + users)
        }).error((error) => {
         console.error(error);
     });

        window.addEventListener('beforeunload', function () {
         window.Echo.leave(`online.${user_id}`);
         window.Echo.disconnect();
         window.Echo = null;
         console.log(123)
     
         // axios.post('/logout'); // Optional: Log out the user on the server side
     });


const webSocket = new WebSocket('ws://codemarket.com:6001/my-websocket');
// var socketId = webSocket.socketId();
//    console.log(socketId);

webSocket.addEventListener('open', event => {
    console.log('WebSocket is open');
    webSocket.send('Hello, server 123!');
});

webSocket.addEventListener('message', event => {
    console.log('message: ', event.data);
});

webSocket.addEventListener('close', event => {
    console.log('WebSocket is closed');
});

// ws://codemarket.com:6001/app/p123?protocol=7&client=js&version=8.0.1&flash=false