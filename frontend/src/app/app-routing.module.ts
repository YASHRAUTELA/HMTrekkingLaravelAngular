import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';

const routes: Routes = [
  {
  path: '',
  data: {
      title: 'Get Started'
  },
  children: [
    {
      path: '',
      component: HomeComponent
    }, 
    ]
  }, {
    path: 'form',
    data: {
      title: 'Form',
    },
    children: [
      {
        path: 'input-text',
        loadChildren: './+form/input-text/input-text.module#InputTextModule',
        data: {
          title: 'Input Text',
        }
      }
    ]
  }, {
    path: 'login',
    loadChildren: './+login/login.module#LoginModule',
    data: {
      customLayout: true
    }
  }, {
    path: 'register',
    loadChildren: './+register/register.module#RegisterModule',
    data: {
      customLayout: true
    }
  },
  {
    path:'test',
    loadChildren:'./test/test.module#TestModule',
    data:{
      title:'Test'
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
    path:'user',
    loadChildren:'./user/user-home/user-home.module#UserHomeModule',
    data:{
      title:'User'
    }
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }