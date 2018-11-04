import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MyHttpService } from './http.service';
import { HttpModule } from '@angular/http';
import { FormsModule } from '@angular/forms';
import { HeaderComponent } from './header/header.component';
import { FieldsComponent } from './fields/fields.component';
import { MiddleHeadingComponent } from './middle-heading/middle-heading.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FieldsComponent,
    MiddleHeadingComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpModule,
    FormsModule

  ],
  providers: [MyHttpService],
  bootstrap: [AppComponent]
})
export class AppModule { }
