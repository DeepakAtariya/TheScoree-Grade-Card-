import { Component, OnInit } from '@angular/core';
// import * as $ from 'jquery';
declare var $: any;

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  username:any;

  constructor() {

   }

  ngOnInit() {
    // console.log($('#betaversionalert'));
    // $('#betaversionalert').modal();

  }

}
