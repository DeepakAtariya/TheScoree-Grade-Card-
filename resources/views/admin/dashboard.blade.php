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
                          </div>
                      </div>
</div>
        <br>
        <br>    
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
