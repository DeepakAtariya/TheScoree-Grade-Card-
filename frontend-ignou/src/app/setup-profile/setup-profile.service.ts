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
    return this.http.post(Config.backendIgnou+"save",userData);
  }

}
