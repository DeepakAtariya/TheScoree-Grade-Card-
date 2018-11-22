import { Component} from '@angular/core';
import { MyHttpService } from './http.service';
import { Config } from 'src/resources/conf';
import { trigger, state, style, transition, animate, query, group } from '@angular/animations';
declare var $: any;
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  state = 'normal';
  appState = 'normal';
  title = 'frontend-ignou';


  constructor(private myService: MyHttpService ) {}
  // testLarvel() {
  //   this.myService.getServices(Config.backendIgnou)
  //   .subscribe(
  //     (response) => console.log(response),
  //     (error) => console.log(error)
  //   );
  // }


  public static onShowLoader(loader){
    if(loader == 1){
      $('#divLoading').css("display", "block");
    }else{
      $('#divLoading').css("display", "none");
    }

  }


}

