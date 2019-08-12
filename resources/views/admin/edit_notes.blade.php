@include('admin/header')

<link rel="stylesheet" href="{{ URL::asset('css/edit_notes.css') }}">
<div class="" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-lg-10 col-md-10 col-sm-12 ">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
            <div>
                <table id="notes_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Edit Notes</th>
                    </tr>
                    <tr>
                        <td style="padding:15px;">
                        This is a small initiative to help students in their studies. This initiative is meant to provide a brief introduction to the topic for  a basic understanding of the subject. Your references will help students to delve into the subject. All the notes will be available publicly, you can access them from anywhere.<br>
Thank you for lending your precious time, your small contribution can make a change in the society in terms of providing valuable content free of cost.
                            <!-- <span style=""></span> -->
                            
                        </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=" modal-body" id="">
                        <form action="{{ url('moderator/update_notes') }}" class="form" role="form" name="Feedback" id="Feedback" method="post">
                            {{ csrf_field() }}
                            <!-- <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
                                    <div class="form-group">
                                        <input type="text" name="unit_author_name" id="name"  class="" placeholder="Author name" value="{{ $note_data[0]->unit_author_name }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="unit_author_email" id="name"  class="" placeholder="Author Email" value="{{ $note_data[0]->unit_author_email }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <select class="" id="program" name="program" required>
                                            <option value>Select Program:</option>
                                            @foreach($program as $p)
                                                @if(strcmp($note_data[0]->program_code,$p->program_code)==0)
                                                <option value="{{ $p->id }}" selected>{{ $p->program_code }}</option>
                                                @else
                                                <option value="{{ $p->id }}">{{ $p->program_code }}</option>
                                                @endif
                                            @endforeach
                                            <!-- <option value="0">Other</option> -->
                                        </select>
                                    </div>
                                <!-- </div>
                            </div> -->
<!-- 
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
                                    
                                    <div class="form-group">
                                        <!-- <input type="text" name="name" id="name"  class="" placeholder="Course Select tag" required  >  -->
                                        <select class="" id="course" name="course_id" required>
                                            <option value>Select Course:</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="unit_name" id="name"  class="" placeholder="Unit Name/Chapter Name"  value="{{ $note_data[0]->unit_name }}" > 
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="text" name="unit_desc" id="unit_desc"  class="" placeholder="Description" required  >  -->
                                        <a id="label" href="{{ url('moderator/view_notes')}}?notes={{ $note_data[0]->unit_description }}" target="_blank"><strong>Important Points </strong></a><span style="color:red">(Please use SHIFT+ENTER to break a line)</span>
                                        <textarea name="unit_description" id="unit_desc" placeholder="Unit Description :- You can describe only important points of the chapter or unit mentioned in the book. Try to keep your notes more descriptive or easy to understand.  "   rows="5"></textarea>
                                        
                                    </div>
                                    
                                    
                                    
                                <!-- </div> -->
                                
                                <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
                                    <div class="form-group">
                                            <!-- <input type="text" name="unit_app" id="unit_app"  class="" placeholder="Application" required  >  -->
                                            <a id="label" href="{{ url('moderator/view_notes')}}?notes={{ $note_data[0]->unit_application }}" target="_blank"><strong>Uses/Application </strong></a>
                                            <span style="color:red">(Please use SHIFT+ENTER to break a line)</span>
                                            <textarea name="unit_application" id="unit_app" placeholder="Unit uses/Application :- You can explain here that how this chapter can help in practical world. In other words, you can tell this chapter uses, application, etc."   rows="5" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="text" name="name" id="name"  class="" placeholder="Important questions" required  >  -->
                                        <a id="label" href="{{ url('moderator/view_notes')}}?notes={{ $note_data[0]->unit_importantQuestions }}" target="_blank"><strong>Important Questions</strong></a>
                                        <span style="color:red">(Please use SHIFT+ENTER to break a line)</span>
                                        <textarea name="unit_importantQuestions" id="unit_importantQuestion" placeholder="Important Question :- You can tell important question and answers for this particular unit/chapter, you can refer previous year question paper for more accuracy. It is recommended to use unordered or ordered list."   rows="5" ></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        
                                        <!-- <input type="text" name="name" id="name"  class="" placeholder="Important questions" required  >  -->
                                        <!-- <label for="reference" >Reference</label> -->
                                        <a id="label" href="{{ url('moderator/view_notes')}}?notes={{ $note_data[0]->unit_reference }}" target="_blank"><strong>Reference</strong></a>
                                        
                                        <span style="color:red">(Please use SHIFT+ENTER to break a line)</span>
                                        <textarea name="unit_reference" id="unit_reference" placeholder="References :- You can list the sources you used to learn this chapter/unit. It will be good for other students if you insert video links such as youtube, dailymotion, etc. It is recommended to use unordered or ordered list."   rows="5" ></textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="text" name="name" id="name"  class="" placeholder="Reference links" required  > 
                                    </div> -->
                                    
                                <!-- </div> -->
                            <!-- </div> -->
                            
                            <!-- <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                                </div>
                            </div> -->
                            
                            <input type="hidden" name="id" id="inputid" class="form-control" value="{{ $note_data[0]->id }}">
                            
                          
                          
                          <div class="form-group">
                              <input type="submit" name="submit" id="submit"   class="btn btn-default btn-block" value="Submit" onclick="return validate()">
                              <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                              <!-- <a class="btn btn-default btn-block" name="submit" id="submit" data-toggle="modal" href='#warning'>Submit</a> -->
                            </div>

                          
                          
                          <!-- <div class="modal fade" id="warning">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Are you sure want to submit?</h4>
                                      </div>
                                      <br>
                                      <div class="modal-body">
                                          
                               
                                          <button type="button" class="btn btn-default" style="margin-right:100px;">Yes</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">No</button><br><br>
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                          </div> -->
                          
                          
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
<script src="{{ URL::asset('tinymce/tinymce.min.js') }}"></script>







<script>
tinymce.init({
  selector: 'textarea#unit_desc , textarea#unit_app, textarea#unit_importantQuestion, textarea#unit_reference',
//   placeholder: 'Unit Short description'
  height: 500,
  menubar: true,
  plugins: [ 
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount',
    'table',
    'placeholder'
  ],
  toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css',
    '{{ URL::asset("css/notes.css") }}'
  ]
});

