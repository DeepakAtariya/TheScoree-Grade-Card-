import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {

  enrollment : any ;
  constructor() { }

  ngOnInit() {
    this.enrollment = localStorage.getItem("username");
  }

  logout(){
    console.log("logout hit");
    localStorage.clear();
  }

}
