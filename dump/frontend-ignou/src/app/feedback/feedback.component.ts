import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';
import { AppComponent } from '../app.component';
import { SetupProfileService } from '../setup-profile/setup-profile.service';
import { Router } from '@angular/router';
declare var $ : any;

@Component({
  selector: 'app-feedback',
  templateUrl: './feedback.component.html',
  styleUrls: ['./feedback.component.css']
})
export class FeedbackComponent implements OnInit {

  validation_error : any;
  
  @ViewChild('Feedback')  feedback_data: NgForm;

  constructor(private service : SetupProfileService, private route : Router) { }

  ngOnInit() {
  }

  onSubmit(){
    
    
    console.log(this.feedback_data);

    let name = this.feedback_data.value.name;
    let email = this.feedback_data.value.email;
    let improvement = this.feedback_data.value.improvement;
    let file = this.feedback_data.value.file;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    let vali_flag = 0;

    if(name === "" || name === " "){
      $('#name').css('border-color','red');
    }else{
      vali_flag++;
      $('#name').css('border-color','green');
    }if((email === "" || email === " ") || (!emailReg.test(email))){
      $('#email').css('border-color','red');
    }else{
      vali_flag++;
      $('#email').css('border-color','green');
    }

    if(improvement === "" || improvement === " "){      
      $('#improvement').css('border-color','red');
    }else{
      vali_flag++;
      $('#improvement').css('border-color','green');
    }

    // console.log(vali_flag);

    if(vali_flag === 3){
      AppComponent.onShowLoader(1);
        this.service.submitFeedback(this.feedback_data.value)
          .subscribe(data  => {
            // this.showSpinnerg = false;
            AppComponent.onShowLoader(0);
            if(data['status']){
              alert('Your request was successfully submitted.');
              this.route.navigate(['']);
              // $('#thankyou').show();
              // $('#Feedback').hide();
            }
            console.log(data);
            
      },error=>{
        console.log(error);
        AppComponent.onShowLoader(0);
      });

    }

  }
}
