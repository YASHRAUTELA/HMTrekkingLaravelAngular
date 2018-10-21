import { Component, OnInit } from '@angular/core';
import { FormGroup,FormControl,FormArray, Validators} from '@angular/forms';
@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {


  // constructor() { }

  loginForm:FormGroup;

  ngOnInit() {
    this.loginForm=new FormGroup({
      email:new FormControl(null,Validators.required),
      password:new FormControl(null,[Validators.required, Validators.minLength(6)])
    });
  }

  loginUser(){
    console.log(this.loginForm.status);
    console.log(this.loginForm.value);
  }

  


}
