import { Component, OnInit, ViewChild } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { SetupProfileService } from './setup-profile.service';
import { Response } from '@angular/http';
import {Location} from '@angular/common';
import * as $ from 'jquery';
import { AppComponent } from '../app.component';
import { Sharing } from 'src/resources/Sharing';

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
  save_error = "none";
  save_success = "block";
  register='none';
  

  // form data in json format
  userData = {
    name : '',
    enrollment : '',
    program : '',
    email : '',
    mobile : '',
    password : ''
  };
  form: string;

  constructor(private Activatedroute: ActivatedRoute, private setupProfileService : SetupProfileService, private location : Location, private route: Router, public shared : Sharing) { }

  //Initialisation with old data and validation jquery code
  ngOnInit() {
    this.register = this.shared.getData();
    $('#register-form-link').addClass('active');
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    
    this.userData.name = this.Activatedroute.snapshot.params['name'];
    this.userData.enrollment = this.Activatedroute.snapshot.params['enrollment'];
    this.userData.program = this.Activatedroute.snapshot.params['program'];

    // Template JS
    $(function() {
      $('#login-form-link').click(function(e) { 
      $("#login-form").delay(100).fadeIn(100);
       $("#setupProfileForm").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
      $("#setupProfileForm").delay(100).fadeIn(100);
       $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
  });


    var buttonVisibility = "";

    var validEmail=false;

    function checkPasswordMatch() {
      var password = $("#password").val();
      var confirmPassword = $("#confirmPassword").val();
      var email = $("#email").val();
      

      if (password != confirmPassword){ 
        // $("#divCheckPasswordMatch").html("Passwords do not match!");
        $("#submit").css("display","none");
        return 0;
      } else{

            console.log("password checked");
            if(validEmail && password!=='' && confirmPassword!==''){  
              $("#submit").css("display","block");
            }else{
              $("#submit").css("display","none");
            }
            
        }
      }
    
    function checkEmail(){
      var email = $("#email").val();
      var password = $("#password").val();
      var confirmPassword = $("#confirmPassword").val();
      
      if(email.indexOf("@") != -1 &&  email.indexOf(".") != -1){
        console.log("valid email");
        $("#checkEmail").html("");
        validEmail=true;
        
        if(password!=='' && confirmPassword!=='' && password===confirmPassword){
          $("#submit").css("display","block");
        }else{
          $("#submit").css("display","none");
        }
      }else{
        // $("#checkEmail").html("invalid email...");
        $("#submit").css("display","none");
      }
    }
  
  $(document).ready(function () {
    $("#password, #confirmPassword").keyup(checkPasswordMatch);
    $("#email").keyup(checkEmail);
  });

  } //end ngOnInit

  //submit data to database using laravel server
  onSubmit() {
    let setupProfileFormData = this.setupProfileData.value.setupProfileGroupData;
    this.userData.email = setupProfileFormData.email;
    this.userData.mobile = setupProfileFormData.mobile;
    this.userData.password = setupProfileFormData.password;

    try{
      AppComponent.onShowLoader(1);
      this.setupProfileService.onSave(this.userData)
      .subscribe(
        (response: Response) => {
          const responseData = response.json();
          AppComponent.onShowLoader(0);
          console.log(responseData.status);
          if(responseData.status==="yes"){
            console.log("success! Data saved");
            
            //saving data for sharing
            this.shared.setData(this.userData);
            this.route.navigate(['user/login']);
          }else{
            console.log("failed");
            AppComponent.onShowLoader(0);
          }
        },
        (error) =>{
            AppComponent.onShowLoader(0);
            this.register='block';
            this.route.navigate(['user/profileSetup/:name/:enrollment/:program', this.userData.name, this.userData.enrollment, this.userData.program]);
        }
      );
    }catch(error){
      console.log("server error");
    }
    

    
  } // end onSumit()

  // this function works in server error!
  // serviceUnavailable() {
  //   this.route.navigate([""]);
  // }

  
}
