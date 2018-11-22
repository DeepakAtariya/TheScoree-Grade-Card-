import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MyHttpService } from './http.service';
import { HttpModule } from '@angular/http';
import { FormsModule } from '@angular/forms';
import { HeaderComponent } from './header/header.component';
import { FieldsComponent } from './fields/fields.component';
import { MiddleHeadingComponent } from './middle-heading/middle-heading.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { SetupProfileComponent } from '../app/setup-profile/setup-profile.component';
import { FieldsService } from './fields/fields.service';
import { SetupProfileService } from './setup-profile/setup-profile.service';

const appRoutes : Routes = [
  {path : '', component : HeaderComponent, data:{animation : 'HomePage'}},
  {path :'user/profileSetup/:name/:enrollment/:program', component : SetupProfileComponent, data:{animation : 'AboutPage'}},
  {path :'user/profileSetup', component : SetupProfileComponent}
  // {path :'page1', component : HeaderComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FieldsComponent,
    MiddleHeadingComponent,
    SetupProfileComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpModule,
    FormsModule,
    BrowserAnimationsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [
    MyHttpService,
    FieldsService,
    SetupProfileService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
