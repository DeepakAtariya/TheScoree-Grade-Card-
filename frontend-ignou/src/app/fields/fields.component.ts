import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';
import { MyHttpService } from '../http.service';
import { Config } from 'src/resources/conf';
import { Response } from '@angular/http';


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
      this.mainFormData.enrollment = this.mainForm.value.userData.enrollment;
      this.mainFormData.program = this.mainForm.value.userData.Program;
      this.myHttpService.onPost(Config.backendIgnou + 'getProfile', this.mainFormData)
      .subscribe(
        (response: Response) => {
          /* this is a response section */
          this.data = response.json();
          console.log(this.data);
          this.showData = this.data.enroll; 
        },
        (error) => console.log(error)
      );
    }

  }

}


//https://github.com/ivanderbu2/angular-redux.git fr loader