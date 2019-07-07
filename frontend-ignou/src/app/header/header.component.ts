import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  username:any;

  constructor() {
    this.username = localStorage.getItem('username');
    this.username = this.username.charAt(0).toUpperCase();
   }

  ngOnInit() {
  }

}
