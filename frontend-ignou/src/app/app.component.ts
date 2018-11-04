import { Component } from '@angular/core';
import { MyHttpService } from './http.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'frontend-ignou';

  constructor(private myService : MyHttpService){}
  
  testLarvel() {
    this.myService.getServices()
    .subscribe(
      (response) => console.log(response),
      (error) => console.log(error)
    );
  }
}
