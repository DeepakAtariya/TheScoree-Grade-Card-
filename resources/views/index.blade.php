@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

<div class="alert-format">
    <div class="alert alert-info alert-dismissible ">
        <a href="#" id="close_button" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong ><span class="glyphicon glyphicon-info-sign"></span> </strong> <a id="click_here" style="font-size:15px;" href="{{ url('termendresults') }}" >Term End Exam Results - June 2019 is out! </a>
    </div>          
</div>
<div class="text-center" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10 ">
            <table id="feedback_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Check Your Grade Card Here!</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      
                      <div class=" modal-body text-center"><br>
                      <form name="gradeCardForm" id="gradeCardForm" method="POST" role="form" action="{{ url('getGradeCard') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select class="" id="guest_program" name="program" required>
                            <option value>Select Program:</option>
                            <option value="BCA">BCA (Bachelor of Computer Application)</option>
                            <option value="MCA">MCA (Master of Computer Application)</option>
                            <option value="MEG">MEG (Master of Arts - English)</option>
                            <option value="BCOM">BCOM (Bachelor of Commerce )</option>
                        </select>   
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="enrollment" id="termendEnrollment" tabindex="1" class="" placeholder="Enrollment Number" > 
                    </div>
                    <div class="form-group">
                        <div class="row text-center">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                                                        
                                <!-- <input type="button" name="guest-submit" id="go"  onclick="return validata()" tabindex="4" class=" " value="Go" > -->
                                <input type="submit" name="guest-submit" id="go"  onclick="return validataTermend()" tabindex="4" class=" " value="Go" >
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
    </div>
</div>



<div class="modal fade" id="modal-id_scrapped">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Term End Exam Results - June 2019 </h4>
                <!-- <h6 >Soon!</h6> -->
            </div>
            <form action="{{ url('termend') }}" method="get" class="form-inline" role="form" name="termendform">
            <div class="modal-body text-center" >
                
                
                
                
                    
                    
                   
                        <div class="form-group ">
                        <!-- <label class="term-end-enrollment" for="">Enrollment</label> -->
                            
                            <input type="number" class="" id="termendEnrollment" name="enrollment" placeholder="Enrollment Number" >
                            <input type="submit" name="guest-submit" id="go"  onclick="return validataTermend()" tabindex="4" class=" " value="Go" >
                        </div>
                   
                
                    
                
                    
                
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                
                
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <!--<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>-->

        <!-- Add Firebase products that you want to use -->
        <!--<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-auth.js"></script>-->
        <!--<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-firestore.js"></script>-->
        <!-- <script src="/__/firebase/6.4.1/firebase-app.js"></script> -->
        <!--<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>-->
        <script src="https://www.gstatic.com/firebasejs/3.5.0/firebase-app.js"></script>
        <!-- <script src="/__/firebase/6.4.1/firebase-messaging.js"></script> -->
        <script src="https://www.gstatic.com/firebasejs/3.5.0/firebase-messaging.js"></script>
        <!-- <script src="/__/firebase/init.js"></script> -->


        <script>


              // Your web app's Firebase configuration
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
            
            // var firebaseConfig = {
            // apiKey: "AIzaSyBaWWTN10o_upA9hNFU74TJfMr009cCFJ4",
            // authDomain: "thescoree-caaa5.firebaseapp.com",
            // databaseURL: "https://thescoree-caaa5.firebaseio.com",
            // projectId: "thescoree-caaa5",
            // storageBucket: "thescoree-caaa5.appspot.com",
            // messagingSenderId: "698972669010",
            // };

            //  // Initialize Firebase
            // firebase.initializeApp(firebaseConfig);
            
            
            const messaging = firebase.messaging();
            
            navigator.serviceWorker.register('{{ URL::asset("js/firebase-messaging-sw.js") }}')
            .then((registration) => {
                messaging.useServiceWorker(registration);
            messaging.requestPermission()
            .then(function(){
                console.log('Have permission');
                // debugger;
                return messaging.getToken();
                
            })
            .then(function(token){
                // debugger;

                console.log(token);
                $.ajax({
                    type: "POST",
                    url: '{{ url("api/saveDeviceTokens") }}',
                    data: {"token":token},
                    success: function(response){
                        console.log(response);
                    }
                });
            })
            .catch(function(err){
                console.log(err);
                
            });
            });

            messaging.onMessage(function (payload) {
                console.log("Message received. ", payload);
            // ...
            });
            
            // navigator.serviceWorker.register('{{ URL::asset("js/firebase-messaging-sw.js") }}')
            // .then((registration) => {
            //     messaging.useServiceWorker(registration);
            //     console.log(registration);
            //      // Request permission and get token.....
            // });
            // console.log(Notification.permission);
            // console.log(Notification.requestPermission());
            
            // document.addEventListener('DOMContentLoaded', function() {
            //     if (!Notification) {
            //     alert('Desktop notifications not available in your browser. Try Chromium.');
            //     return;
            //     }
            //     if (Notification.permission !== 'granted')
            //         Notification.requestPermission();
            // });



            
// const messaging = firebase.messaging();
// messaging.requestPermission()
//   .then(function () {
//     console.log('Notification permission granted.');
//     return messaging.getToken();
//   })
//   .then(function (token) {
//     console.log('fcm id ' + token);
//     localStorage.setItem('deviceID', token);
//   })
//   .catch(function (err) {
//     console.log('Unable to get permission to notify. ', err);
//   });

// // receive message in the webpage when it is on.
// messaging.onMessage(function (payload) {
//   console.log("Message received. ", payload);
//   // ...
// });
 </script>

<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')