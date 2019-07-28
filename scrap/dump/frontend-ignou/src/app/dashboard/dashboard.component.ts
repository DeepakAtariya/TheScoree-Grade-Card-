import { Component, OnInit, Inject } from '@angular/core';
import { Router } from '@angular/router';
import { TouchSequence } from 'selenium-webdriver';
import { DashboardService } from './dashboard.service';
import { AppComponent } from '../app.component';
import { LOCAL_STORAGE } from '@ng-toolkit/universal';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {

  total_marks : any = 0;
  username : any;
  enrollment : any;
  scoreData : string;
  heading: any;
  // totalScore = [1,2,3,4,5,6,7,7,8,9,5,4,4,32,3,2];
  data: any;
  password: string;
  data4small: any;
  master_data = [];
  constructor(@Inject(LOCAL_STORAGE) private localStorage: any, private route: Router, private dashboardService : DashboardService) { }

  ngOnInit() {
    this.enrollment = this.localStorage.getItem("enrollment");

    this.username = this.localStorage.getItem("username");
    this.password = this.localStorage.getItem("password");
    const program = this.localStorage.getItem("program");

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
      // console.log(data['scores']);
      this.data4small = data['scores'];


      // console.log(this.data4small);

      for(var i=1; i<this.data4small.length; i++){
            // this.total_marks = this.total_marks+Number(this.data4small[i][6]=="-"?0:this.data4small[i][6]);
            // this.total_marks = this.total_marks+Number(this.data4small[i][6]=="-"?0:this.data4small[i][6]);
            
            var scoreboard = {
            'course_code' : '',
            'Asgn1' : '',
            'lab1' : '',
            'lab2' : '',
            'lab3' : '',
            'lab4' : '',
            'theory': '',
            'status' : '',
            'total' : ''
          }

          scoreboard.course_code = this.data4small[i][0];
          scoreboard.Asgn1 = this.data4small[i][1];
          scoreboard.lab1 = this.data4small[i][2]=='-'?'NA':this.data4small[i][2];
          scoreboard.lab2 = this.data4small[i][3]=='-'?'NA':this.data4small[i][3];
          scoreboard.lab3 = this.data4small[i][4]=='-'?'NA':this.data4small[i][4];
          scoreboard.lab4 = this.data4small[i][5]=='-'?'NA':this.data4small[i][5];
          scoreboard.theory = this.data4small[i][6]=='-'?'NA':this.data4small[i][6];
          scoreboard.status = this.data4small[i][7]=='Completed'?'Pass':'Fail';
          scoreboard.total =  this.data4small[i][0]=="BCSP064"?Number(Number(this.data4small[i][2])+Number(this.data4small[i][3])):this.data4small[i][8];
          this.total_marks = this.total_marks+scoreboard.total;

          this.master_data[i-1]=scoreboard;
          // console.log(scoreboard);
      }
      this.total_marks = (this.total_marks/4000)*100;
      // console.log(this.master_data);
      this.scoreData = data['scores'];
      this.heading = this.scoreData[0];  
      // console.log(this.scoreData.slice(1,this.scoreData.length));
      this.scoreData = this.scoreData.slice(1,this.scoreData.length);
    },
    (error) => {
      console.log(error);
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
    this.localStorage.clear();
    this.route.navigate(['']);

  }


  /* Refresh */

  refresh(){
    location.reload();
  }

}