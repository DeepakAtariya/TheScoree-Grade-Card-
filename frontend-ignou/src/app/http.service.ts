import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable()
export class MyHttpService {

  service = "it is on";

  constructor(private http: Http) {}
  getServices(serverPath) {
    return this.http.get(serverPath);
  }

}
