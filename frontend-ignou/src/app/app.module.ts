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

const appRoutes : Routes = [
  {path : '', component : SetupProfileComponent}
  // {path :'page1', component : HeaderComponent
];

@NgModule({
  declarations: [
    AppComponent,
    SetupProfileComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    BrowserAnimationsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [
    SetupProfileService,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
