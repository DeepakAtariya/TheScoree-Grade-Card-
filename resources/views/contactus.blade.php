@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/contactus.css') }}">
<div class="container text-center" id="main" style="padding: 2%;">
    <div class="row" id="">
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-lg-10 col-md-10 col-sm-12 ">
            <div>
                <table id="feedback_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Contact Us</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <hr>
                        
                        <form action="{{ url('submit_contactus') }}" class="form" role="form" name="Feedback" id="Feedback" method="post">
                        {{ csrf_field() }}
                          <div class="form-group">
                              <input type="text" name="name" id="name"  class="" placeholder="Name" required  > 
                          </div>
                          <div class="form-group">
                              <input type="email" name="email" id="email"  class="" placeholder="Email" required> 
                          </div>
                          <div class="form-group">
                              <textarea type="text" name="improvement" id="improvement" rows="3" class="" placeholder="Improvements/Suggestions/Queries"  required></textarea>
                          </div>
                          <!-- <div class="form-group">
                              <input type="file" name="file" id="file" class="" placeholder="Upload Screenshot/Supporting" ngModel required #file> 
                          </div> -->
                        
                          <div class="form-group">
                              <input type="submit" name="submit" id="submit"   class="btn btn-default btn-block" value="Submit">
                              <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                          </div>
                        </form>
                        
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

<footer class="footer">
@include('footer')
</footer>