import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';
import { MyHttpService } from '../http.service';
import { Config } from 'src/resources/conf';
import { Response } from '@angular/http';
import { AppComponent } from '../app.component';
import { FieldsService } from './fields.service';
import { Sharing } from 'src/resources/Sharing';

declare var $: any;
@Component({
  selector: 'app-fields',
  templateUrl: './fields.component.html',
  styleUrls: ['./fields.component.css']
})
export class FieldsComponent implements OnInit {

  @ViewChild('f')  mainForm: NgForm;

  public data;
  public showData="";

  mainFormData = {
    program : '',
    enrollment : ''
  };
  buttonVisibility = 'none';
  enroll = '';
  warning = '';
  warningColor = 'green';

  constructor(private fieldService: FieldsService, private myHttpService: MyHttpService, public shared : Sharing) { }

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
      this.mainFormData.program = this.mainForm.value.userData.program;
      AppComponent.onShowLoader(1);
      this.myHttpService.onPost(Config.backendIgnou + 'getProfile', this.mainFormData)
      .subscribe(
        (response: Response) => {
          this.data = response.json();
          AppComponent.onShowLoader(0);
          this.showData = this.data.name; 
          if (this.showData != ""){
            this.shared.setData("block");
            this.fieldService.onNavigate(true, this.data.name, this.data.enrollment, this.data.program);
          } else {
            this.fieldService.onNavigate(false,  this.data.name, this.data.enrollment, this.data.program);
          }
        },
        (error) => {
            this.showData = "something went wrong!";
            AppComponent.onShowLoader(0);
        }
      );
    }
  }

  triggerAnimate() {
    // AppComponent.prepareRoute();
  }

}
