@include('admin/header')

<link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">


<!-- <div class="container"> -->

<div class="">
    
    <div class="col-md-1 col-lg-1">
        
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">   
    <div id="scorecard">
                      <div class="column">
                          <div class="card">
                              
                                          <div id="assignment" >
                                              <label>Sub<br> {{ $total_notes }}</label>
                                          </div>
                                          <div id="assignment" >
                                              <label>Pub<br>{{ $total_published }}</label>
                                          </div>
                                          <div id="assignment" >
                                              <label>Unpub<br> {{ $total_unpublished }}</label>
                                          </div>
                                          <div id="assignment" >
                                              <label>GC<br>{{ $total_gradecard }}</label>  
                                        </div>
                                          <div id="assignment" >
                                              
                                              <label>Conn-User<br>{{ $pushNotiData }}</label>  
                                        </div>
                          </div>
                      </div>
</div>
        <br>
        <br>    
        <br>
        <p>To send alert to user use <a class="btn-link" data-toggle="modal" href='#modal-id'> populate </a> route with title and body parameter</p>
        
        
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Send Notification to people</h4>
                    </div>
                    <form action="{{ url('populate') }}" method="GET" role="form">
                    <div class="modal-body">
                        <legend>Enter title and message.</legend>
                    
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="title" placeholder="Input Title">
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <input type="text" class="form-control" id="" name="body" placeholder="Input Message to send">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Program</th>
                    <th>Course</th>
                    <th>Unit Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($final as $data)
                @if($data->published==0)
                <tr >
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->program_fullform }}</td>
                    <td>{{ $data->course_code." - ".$data->course_name }}</td>
                    <td>{{ $data->unit_name }}</td>
                    <td id="unpublished">
                        <a href="{{ url('moderator/edit_notes') }}?id={{ $data->id }}"><i class="fa fa-edit"></i></a>
                        
                        <a href="{{ url('moderator/view_sample') }}?id={{ $data->id }}"><i class="fa fa-eye"></i></a>

                    </td>
                </tr>
                @else
                <tr >
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->program_fullform }}</td>
                    <td>{{ $data->course_code." - ".$data->course_name }}</td>
                    <td>{{ $data->unit_name }}</td>
                    <td id="published">
                        <a href="{{ url('moderator/edit_notes') }}?id={{ $data->id }}"><i class="fa fa-edit"></i></a>
                        
                        <a href="{{ url('moderator/view_sample') }}?id={{ $data->id }}"><i class="fa fa-eye"></i></a>



                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-1 col-lg-1">
        
    </div>
</div>
    
<!-- </div> -->

@include('admin/footer')
