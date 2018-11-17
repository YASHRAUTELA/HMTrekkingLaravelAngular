import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';

const routes: Routes = [
  // {
  // path: '',
  // data: {
  //     title: 'Get Started',
  //     customLayout:true
  // },
  // children: [
  //   {
  //     path: '',
  //     component: HomeComponent,
  //   }, 
  //   ]
  // },
  {
    path:'',
    loadChildren:'./user/user-home/user-home.module#UserHomeModule',
    data:{
      title:'User',
      customLayout:true
    }
  },

  {
    path:'admin',
    loadChildren:'./admin/admin-home/admin-home.module#AdminHomeModule',
    data:{
      title:'Admin'
    }
  },
  
  {
    path: 'form',
    data: {
      title: 'Form',
    },
    children: [
      {
        path: 'input-text',
        loadChildren: './form/input-text/input-text.module#InputTextModule',
        data: {
          title: 'Input Text',
        }
      }
    ]
  }, {
    path: 'login',
    loadChildren: './login/login.module#LoginModule',
    data: {
      customLayout: true
    }
  }, {
    path: 'register',
    loadChildren: './register/register.module#RegisterModule',
    data: {
      customLayout: true
    }
  },
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }