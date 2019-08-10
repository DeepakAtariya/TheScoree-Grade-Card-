@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/contactus.css') }}">
<div class="text-center" id="main" style="padding: 2%;">
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
                <table id="feedback_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Contact Us</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=" modal-body" id="">
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