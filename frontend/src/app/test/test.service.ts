import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../environments/environment';


@Injectable({
  providedIn: 'root'
})
export class TestService {
  url=environment.url
  constructor(private http:HttpClient) {}

  getUserData(){
    return this.http.get(this.url+'user')
  }
}
