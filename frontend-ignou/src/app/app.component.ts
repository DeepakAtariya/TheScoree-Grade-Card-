import { Component} from '@angular/core';
import { MyHttpService } from './http.service';
import { Config } from 'src/resources/conf';
import { trigger, state, style, transition, animate } from '@angular/animations';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
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
export class AppComponent {
  state = 'normal';
  appState = 'normal';
  title = 'frontend-ignou';

  constructor(private myService: MyHttpService) {}
  testLarvel() {
    this.myService.getServices(Config.backendIgnou)
    .subscribe(
      (response) => console.log(response),
      (error) => console.log(error)
    );
  }

  onAnimate() {
    // this.state === 'normal' ? this.state = 'slided' : this.state = 'slided';
    if (this.state === 'normal') {
      this.state = 'slided';
      this.appState = 'visible';
    } 
  }
}

