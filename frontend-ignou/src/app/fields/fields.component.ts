import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-fields',
  templateUrl: './fields.component.html',
  styleUrls: ['./fields.component.css']
})
export class FieldsComponent implements OnInit {

  @ViewChild('f')  mainForm: NgForm;

  buttonVisibility = 'none';
  enroll = '';
  constructor() { }

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
    console.log(this.mainForm);

  }

}
