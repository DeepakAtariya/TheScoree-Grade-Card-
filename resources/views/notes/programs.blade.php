@include('header')


<div class="container">

    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <a class="btn-link" href="{{ url('') }}">Home  </a>\ <a class="btn-link" href="{{ url('notes') }}">Notes </a>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        
    </div>
    
    <div class="row">
        
    
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h2>Program List</h2>
            <hr>
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        

        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            
            <ul class="">
                @foreach($program_list as $data)
                    <li>
                        <a class="btn-link" href="{{ url('notes').'?program='.$data->program_code }}">{{ $data->program_code }} ({{ $data->program_fullform }})</a> 
                     </li>
                @endforeach
            </ul>
        </div>
    </div>
    
    
</div>


<footer id="home_footer" class="footer">
@include('footer')
</footer>