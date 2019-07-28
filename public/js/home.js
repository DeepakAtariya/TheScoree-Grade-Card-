var url = {
     local:'http://192.168.0.102/thescoree/public/',
     prod:'http://thescoree/public/'
};


function validata(){
    console.log(url);
    
    $('#divLoading').show();
    // alert('sadasd');
    var program = $('#guest_program');
    var enrollment = $('#guest_enrollment');

    if(program.val() === "" ){
        program.css('border-color','red');
        $('#divLoading').hide();
        return false;
    }else{
        program.css('border-color','black');
    }
    
    if(enrollment.val() === "" ){
        enrollment.css('border-color','red');
        $('#divLoading').hide();
        return false;
    }else{
        enrollment.css('border-color','black');
        $.post(url.local+"api/verifyenrollment",
        {
            enrollment : enrollment.val(),
            program : program.val()
        }).done(function (data) {
            console.log(data['student']);
            $('#divLoading').hide();
            if(data['student']==="invalid"){
                alert('Invalid details');
                $('#message').css('display','block');
            }else{
                $('form').submit();
            }
        }).fail(function (error) {
            console.log(error);
            $('#divLoading').hide();
        });
    }

    

    
    return false;
}

/*

this.setupProfileService.verifyEnrollment({
        enrollment : enrollment,
          program : program
      })
        .subscribe(data  => {
          // this.showSpinnerg = false;
          AppComponent.onShowLoader(0);
          console.log(data);
                         // this.showSpinner = false;
          if (data['student']=="invalid"){
              this.guest_error = "Not registered with ignou";
          }else{
             this.localStorage.setItem("username",data['student']);

*/