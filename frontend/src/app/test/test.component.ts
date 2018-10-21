import { Component, OnInit } from '@angular/core';
import { TestService } from './test.service';

@Component({
  selector: 'app-test',
  templateUrl: './test.component.html',
  styleUrls: ['./test.component.css']
})
export class TestComponent implements OnInit {
  users:any
  cols:any[]
  constructor(private testService:TestService) { }

  ngOnInit() {

    this.testService.getUserData()
    .subscribe(($result)=>{
      console.log('UserData=>',$result)
      this.users=$result
    })

    this.cols = [
      { field: 'id', header: 'ID' },
      { field: 'username', header: 'USERNAME' }
  ];
  }

}
