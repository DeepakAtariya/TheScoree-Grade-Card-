import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TouchSequence } from 'selenium-webdriver';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {

  enrollment : any ;
  constructor(private route: Router) { }

  ngOnInit() {
    // this.enrollment = localStorage.getItem("username");

    const username = localStorage.getItem("username");
    const password = localStorage.getItem("password");
    console.log(username+"  "+password);
    if (username != null && password != null){
      this.route.navigate(['/dashboard']);
    }else{
      this.route.navigate(['']);
    }
  }

  logout(){
    console.log("logout hit");
    localStorage.clear();
    this.route.navigate(['']);

  }

}
