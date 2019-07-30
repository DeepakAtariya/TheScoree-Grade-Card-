 @include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

<div class="alert-format">
    <div class="alert alert-info alert-dismissible ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.0 : </strong> With this release you can check the results of IGNOU BCA/MCA courses only.
    </div>          
</div>
<div class="text-center" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10 ">
            <!-- <div id="feedback_container">
                <label id="guest">Check Your Grade Card Here!</label>
                <form name="guestForm" id="guestForm" method="POST" role="form" action="{{ url('getGradeCard') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select class="" id="guest_program" name="program">
                            <option value>Select Program:</option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="enrollment" id="guest_enrollment" tabindex="1" class="" placeholder="Enrollment Number" > 
                    </div>
                    <div class="form-group">
                        <div class="row text-center">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                                                        
                                <input type="button" name="guest-submit" id="go"  onclick="return validata()" tabindex="4" class=" " value="Go" >
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->

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
                      <form name="guestForm" id="guestForm" method="POST" role="form" action="{{ url('getGradeCard') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select class="" id="guest_program" name="program">
                            <option value>Select Program:</option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="enrollment" id="guest_enrollment" tabindex="1" class="" placeholder="Enrollment Number" > 
                    </div>
                    <div class="form-group">
                        <div class="row text-center">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                                                        
                                <input type="button" name="guest-submit" id="go"  onclick="return validata()" tabindex="4" class=" " value="Go" >
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
<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')