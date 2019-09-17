@include('header')


<div class="container">
    
    <div class="row">
        
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
    
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        
            <a class="btn-link" href="{{ url('') }}">Home  </a>\ <a class="btn-link" href="{{ url('notes') }}">Notes  </a>\ <a class="btn-link" href="{{ url('notes') }}?program={{ $unit_list[0]->program_code }}">{{ $unit_list[0]->program_code }} </a> \ <a class="btn-link" href="{{ url('notes') }}?program={{ $unit_list[0]->course_code }}">{{ $unit_list[0]->course_code }}</a>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        
    </div>
    
    
    <div class="row">
        
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h2>Unit List</h2>
            <hr>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        

        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            
            <ul class="">
                @foreach($unit_list as $data)
                    <li>
                        <a class="btn-link" href="{{ url('notes\view').'?uuid='.$data->id }}">{{ $data->unit_name }} </a> 
                     </li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
    </div>
    
    
</div>

<footer id="home_footer" class="footer">
@include('footer')
</footer>