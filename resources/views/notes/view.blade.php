@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/onlyview.css') }}">

<div class="container">
    
    <div class="row">
    
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
    
        
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <a class="btn-link" href="{{ url('') }}">Home \ </a><a class="btn-link" href="{{ url('notes') }}">Notes \ </a><a class="btn-link" href="{{ url('notes') }}?program={{ $unit_data[0]->program_code }}">{{ $unit_data[0]->program_code }} \ </a><a class="btn-link" href="{{ url('notes/units') }}?program={{ $unit_data[0]->program_code }}&course={{ $unit_data[0]->course_code }}">{{ $unit_data[0]->course_code }} \ </a><a class="btn-link" href="{{ url('notes\view') }}?uuid={{ $unit_data[0]->id }}">{{ $unit_data[0]->unit_name }}</a>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        
    </div>
    @foreach($unit_data as $data)
    <div class="row">
        

        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h1>{{ $data->unit_name }}</h1>
            <h4>{{ "@".$data->unit_author_name }}</h4>
        </div>

        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        
    </div>
    
    
    <div class="row">

        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">        
                <h2>Description</h2>
                <hr class="class-hr">
                {!! $data->unit_description !!}
                <h2>Application</h2>
                <hr class="class-hr">
                {!! $data->unit_application !!}
                <h2>Questions</h2>
                <hr class="class-hr">
                {!! $data->unit_importantQuestions !!}
                <h2>Reference</h2>
                <hr class="class-hr">
                {!! $data->unit_reference !!}
            
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
    </div>
    
    @endforeach
</div>


@include('footer')
