import { Component, OnInit, ViewChild } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-fields',
  templateUrl: './fields.component.html',
  styleUrls: ['./fields.component.css']
})
export class FieldsComponent implements OnInit {

  @ViewChild('inputElement') inputEle;

  sampleText="ssss";
  randomcolor:string='red';
  constructor() { }

  ngOnInit() {

  }

  addEvent(ElementObj){
    this.sampleText=ElementObj;
    this.randomcolor="blue";

    let data = this.inputEle.nativeElement;
    data.css="background-color:red";


  }

}
