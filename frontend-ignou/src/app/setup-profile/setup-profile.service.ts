import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import { Route } from '@angular/compiler/src/core';
import { Router } from '@angular/router';
import { Config } from 'src/resources/conf';
import { Response } from 'selenium-webdriver/http';
@Injectable()
export class SetupProfileService {

  constructor(private http: Http, private route: Router) {}

  onProcess() {

  }
  
  onSave(data) {
    return this.http.post(Config.backendIgnou+"save",data);
  }

}
