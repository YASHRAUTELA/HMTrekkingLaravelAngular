import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { UserHomeRoutingModule } from './user-home-routing.module';
import { UserHomeComponent } from './user-home.component';
import { ScrollEventModule } from 'ngx-scroll-event';
@NgModule({
  imports: [
    CommonModule,
    UserHomeRoutingModule,
    ScrollEventModule
  ],
  declarations: [UserHomeComponent]
})
export class UserHomeModule { }
