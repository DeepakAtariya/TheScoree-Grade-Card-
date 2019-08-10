@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<div class="" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-lg-10 col-md-10 col-sm-12 ">
            <div >
                <!-- <label id="contribute">Developer Call</label>
            
                <div class=" modal-body">
                  Thank you for showing your interest, we appreciate it. You may suggest any feature you would like to add to this project by sending an email to <a style="font-size:12px; text-decoration:underline" href="mailto:admin@thescoree.com">admin@thescoree.com</a><br><br>
                  Happy Coding!
                </div> -->
                <!-- Table -->
                <table id="contribute_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Developer Call</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class=" modal-body">
                  Thank you for showing your interest, we appreciate it. You may suggest any feature you would like to add to this project by sending an email to <a style="" href="mailto:admin@thescoree.com" id="mail_admin">admin@thescoree.com</a><br><br>
                  Happy Coding!
                </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
            
            
        </div>
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')