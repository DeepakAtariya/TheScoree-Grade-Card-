import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import { Route } from '@angular/compiler/src/core';
import { Router } from '@angular/router';
import { Config } from 'src/resources/conf';
import { Component, OnInit, ViewChild } from '@angular/core';

import { NgForm } from '@angular/forms';
import { Response } from '@angular/http';
import {Location} from '@angular/common';
import * as $ from 'jquery';
import { AppComponent } from '../app.component';
@Injectable()
export class SetupProfileService {

  datasaved='';

  constructor(private http: Http, private route: Router) {}

  onProcess() {

  }
  
  onSave(userData){
    // this.http.post(Config.backendIgnou+"save",data);
    let check = 0;
    AppComponent.onShowLoader(1);
    this.http.post(Config.backendIgnou+"save",userData)
    .subscribe(
      (response: Response) => {
        const responseData = response.json();
        AppComponent.onShowLoader(0);
        console.log(responseData.status);
        if(responseData.status==="yes"){
          console.log("success");
          this.datasaved=responseData.status;
        }else{
          console.log("failed");
          this.datasaved='';
          AppComponent.onShowLoader(0);
        }
      },
      (error) =>{
        check=0;
          AppComponent.onShowLoader(0);
      }
    );
    if(this.datasaved!==''){
      return true;
    }else{
      return false;
    }
  }

}
