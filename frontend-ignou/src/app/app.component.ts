import { Component} from '@angular/core';
import { Config } from 'src/resources/conf';
import { trigger, state, style, transition, animate, query, group } from '@angular/animations';
import { RouterOutlet } from '@angular/router';
import { slideInAnimation } from './animations';
declare var $: any;
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  animations: [
    slideInAnimation
    // animation triggers go here
    // simpleAnimation

    
  ]
})
export class AppComponent {
  state = 'normal';
  appState = 'normal';
  title = 'frontend-ignou';


  constructor() {}

  public static onShowLoader(loader){
    if(loader == 1){
      $('#divLoading').css("display", "block");
    }else{
      $('#divLoading').css("display", "none");
    }

  }

  prepareRoute(outlet: RouterOutlet) {
    // var s = outlet && outlet.activatedRouteData && outlet.activatedRouteData['animation'];
    var s = outlet.activatedRouteData['animation'] || {};
    console.log(s);
    return s['value'] || null;
  }
}

