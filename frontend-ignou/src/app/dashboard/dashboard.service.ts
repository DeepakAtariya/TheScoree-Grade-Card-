import { Injectable } from '@angular/core';
import { Config } from 'src/resources/conf';
import { HttpClient } from '@angular/common/http';


// import { Router } from '@angular/router';
// import { Component, OnInit, ViewChild } from '@angular/core';

// import { NgForm } from '@angular/forms';
// import { Response } from '@angular/http';
// import {Location} from '@angular/common';
// import * as $ from 'jquery';
// import { Route } from '@angular/compiler/src/core';
// import { AppComponent } from '../app.component';
@Injectable()
export class DashboardService {
  
  constructor(private http: HttpClient) { }

  onProcess() {

  }


  getScoresFromDatabase(studentData4database: any) {
    return this.http.post(Config.backendIgnou+"scores/getScoresFromDatabase",studentData4database);
  }

  datasaved='';

  // constructor(private http: Http, private route: Router) {}
  
  
  saveSignUpData(userData : any)
  {
    // return this.http.post();
    return this.http.post(Config.backendIgnou+"saveSignUpData",userData);
  }

  getScores(studentData:any)
  {
    return this.http.post(Config.backendIgnou+"scores/getScores",studentData);
  }

}
