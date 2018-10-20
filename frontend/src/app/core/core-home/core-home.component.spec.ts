import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CoreHomeComponent } from './core-home.component';

describe('CoreHomeComponent', () => {
  let component: CoreHomeComponent;
  let fixture: ComponentFixture<CoreHomeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CoreHomeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CoreHomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
