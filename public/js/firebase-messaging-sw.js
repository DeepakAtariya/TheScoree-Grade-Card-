// importScripts('https://www.gstatic.com/firebasejs/5.2.0/firebase.js');
importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-messaging.js');

var firebaseConfig = {
    apiKey: "AIzaSyBaWWTN10o_upA9hNFU74TJfMr009cCFJ4",
    authDomain: "thescoree-caaa5.firebaseapp.com",
    databaseURL: "https://thescoree-caaa5.firebaseio.com",
    projectId: "thescoree-caaa5",
    storageBucket: "",
    messagingSenderId: "698972669010",
    appId: "1:698972669010:web:5b93cbefe98fe3a0"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

var messaging = firebase.messaging();

// receive message sent when broswer window is not on..
messaging.setBackgroundMessageHandler(function (payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
    vibrate: [100, 50, 100],
    // icon: '/firebase-logo.png'
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});


