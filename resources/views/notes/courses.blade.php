@include('header')


<div class="container">
    
    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <a class="btn-link" href="{{ url('') }}">Home  </a>\ <a class="btn-link" href="{{ url('notes') }}">Notes  </a>\ <a class="btn-link" href="{{ url('notes') }}?program={{ $course_list[0]->program_code }}">{{ $course_list[0]->program_code }}</a>
        </div>
        
    </div>
    
    
    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h2>Course List</h2>
            <hr>
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            
            <ul class="">
                @foreach($course_list as $data)
                    <li>
                        <a class="btn-link" href="{{ url('notes\units').'?program='.$data->program_code }}&course={{$data->course_code}}">{{ $data->course_code }} ({{ $data->course_name }})</a> 
                     </li>
                @endforeach
            </ul>
        </div>
    </div>
    
    
</div>


<footer id="home_footer" class="footer">
@include('footer')
</footer>