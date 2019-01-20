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
  // login_error : string;

  // constructor(private Activatedroute: ActivatedRoute,  private setupProfileService : SetupProfileService, private location : Location, private route: Router, public shared : Sharing) { }
  constructor(){}

  //Initialisation with old data and validation jquery code
  ngOnInit() {

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
    
    console.log(this.userData);
    



  } // end onSumit()

  onLogin(){ //start onLogin

    const loginDataToCompare = this.loginFormData.value.loginFormGroupData;
    const username = loginDataToCompare.login_username;
    const password = loginDataToCompare.login_password;
    this.login_username.nativeElement.focus();
    console.log(this.login_username);

    

    
    

  } // end onLogin

  

  // this function works in server error!
  // serviceUnavailable() {
  //   this.route.navigate([""]);
  // }

  
}
