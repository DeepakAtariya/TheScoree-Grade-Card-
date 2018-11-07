import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable()
export class MyHttpService {

  constructor(private http: Http) {}
  onPost(serverPath, data) {
    return this.http.post(serverPath, data);

  }

  onGet(serverPath) {
    return this.http.get(serverPath);
  }

}
