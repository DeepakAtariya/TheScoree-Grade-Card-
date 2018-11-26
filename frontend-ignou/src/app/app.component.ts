import { Component} from '@angular/core';
import { MyHttpService } from './http.service';
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
    // slideInAnimation
    // animation triggers go here
    
  ]
})
export class AppComponent {
  state = 'normal';
  appState = 'normal';
  title = 'frontend-ignou';


  constructor(private myService: MyHttpService ) {}

  public static onShowLoader(loader){
    if(loader == 1){
      $('#divLoading').css("display", "block");
    }else{
      $('#divLoading').css("display", "none");
    }

  }

  prepareRoute(outlet: RouterOutlet) {
    return outlet && outlet.activatedRouteData && outlet.activatedRouteData['animation'];
  }


}

