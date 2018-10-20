import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { CoreHomeComponent } from './core/core-home/core-home.component';

const appRoutes: Routes=[
  {
    path:'',
    children:[
      {
        path:'',
        component:CoreHomeComponent,
        data:{
          title:'Home'
        }
      },
      {
        path:'admin',
        loadChildren:'./admin/admin-home/admin-home.module#AdminHomeModule',
        data:{
          title:'Admin Home'
        }
      }
    ]
  }
]

@NgModule({
  imports: [  
    CommonModule,
    RouterModule.forRoot(appRoutes)
  ],
  exports:[RouterModule],
  declarations: []
})
export class AppRoutingModule { }
