import { Component, OnInit, ViewChild } from '@angular/core';
// import { ActivatedRoute, Router } from '@angular/router';
import { NgForm } from '@angular/forms';
// import { SetupProfileService } from './setup-profile.service';
// import { Response } from '@angular/http';
// import {Location} from '@angular/common';
import * as $ from 'jquery';
import { SetupProfileService } from './setup-profile.service';
import { Router } from '@angular/router';
// import { AppComponent } from '../app.component';
// import { Sharing } from 'src/resources/Sharing';


@Component({
  selector: 'app-setup-profile',
  templateUrl: './setup-profile.component.html',
  styleUrls: ['./setup-profile.component.css']
})

/*  this component is responsible to fetch user remaining information,
    this component will redirect user to next component called "SetCredentials" for setting credentials to the user.
    
    */
export class SetupProfileComponent implements OnInit {

  // setupProfileData is responsible to fetch data from setupProfile form
  @ViewChild('f')  setupProfileData: NgForm;
  @ViewChild('login')  loginFormData: NgForm;
  @ViewChild('login_username') login_username : any;
  

  // form data in json format
  userData = {
    name : '',
    enrollment : '',
    program : '',
    email : '',
    mobile : '',
    password : ''
  };

  loginData ={
    username : '',
    password : ''
  };

  login_error: string;
  signup_error: string;
  // login_error : string;

  showSpinner : boolean = false;
  showSpinner4login: boolean;


  constructor(private setupProfileService : SetupProfileService, private route : Router){

  }

  //Initialisation with old data and validation jquery code
  ngOnInit() {


    // const username = localStorage.getItem("username");
    // const password = localStorage.getItem("password");
    // console.log(username)
    // if(username != null && password !=null){
    //   this.route.navigate(['/dashboard']);
    // }
    
    // Template JS
    $(function() {
      $('#login-form-link').click(function(e) { 
      $("#loginForm").delay(50).fadeIn(50);
       $("#setupProfileForm").fadeOut(50);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
      $("#setupProfileForm").delay(50).fadeIn(50);
       $("#loginForm").fadeOut(50);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
  });


    

  } //end ngOnInit

  //submit data to database using laravel server
  onSubmit() {
    let setupProfileFormData = this.setupProfileData.value.setupProfileGroupData;
    this.userData.name = setupProfileFormData.name;
    this.userData.enrollment = setupProfileFormData.enrollment;
    this.userData.program = setupProfileFormData.program;
    this.userData.email = setupProfileFormData.email;
    this.userData.mobile = setupProfileFormData.mobile;
    this.userData.password = setupProfileFormData.password;
    const confirm = setupProfileFormData.confirmPassword;
    console.log(confirm==this.userData.password);
    
    // console.log(this.userData);

    var pattern = /^\d+$/;
    var email =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(this.userData.name == "" || this.userData.enrollment == "" || this.userData.program == "" || this.userData.email == "" || this.userData.password == ""){
        this.signup_error = "Enter details";
    }else if(!pattern.test(this.userData.enrollment)){
      this.signup_error = "Invalid enrollment format";
    }else if(!email.test(this.userData.email)){
      this.signup_error = "Invalid email";
      console.log(email.test(this.userData.email));
    }else if(confirm.toString() != this.userData.password.toString()){
      this.signup_error = "mismatch passwords";
    }else{
      // code to store data into database if enrollment is not valid it will cause error on the screen(signup_error)
      this.showSpinner = true;
      this.setupProfileService.saveSignUpData(this.userData)
        .subscribe(data  => {
          this.showSpinner = false;
          if (data['student']=="invalid"){
            this.signup_error = "Not registered with ignou";
          }else{
            // this.showSpinner = false;
            localStorage.setItem("username",this.userData.email);
            localStorage.setItem("enrollment",this.userData.enrollment);
            localStorage.setItem("password",this.userData.password);
            // sessionStorage
            this.route.navigate(['/dashboard'])
          }
    },
    error => {
      this.showSpinner = false;
      this.signup_error = "server error!";
      console.log(error['error']['message']);
      var ex = error['error']['message']; 
      if(ex.search(this.userData.enrollment)){
        this.signup_error = "Already Registered";
      }else{
        this.signup_error = "server error!";
        console.log(ex);
      }
    }
    );

    }
    



  } // end onSumit()

  onLogin(){ //start onLogin

    const loginDataToCompare = this.loginFormData.value.loginFormGroupData;
    this.loginData.username = loginDataToCompare.login_username;
    this.loginData.password = loginDataToCompare.login_password;
    /*
    this.login_username.nativeElement.focus();
    const s_username = "deepak";
    const s_password = "deepak";
    if(username == "" || password == ""){
      this.login_error = "Enter credentials";
    }else if (this.checkCredentialsWithServer(username,password)){
      // this.login_error = "";
      // lets go to next page...      
    }else{
      this.login_error = "Invalid credentials";
    }
    */
    this.showSpinner4login = true;
    if(this,this.loginData.username == "" || this.loginData.password == "" ){
      this.login_error="enter credentails";
    }else {
      this.setupProfileService.doLogin(this.loginData)
      .subscribe((data)=>{
        this.showSpinner4login = false;
        if(data['auth']=='true'){
          localStorage.setItem("username",this.loginData.username);
          localStorage.setItem("password",this.loginData.password);

          this.route.navigate(['/dashboard'])
        }else{
          this.login_error="Invalid Credentails";
        }
      },
      (error) => {
        this.showSpinner4login = false;
        this.login_error = "login - server error!";
        console.log(error);
        
      // if(ex.search()){
      //   this.signup_error = "Already Registered";
      // }else{
      //   this.signup_error = "server error!";
      //   console.log(ex);
      // }

      });
    }

    

    
    

  } // end onLogin

 /* checking whether student is real or fake with ignou server */ 
checkWithIgnou(enrollment:any, program:any){
  if(1){
    return true;

  }else{
    return false;
  }
}

checkCredentialsWithServer(username:any, password:any){
  if(1){
    return true;

  }else{
    return false;
  }
}

  
}
