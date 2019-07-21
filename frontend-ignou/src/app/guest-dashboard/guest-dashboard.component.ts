import { Component, OnInit, Inject } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { AppComponent } from '../app.component';
import { DashboardService } from '../dashboard/dashboard.service';
import { LOCAL_STORAGE } from '@ng-toolkit/universal';
declare var $ : any;

@Component({
  selector: 'app-guest-dashboard',
  templateUrl: './guest-dashboard.component.html',
  styleUrls: ['./guest-dashboard.component.css']
})
export class GuestDashboardComponent implements OnInit {

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
  total: any;
  percent: any;
  outof: any;
  constructor(@Inject(LOCAL_STORAGE) private localStorage: any, private route: Router,private activatedRoute: ActivatedRoute, private dashboardService : DashboardService) { 

    

  }

  ngOnInit() {


    // console.log(this.activatedRoute.snapshot.paramMap.get('program'));
    this.username = this.localStorage.getItem('username');
    this.enrollment = this.activatedRoute.snapshot.paramMap.get('enrollment');
    
        /* fetching score data from server (laravel) */
        AppComponent.onShowLoader(1);
        this.dashboardService.getScores(
          {
            program : this.activatedRoute.snapshot.paramMap.get('program'),
            enrollment : this.activatedRoute.snapshot.paramMap.get('enrollment')
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
                'course_name' : '',
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
              scoreboard.course_name = this.data4small[i][9];
              scoreboard.Asgn1 = this.data4small[i][1];
              // scoreboard.lab1 = this.data4small[i][2]=='-'?'NA':this.data4small[i][2]=='#'?'NA':this.data4small[i][2];
              // scoreboard.lab2 = this.data4small[i][3]=='-'?'NA':this.data4small[i][3]=='#'?'NA':this.data4small[i][3];
              // scoreboard.lab3 = this.data4small[i][4]=='-'?'NA':this.data4small[i][4]=='#'?'NA':this.data4small[i][4];
              // scoreboard.lab4 = this.data4small[i][5]=='-'?'NA':this.data4small[i][5]=='#'?'NA':this.data4small[i][5];
              // scoreboard.theory = this.data4small[i][6]=='-'?'NA':this.data4small[i][6]=='#'?'NA':this.data4small[i][6];
              scoreboard.lab1 = this.data4small[i][2];
              scoreboard.lab2 = this.data4small[i][3];
              scoreboard.lab3 = this.data4small[i][4];
              scoreboard.lab4 = this.data4small[i][5];
              scoreboard.theory = this.data4small[i][6];
              scoreboard.status = this.data4small[i][7]=='Completed'?'Pass':'Fail';
              scoreboard.total =  this.data4small[i][8];
              // this.total_marks = this.total_marks+scoreboard.total;
    
              this.master_data[i-1]=scoreboard;
              // console.log(scoreboard);
          }
          // this.total = this.total_marks;
          // this.total_marks = (this.total_marks/4000)*100;
          // console.log(this.master_data);
          this.scoreData = data['scores'];
          this.heading = this.scoreData[0];  
          // console.log(this.scoreData.slice(1,this.scoreData.length));
          this.scoreData = this.scoreData.slice(1,this.scoreData.length);

          this.percent = data['percent'];
          this.outof = data['outof'];
          this.total_marks = data['earned_marks'];

          let modal = Number.parseInt(this.localStorage.getItem('modal'));
          // let modal = localStorage.getItem('modal');

          // if(modal === 1){
          //   $('#feedbackAlert').modal();
          //   localStorage.setItem('modal','0');
          // }
        },
        (error) => {
          console.log(error);
          AppComponent.onShowLoader(0);
            
          /* do request for data from database in the case of ignou server error! */
    
        });

        
    

  }

  back(){
    this.route.navigate(['']);
  }

}
