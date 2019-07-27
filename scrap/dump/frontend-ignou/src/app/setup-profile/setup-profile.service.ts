import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ConfService } from '../conf.service';


// import { Router } from '@angular/router';
// import { Component, OnInit, ViewChild } from '@angular/core';

// import { NgForm } from '@angular/forms';
// import { Response } from '@angular/http';
// import {Location} from '@angular/common';
// import * as $ from 'jquery';
// import { Route } from '@angular/compiler/src/core';
// import { AppComponent } from '../app.component';
@Injectable()
export class SetupProfileService {



  submitFeedback(value: any) {
    return this.http.post(ConfService.backendIgnou+"feedback",value);
  }



  datasaved='';

  // constructor(private http: Http, private route: Router) {}
  constructor(private http: HttpClient) { }

  onProcess() {

  }
  
  verifyEnrollment(enrollment: any) {
    return this.http.post(ConfService.backendIgnou+"verifyenrollment",enrollment);
  }

  saveSignUpData(userData : any)
  {
    // return this.http.post();
    return this.http.post(ConfService.backendIgnou+"saveSignUpData",userData);
  }

  doLogin(loginData : any)
  {
    return this.http.post(ConfService.backendIgnou+"doLogin",loginData);
  }

}
