import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MiddleHeadingComponent } from './middle-heading.component';

describe('MiddleHeadingComponent', () => {
  let component: MiddleHeadingComponent;
  let fixture: ComponentFixture<MiddleHeadingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MiddleHeadingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MiddleHeadingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
