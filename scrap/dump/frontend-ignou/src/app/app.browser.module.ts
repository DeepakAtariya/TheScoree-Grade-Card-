import { BrowserModule, BrowserTransferStateModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { SetupProfileComponent } from '../app/setup-profile/setup-profile.component';
import { SetupProfileService } from '../app/setup-profile/setup-profile.service';

import { LoaderComponent } from './ui/loader/loader.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { DashboardService } from './dashboard/dashboard.service';
import { GuestDashboardComponent } from './guest-dashboard/guest-dashboard.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { AboutComponent } from './about/about.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { AppModule } from './app.module';

const appRoutes : Routes = [
  {path : '', component : SetupProfileComponent ,data: {animation: 'HomePage'}},
  {path : 'loader', component : LoaderComponent, },
  // {path : 'dashboard', component : DashboardComponent, data: {animation: 'Dashboard'}},
  {path : 'guestdashboard/:program/:enrollment', component : GuestDashboardComponent, data: {animation: 'GuestDashboard'}},
  {path : 'about', component : AboutComponent, data: {animation: 'About'}},
  {path : 'feedback', component : FeedbackComponent, data: {animation: 'Feedback'}}
  // {path :'page1', component : HeaderComponent
];

@NgModule({
  imports: [
    
    HttpClientModule,
    FormsModule,
    BrowserAnimationsModule,
    RouterModule.forRoot(appRoutes),
    AppModule,
    BrowserTransferStateModule
  ],
  providers: [
    SetupProfileService,
    DashboardService
  ],
  bootstrap: [AppComponent]
})
export class AppBrowserModule { }
