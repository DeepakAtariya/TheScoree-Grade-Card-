import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Http } from '@angular/http';
import { NgForm } from '@angular/forms';
import { Sharing } from 'src/resources/Sharing';
import * as $ from 'jquery';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  @ViewChild('f')  loginFormData: NgForm;

  credentials = {
    email : '',
    password :''
  }

  

  constructor(private route : Router, private http : Http, public shared : Sharing) { }

  ngOnInit() {

    console.log("Reached login components...");

    var validEmail=false;
    function checkPasswordMatch() {
      var password = $("#password").val();
      var confirmPassword = $("#confirmPassword").val();
      var email = $("#email").val();

            console.log("password checked");
            if(validEmail && password!==''){  
              $("#submit").css("display","block");
            }else{
              $("#submit").css("display","none");
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
        
        if(password!==''){
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
    $("#password").keyup(checkPasswordMatch);
    $("#email").keyup(checkEmail);
  });


  }

  onSubmit() {
    let data = this.loginFormData.value.loginData;
    this.credentials.email = data.email;
    this.credentials.password = data.password;

    let sharedData = this.shared.getData();

    if(sharedData.email === this.credentials.email && sharedData.password===this.credentials.password){
      console.log("boom email");
    }else{
      console.log("login failed!"+ sharedData);
    }
    

  }

}
