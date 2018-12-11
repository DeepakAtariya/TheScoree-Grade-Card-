import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import { Route } from '@angular/compiler/src/core';
import { Router } from '@angular/router';

@Injectable()
export class FieldsService {
  loginData: any;


  getData(): any {
    console.log("got the login data to compare!");
    return this.loginData;
  }

  constructor(private http: Http, private route: Router) {}
  
  onProcess() {

  }

  onNavigateRegister(decision : Boolean, name, enrollment, program) { 
      this.route.navigate(["user/profileSetup", name, enrollment, program]);
    }

  onNavigateLogin(enrollment){
    this.route.navigate(["user/profileSetup", enrollment]);
  }
  
  setData(data: any){

    this.loginData = data;
    console.log("fields service --- setter method");


  }
    
  }
