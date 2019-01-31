import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { SetupProfileComponent } from '../app/setup-profile/setup-profile.component';
import { SetupProfileService } from '../app/setup-profile/setup-profile.service';
import { Sharing } from 'src/resources/Sharing';
import { MDBBootstrapModule } from 'angular-bootstrap-md';
import { LoaderComponent } from './ui/loader/loader.component';
import { DashboardComponent } from './dashboard/dashboard.component';

const appRoutes : Routes = [
  {path : '', component : SetupProfileComponent},
  {path : 'loader', component : LoaderComponent},
  {path : 'dashboard', component : DashboardComponent}
  // {path :'page1', component : HeaderComponent
];

@NgModule({
  declarations: [
    AppComponent,
    SetupProfileComponent,
    LoaderComponent,
    DashboardComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    BrowserAnimationsModule,
    MDBBootstrapModule.forRoot(),
    RouterModule.forRoot(appRoutes)
  ],
  providers: [
    SetupProfileService,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
