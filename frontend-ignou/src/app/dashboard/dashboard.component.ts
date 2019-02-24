import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TouchSequence } from 'selenium-webdriver';
import { DashboardService } from './dashboard.service';
import { AppComponent } from '../app.component';

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
  // totalScore = [1,2,3,4,5,6,7,7,8,9,5,4,4,32,3,2];
  data: any;
  password: string;
  constructor(private route: Router, private dashboardService : DashboardService) { }

  ngOnInit() {
    this.enrollment = localStorage.getItem("enrollment");

    this.username = localStorage.getItem("username");
    this.password = localStorage.getItem("password");
    const program = localStorage.getItem("program");

    // console.log(this.username+"  "+password);
    if (this.username != null || this.password != null){
      this.route.navigate(['/dashboard']);
    }else{
      this.route.navigate(['']);
    }

    /* fetching score data from server (laravel) */
    AppComponent.onShowLoader(1);
    this.dashboardService.getScores(
      {
        program : program,
        enrollment : this.enrollment
      }
    )
    .subscribe((data)=>{
      AppComponent.onShowLoader(0);
      // console.log(data);
      this.scoreData = data['scores'];
      this.heading = this.scoreData[0];  
      // console.log(this.scoreData.slice(1,this.scoreData.length));
      this.scoreData = this.scoreData.slice(1,this.scoreData.length);
    },
    (error) => {
      console.log('error occured');
      AppComponent.onShowLoader(0);
      /* do request for data from database in the case of ignou server error! */

      this.dashboardService.getScoresFromDatabase(
        {
          enrollment : this.enrollment,
          password : this.password    
        }
      )
      .subscribe((data) => {
        console.log(data);
        this.scoreData = data['scores'];
        this.heading = this.scoreData[0];  
        // console.log(this.scoreData.slice(1,this.scoreData.length));
        // this.scoreData = this.scoreData.slice(1,this.scoreData.length);
      },
      (error) => {
        console.log(error);
      }

      );
    });

  }

  logout(){
    console.log("logout hit");
    localStorage.clear();
    this.route.navigate(['']);

  }


  /* Refresh */

  refresh(){
    location.reload();
  }

}
