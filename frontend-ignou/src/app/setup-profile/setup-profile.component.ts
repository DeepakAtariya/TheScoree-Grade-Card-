import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-setup-profile',
  templateUrl: './setup-profile.component.html',
  styleUrls: ['./setup-profile.component.css']
})
export class SetupProfileComponent implements OnInit {

  name : string;
  enrollment : string;
  dataProvider : any;
  program :string;

  constructor(private route: ActivatedRoute) { }

  ngOnInit() {
    // console.log(this.route.snapshot.params['name']);
    this.dataProvider = this.route.snapshot.params['name'];
    this.name = this.route.snapshot.params['name'];
    this.enrollment = this.route.snapshot.params['enrollment'];
    this.program = this.route.snapshot.params['program'];
  }
}
