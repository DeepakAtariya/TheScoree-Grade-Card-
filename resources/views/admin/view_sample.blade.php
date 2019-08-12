@include('admin/header')
<link rel="stylesheet" href="{{ URL::asset('css/view_sample.css') }}">
<div class="row" id="view_sample">
    
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        
    </div>
    
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <article>
            
            <span>{{ $note_data[0]->program_fullform }} \ {{ $note_data[0]->course_code }}({{ $note_data[0]->course_name }})</span>
            <div class="row">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h1>{{ $note_data[0]->unit_name }}</h1>
                <p>&#64;{{ $note_data[0]->unit_author_name }}</p>
                </div>
                
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <!-- <p>Contributed by {{ $note_data[0]->unit_author_name }}</p> -->
                </div>
                
                
                    
            </div>
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Introduction</h3>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{!! $note_data[0]->unit_description !!}</p>
                </div>
            </div>
            <div class="row">    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Application</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{!! $note_data[0]->unit_application !!}</p>
                </div>
            </div>
            <div class="row">    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Important Question & Answers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{!! $note_data[0]->unit_importantQuestions !!}</p>
                </div>
            </div>
            <div class="row">    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>Refernces</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{!! $note_data[0]->unit_reference !!}</p>
                </div>
            </div>
            
        </article>
        <div class="row">
                <div class="col-md-12 col-lg-12">
                    @if($note_data[0]->published == 0)
                    <a id="publish_button" href="{{ url('moderator/publish_note') }}?id={{ $note_data[0]->id }}" class="btn btn-link">publish</a>
                    @else
                    <a id="unpublish_button" href="{{ url('moderator/unpublish_note') }}?id={{ $note_data[0]->id }}" class="btn btn-link">unpublish</a>
                    @endif

            
                </div>
                <div class="col-xs-12 col-sm-12">
                @if($note_data[0]->published == 0)
                    <a id="publish_button" href="{{ url('moderator/publish_note') }}?id={{ $note_data[0]->id }}" class="btn btn-link">publish</a>
                    @else
                    <a id="unpublish_button" href="{{ url('moderator/unpublish_note') }}?id={{ $note_data[0]->id }}" class="btn btn-link">unpublish</a>
                    @endif
                </div>
            </div>    
    </div>


    
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        
    </div>
    
</div>


@include('admin/footer')
