import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';

@Injectable()
export class MyHttpService {

  constructor(private http: Http) {}
  onPost(serverPath, data) {
    const headers = new Headers({'Content-Type': 'application/json'});
    return this.http.post(serverPath, data, {headers: headers});

  }

  onGet(serverPath) {
    const headers = new Headers({'Content-Type': 'application/json'});
    return this.http.get(serverPath, {headers: headers});
  }

}
