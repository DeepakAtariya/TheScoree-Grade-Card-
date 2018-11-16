import { Component, OnInit } from '@angular/core';
import { trigger, state, style, transition, animate } from '@angular/animations';
declare var $: any;

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css'],
  animations: [
    trigger('animateState', [
      state('normal', style({
        transform: 'translateY(180px)',
        opacity: '0.5'
      })),
      state('slided', style({
        transform: 'translateY(90px)',
        opacity: '0.8'
      })),
      transition('normal => slided', animate(500))
    ]),
    trigger('appFieldState', [
      state('normal', style({
        display: 'none',
        transform: 'translateY(180px)',
        opacity: '0.1'
      })),
      state('visible', style({
        display: ' ',
        transform: 'translateY(100px)'
      })),
      transition('normal => visible', animate(500))
    ])
  ]
})
export class HeaderComponent implements OnInit {

  showDec=false;
  state = 'normal';
  appState = 'normal';
  title = 'frontend-ignou';

  constructor() { }

  ngOnInit() {
  }

  onAnimate() {
    // this.state === 'normal' ? this.state = 'slided' : this.state = 'slided';
    $('#divLoading').css("display", "none");
    if (this.state === 'normal') {
      this.state = 'slided';
      this.appState = 'visible'
    }
  }

}
