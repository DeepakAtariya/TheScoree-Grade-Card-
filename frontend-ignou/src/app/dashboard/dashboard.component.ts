import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TouchSequence } from 'selenium-webdriver';
import { DashboardService } from './dashboard.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {

  username : any;
  enrollment : any;
  scoreData : string;
  heading: any;
  totalScore = [1,2,3,4,5,6,7,7,8,9,5,4,4,32,3,2];
  data: any;
  constructor(private route: Router, private dashboardService : DashboardService) { }

  ngOnInit() {
    this.enrollment = localStorage.getItem("enrollment");

    this.username = localStorage.getItem("username");
    const password = localStorage.getItem("password");
    const program = localStorage.getItem("program");

    // console.log(this.username+"  "+password);
    if (this.username != null || password != null){
      this.route.navigate(['/dashboard']);
    }else{
      this.route.navigate(['']);
    }

    /* fetching score data from server (laravel) */
    this.dashboardService.getScores(
      {
        program : program,
        enrollment : this.enrollment
      }
    )
    .subscribe((data)=>{
     console.log(data);
     this.scoreData = data['scores'];
     this.heading = this.scoreData[0];  
     console.log(this.scoreData.slice(1,this.scoreData.length));
     this.scoreData = this.scoreData.slice(1,this.scoreData.length);
    },
    (error) => {
        console.log('error occured');
    });

  }

  logout(){
    console.log("logout hit");
    localStorage.clear();
    this.route.navigate(['']);

  }

}
