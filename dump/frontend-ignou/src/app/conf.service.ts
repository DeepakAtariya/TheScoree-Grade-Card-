import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ConfService {

    // public static backendIgnou = 'http://localhost:7201/IgnouProject-/backend-ignou/public/api/';
    // public static backendIgnou = 'http://localhost/IgnouProject/backend-ignou/public/api/';
    public static backendIgnou = 'https://thescoree.com/public/api/';
    public static otherServer = 'http://127.0.0.1:8000/api/';

  constructor() { }
}
