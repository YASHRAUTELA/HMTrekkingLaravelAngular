import { Component, OnInit } from '@angular/core';
import { ScrollEvent } from 'ngx-scroll-event';

@Component({
  selector: 'app-user-home',
  templateUrl: './user-home.component.html',
  styleUrls: ['./user-home.component.css',
  './../../../assets/css/linearicons.css',
  './../../../assets/css/font-awesome.min.css',
  './../../../assets/css/bootstrap.css',
  './../../../assets/css/magnific-popup.css',
  './../../../assets/css/jquery-ui.css',
  './../../../assets/css/nice-select.css',
  './../../../assets/css/animate.min.css',
  './../../../assets/css/owl.carousel.css',
  './../../../assets/css/main.css'  
  ]
})
export class UserHomeComponent implements OnInit {

  constructor() { }

  ngOnInit() {
    document.getElementById('flight-tab1').classList.add('active','show')
  }

  active(id){
    var idList=['flight-tab1','hotel-tab1','holiday-tab1']
    document.getElementById(id).classList.add('nav-item','active','show')
    idList.map(data=>{
      if(data!=id){
        if(data=='flight-tab1'){
          document.getElementById('flight-tab').classList.remove('active')
        }
        document.getElementById(data).classList.remove('active','show')
      }
    })
  }

  public handleScroll(event: ScrollEvent) {
    document.getElementById('header').className='header-scrolled'
    // console.log('scroll occurred', event.originalEvent);
    if (event.isReachingBottom) {
      // console.log(`the user is reaching the bottom`);
    }
    if (event.isReachingTop) {
      // console.log(`the user is reaching the bottom`);
      document.getElementById('header').className=''
    }
    if (event.isWindowEvent) {
      // console.log(`This event is fired on Window not on an element.`);
    }
  }
}
