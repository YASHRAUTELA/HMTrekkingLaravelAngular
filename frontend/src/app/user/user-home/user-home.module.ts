import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { UserHomeRoutingModule } from './user-home-routing.module';
import { UserHomeComponent } from './user-home.component';
@NgModule({
  imports: [
  
  CommonModule,
    UserHomeRoutingModule
  ],
  declarations: [UserHomeComponent]
})
export class UserHomeModule { }
