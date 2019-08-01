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
                        <p>Hello I am scoree, I am general purpose website for ignou students developed by Deepak Atariya. I am trying to improve the gaps where students face while studying in open university. This website helps you to work on your weak points.</p>
                        <p>I currently cover the results of BCA and MCA courses of Indira Gandhi National Open University with the first series of release.</p>
                     
                        <p>There is a lot more to come, stay tuned.</p>
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