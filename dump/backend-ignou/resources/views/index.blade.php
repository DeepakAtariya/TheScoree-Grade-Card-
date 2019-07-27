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
                                        <div id="feedback_container">
                                                <label id="guest">Check Your Grade Card Here!</label>
                                                <!-- <h6></h6> -->

                                        <form name="guestForm" id="guestForm" method="POST" role="form" action="{{ url('getGradeCard') }}">
                                            <div class="form-group">
                                                <select 
                                                class="" 
                                                name="guest_program" 
                                                id="guest_program"
                                                required>
                                                  <option value>Select Program:</option>
                                                  <option value="BCA">BCA</option>
                                                  <option value="MCA">MCA</option>
                                                  </select>
                                                </div>

                                            <div class="form-group">
                                                <input type="text" name="guest_enrollment" id="guest_enrollment" tabindex="1" class="" placeholder="Enrollment Number"  required > 
                                            </div>
                                            <div class="form-group">
                                                    
                                                    <!-- guest_error -->

                                            </div>

                                            <div class="form-group">
                                                <div class="row text-center">
                                                    
                                                    
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                                                        
                                                        <input type="submit" name="guest-submit" id="guestSubmit" tabindex="4" class="btn btn-default btn-block" value="Go"  class="btn btn-default">
                                                    </div>
                                                    

                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                        
                                    </div>
                                    


                            </div>
                            </div>
                            </div>
@include('footer')