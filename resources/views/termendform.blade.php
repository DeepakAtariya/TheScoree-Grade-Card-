@include('header')
<title>
IGNOU TERM END DECEMBER 2019
</title>

<style>
#termendEnrollment{

}
</style>

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

<div class="text-center" id="main" style="padding: 1%;">
    <div class="row" id="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10 ">

<table id="feedback_container" >
                  <thead>
                    <tr>
                      <td>
                          <img src="{{ URL::asset('images/term_end.png')}}" alt="IGNOU TERM END DECEMBER 2019" srcset="" class="img-responsive">
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class=" modal-body "><br>
                      <form action="{{ url('termend') }}" method="get" class="form-inline" role="form" name="termendform">
                        <div class=" ">
                        <!-- <label class="term-end-enrollment" for="">Enrollment</label> -->
                            
                            <input type="number" class="" id="termendEnrollment" name="enrollment" placeholder="Enrollment Number" >
                            <input type="submit" name="guest-submit" id="go"  onclick="return validataTermend()" class=" " value="Go" >
                        </div>
                   
                
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            
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