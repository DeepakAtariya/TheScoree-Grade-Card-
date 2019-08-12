@include('admin/header')

<link rel="stylesheet" href="{{ URL::asset('css/contactus.css') }}">
<div class="text-center" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-lg-10 col-md-10 col-sm-12 ">
            <div>
                <table id="feedback_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Lets Monitor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=" modal-body" id="">
                        <form action="{{ url('moderator/login') }}" class="form" role="form" name="Feedback" id="Feedback" method="post">
                            {{ csrf_field() }}
                          <div class="form-group">
                              <input type="email" name="email" id="email"  class="" placeholder="Email" required> 
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" id="password"  class="" placeholder="password" required> 
                          </div>
                          <div class="form-group">
                              <input type="submit" name="submit" id="submit"   class="btn btn-default btn-block" value="Submit">
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


@include('admin/footer')
