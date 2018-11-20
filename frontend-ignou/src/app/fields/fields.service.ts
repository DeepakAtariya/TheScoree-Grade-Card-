import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import { Route } from '@angular/compiler/src/core';
import { Router } from '@angular/router';
@Injectable()
export class FieldsService {

  constructor(private http: Http, private route: Router) {}
  
  onProcess() {

  }

  onNavigate(decision : Boolean, name, enrollment) { 
    if(decision){
      this.route.navigate(["user/profileSetup", name, enrollment]);
    }else{
      this.route.navigate([""]);
    }
    
  }

}
