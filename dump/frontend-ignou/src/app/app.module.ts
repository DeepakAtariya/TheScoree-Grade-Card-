import { BrowserModule } from '@angular/platform-browser';
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
import { CommonModule } from '@angular/common';
import { TransferHttpCacheModule } from '@nguniversal/common';
import { NgtUniversalModule } from '@ng-toolkit/universal';

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
  declarations: [
    AppComponent,
    SetupProfileComponent,
    LoaderComponent,
    DashboardComponent,
    GuestDashboardComponent,
    FooterComponent,
    HeaderComponent,
    AboutComponent,
    FeedbackComponent,
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'serverApp' }),
    HttpClientModule,
    FormsModule,
    BrowserAnimationsModule,
    RouterModule.forRoot(appRoutes,{useHash: true}),
    CommonModule,
    TransferHttpCacheModule,
    NgtUniversalModule
  ],
  providers: [
    SetupProfileService,
    DashboardService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
