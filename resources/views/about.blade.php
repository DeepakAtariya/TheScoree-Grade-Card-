@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<div class="text-center" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10 ">
            <table id="contribute_container" >
                  <thead>
                    <tr id="contribute">
                      <th>About Me</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="modal-body">
                        <p>Hello, I am Scoree! I am a general purpose website developed by <a href="https://github.com/DeepakAtariya" style="color:black; font-size:16px;" >Deepak</a>, for the students of IGNOU. I am here to solve the problems faced by the students studying here.I would be helping you in working on your weak points.</p>
                     
                        <h3>Releases</h3>


                        <p>
                          <!-- <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.1 : </strong> Term-End Results are  -->
                          <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.0 : </strong> With this release you can check the results of IGNOU BCA/MCA courses only.
                        </p>

                        <p>There's a lot more to come, so stay tuned!</p>
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
<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')