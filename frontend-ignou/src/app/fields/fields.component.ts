import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';
import { MyHttpService } from '../http.service';
import { Config } from 'src/resources/conf';
import { Response } from '@angular/http';
import { AppComponent } from '../app.component';

declare var $: any;
@Component({
  selector: 'app-fields',
  templateUrl: './fields.component.html',
  styleUrls: ['./fields.component.css']
})
export class FieldsComponent implements OnInit {

  @ViewChild('f')  mainForm: NgForm;

  public data;
  public showData;

  mainFormData = {
    program : '',
    enrollment : ''
  };
  buttonVisibility = 'none';
  enroll = '';
  warning = '';
  warningColor = 'green';

  constructor(private myHttpService: MyHttpService) { }

  ngOnInit() {

  }

  onKey(e: HTMLInputElement) {
    if (e.value === '') {
      this.buttonVisibility = 'none';
    } else {
      this.buttonVisibility = ' ';
    }
  }

  onSubmit() {
    const testProgram = this.mainForm.value.userData.Program;
    if (testProgram === '') {
      console.log('program is empty');
      this.warning = 'Please select your course';
      this.warningColor = 'red';
    } else {
      console.log('program is not empty');

      // $('#divLoading').css("display", "block");
      
      AppComponent.onShowLoader(1);
      this.mainFormData.enrollment = this.mainForm.value.userData.enrollment;
      this.mainFormData.program = this.mainForm.value.userData.Program;
      // this.mainFormData.program="BCA";
      // this.mainFormData.enrollment="12121212";
      this.myHttpService.onPost(Config.backendIgnou + 'getProfile', this.mainFormData)
      .subscribe(
        (response: Response) => {
          /* this is a response section */
          // debugger;
        //  $('#divLoading').css("display", "none");
        
          this.data = response.json();
          console.log(this.data);
          this.showData = this.data.name; 
        },
        (error) => console.log(error)
      );
    }

  }

  work(){
    
  }

}


//https://github.com/ivanderbu2/angular-redux.git fr loader