// console.log(tinymce);


// $(tinymce.get('#unit_desc').getBody()).html('<p>This is my new content!</p>');
// tinymce.get('#unit_desc').setContent('<p>This is my new content!</p>');
// tinyMCE.activeEditor.setContent('<span>some</span> html');
// $("#unit_desc").val("{{ $note_data[0]->unit_description }}");

console.log(tinymce);
$('#course').prop("disabled",true);
$('#course').css("border-color","red");

$('#program').change(function(){

    $('#course')
         .empty()
         .append($("<option></option>")
                    .attr("value","")
                    .text("Select course..."));

    var program_id = $('#program').val();
    $.ajax({url: "{{ url('notes/getCourses') }}?program_id="+program_id, success: function(result){
        // console.log(result);
        $('#course').prop("disabled",false);
        $('#course').css("border-color","gray");
        $.each(result['data'], function(key, value) {   
        $('#course')
         .append($("<option></option>")
                    .attr("value",value['id'])
                    .text(value['course_code']+' ('+value['course_name']+')')); 
        });
    }});
});


function validate(){
    // Get the HTML contents of the currently active editor
// tinyMCE.activeEditor.getContent();

// Get the raw contents of the currently active editor
// tinyMCE.activeEditor.getContent({format : 'text'});

// Get content of a specific editor:
// tinyMCE.get('content id').getContent()
    // tinyMCE.triggerSave();
    // var desc=tinyMCE.get('unit_desc').getContent();
    // var desc = $('#unit_desc').val();
    // // console.log(desc);
    
    // var application = $('#unit_app').val();
    // var importantQuestion = $('#unit_importantQuestion').val();
    // var reference = $('#unit_reference').val();
    
    // if(desc===""){
    //     alert('Important points field is blank');
    //     return false;
    // }
    // if(application===""){
    //     alert('Application/Uses field is blank');
    //     return false;
    // }
    // if(importantQuestion===""){
    //     alert('Important Question field is blank');
    //     return false;
    // }
    // if(reference===""){
    //     alert('Reference field is blank');
    //     return false;
    // }
    
    return true;
}


var program_id = $('#program').val();
    $.ajax({url: "{{ url('notes/getCourses') }}?program_id="+program_id, success: function(result){
        // console.log(result);
        $('#course').prop("disabled",false);
        $('#course').css("border-color","gray");
        $.each(result['data'], function(key, value) {
            if("{{$note_data[0]->course_code}}" === value['course_code']){
                $('#course')
                 .append($("<option selected></option>")
                            .attr("value",value['id'])
                            .text(value['course_code']+' ('+value['course_name']+')')); 
                
            }else{
                $('#course')
                 .append($("<option></option>")
                            .attr("value",value['id'])
                            .text(value['course_code']+' ('+value['course_name']+')')); 
            }
        });   
    }});

</script>

@include('admin/footer')
