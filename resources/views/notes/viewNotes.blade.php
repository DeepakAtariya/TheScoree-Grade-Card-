@include('header')


<div class="container">
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Program List</h2>
        </div>
        
    </div>
    
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <ul class="list-group">
                @foreach($program_list as $data)
                    <li class="list-group-item"><a href="{{ url('notes').'?program='.$data->code }}"></a>  {{ $data->code }} ({{ $data->program_fullform }})</li>
                @endforeach
            </ul>
        </div>
    </div>
    
    
</div>


@include('footer')