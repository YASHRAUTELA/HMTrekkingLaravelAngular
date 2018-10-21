import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TableModule} from 'primeng/table'
import { TestRoutingModule } from './test-routing.module';
import {DragDropModule} from 'primeng/dragdrop';
import {PanelModule } from 'primeng/primeng';
import { TestComponent } from './test.component';
@NgModule({
  imports: [
    CommonModule,
    TestRoutingModule,
    DragDropModule,
    PanelModule,
    TableModule
  ],
  declarations: [TestComponent]
})
export class TestModule { }
