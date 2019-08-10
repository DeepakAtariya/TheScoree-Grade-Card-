
@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/notes.css') }}">
<div class="modal fade" id="add_program">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Your Program </h4>
                <!-- <h6 >Soon!</h6> -->
            </div>
            <form action="{{ url('notes/addprogram') }}" method="get" class="form-inline" role="form" name="termendform">
            <div class="modal-body text-center" >
                <div class="form-group ">
                    <input type="text" class="" id="program_code" name="program_code" placeholder="Enter program code eg:bca, mca, mcom, etc" >
                    <input type="text" class="" id="program_fullform" name="program_fullform" placeholder="Enter program name eg:bachelore of computer application, etc" >
                    <input type="submit" name="guest-submit" id="go" tabindex="4" class=" " value="Add" >
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div id="openM" style="width:100px; height:20%; ">

&nbsp;
</div>

<script>

$('#openM').click(function(){
    // alert('asdasda');
    $('#add_program').modal('show');
});

</script>

@include('footer')