import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable()
export class MyHttpService{

  constructor(private http: Http){}
  getServices(){
    return this.http.get('http://localhost/IgnouProject--1/backend-ignou/public/api');
  }
}