 @include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

<div class="alert-format">
    <div class="alert alert-info alert-dismissible ">
        <!-- <a href="#" id="close_button" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
        <strong ><span class="glyphicon glyphicon-info-sign"></span>  Term-End Results will be out soon </strong> <a id="click_here" href="#" data-toggle="modal" data-target="#modal-id" >click here</a> to see the results
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



<div class="modal fade" id="modal-id">
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

<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')