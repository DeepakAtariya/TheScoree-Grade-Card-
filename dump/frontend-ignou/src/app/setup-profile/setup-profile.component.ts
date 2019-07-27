import { Component, OnInit, ViewChild, Inject } from '@angular/core';
// import { ActivatedRoute, Router } from '@angular/router';
import { NgForm } from '@angular/forms';
// import { SetupProfileService } from './setup-profile.service';
// import { Response } from '@angular/http';
// import {Location} from '@angular/common';
import * as $ from 'jquery';
import { SetupProfileService } from './setup-profile.service';
import { Router } from '@angular/router';
import { AppComponent } from '../app.component';
import { LOCAL_STORAGE } from '@ng-toolkit/universal';
// import { Sharing } from 'src/resources/Sharing';


@Component({
  selector: 'app-setup-profile',
  templateUrl: './setup-profile.component.html',
  styleUrls: ['./setup-profile.component.css']
})

/*  
this component is responsible to fetch user remaining information,
this component will redirect user to next component called "SetCredentials" for setting credentials to the user.    
*/

export class SetupProfileComponent implements OnInit {

  // setupProfileData is responsible to fetch data from setupProfile form
  @ViewChild('f')  setupProfileData: NgForm;
  @ViewChild('login')  loginFormData: NgForm;
  @ViewChild('guest')  guest_data: NgForm;
  @ViewChild('login_username') login_username : any;


  login_error: string;
  signup_error: string;
  // login_error : string;



  guest_error: string;
  showSpinnerg: boolean;


  constructor(@Inject(LOCAL_STORAGE) private localStorage: any, private setupProfileService : SetupProfileService, private route : Router){

  }

  //Initialisation with old data and validation jquery code
  ngOnInit() {

    this.localStorage.setItem('modal','1');

  } //end ngOnInit

  onGuest(){
    // alert("clicked - go");
    AppComponent.onShowLoader(1);
    
    const enrollment = this.guest_data.value.guest_enrollment;
    const program = this.guest_data.value.guest_program;

    var pattern = /^\d+$/;
    if(program == "" || enrollment == ""){
        this.guest_error = "Enter details";
        AppComponent.onShowLoader(0);
    }else if(!pattern.test(enrollment)){
      this.guest_error = "Invalid enrollment format";
      AppComponent.onShowLoader(0);
    }else{
      // this.showSpinnerg = true;
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
            this.route.navigate(['/guestdashboard',program,enrollment]);
          }
    },error=>{
      console.log(error);
      AppComponent.onShowLoader(0);
    });
  
    }
  }
}
