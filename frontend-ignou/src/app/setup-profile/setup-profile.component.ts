import { Component, OnInit, ViewChild } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { SetupProfileService } from './setup-profile.service';
import { Response } from '@angular/http';
import {Location} from '@angular/common';
import { AppComponent } from '../app.component';

@Component({
  selector: 'app-setup-profile',
  templateUrl: './setup-profile.component.html',
  styleUrls: ['./setup-profile.component.css']
})

/*  this component is responsible to fetch user remaining information,
    this component will redirect user to next component called "SetCredentials" for setting credentials to the user.
    
    */
export class SetupProfileComponent implements OnInit {

  // setupProfileData is responsible to fetch data from setupProfile form
  @ViewChild('f')  setupProfileData: NgForm;

  name : string;
  enrollment : string;
  program :string;
  email :string;
  mobile : string;
  path = '';
  save_error = "none";
  save_success = "block";

  emailValidate = "";
  activeButton :Boolean;


  // form data in json format
  userData = {
    'name' : '',
    'enrollment' : '',
    'program' : '',
    'email' : '',
    'mobile' : ''
  };

  constructor(private Activatedroute: ActivatedRoute, private setupProfileService : SetupProfileService, private location : Location, private route: Router) { }

  ngOnInit() {
    

    this.userData.name = this.Activatedroute.snapshot.params['name'];
    this.userData.enrollment = this.Activatedroute.snapshot.params['enrollment'];
    this.userData.program = this.Activatedroute.snapshot.params['program'];

  }


  // two way binded method to fetch data!
  onSubmit() {
    let setupProfileFormData = this.setupProfileData.value.setupProfileGroupData;
    this.userData.email = setupProfileFormData.email;
    this.userData.mobile = setupProfileFormData.mobile;



    // AppComponent.onShowLoader(1);
    // this.setupProfileService.onSave(setupProfileFormData)
    // .subscribe(
    //   (response: Response) => {
    //     const responseData = response.json();
    //     AppComponent.onShowLoader(0);
    //     if(responseData.status){
    //       this.route.navigate(["user/showProfile", this.userData.name, this.userData.enrollment, this.userData.program, this.userData.email, this.userData.mobile]);
    //     }else{
    //       // this.path
    //       // this.setupProfileService.onNavigate(this.path, this.userData );  
    //       this.save_error="block";
    //       this.save_success="none";
    //       AppComponent.onShowLoader(0);
          
    //     }
    //   },
    //   (error) =>{
    //       this.save_error="block";
    //       this.save_success="none";
    //       AppComponent.onShowLoader(0);
    //   }
    // );

  }

  // this function works in server error!
  serviceUnavailable() {
    this.route.navigate([""]);
  }

  
}
