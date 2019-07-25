import { Component, OnInit } from '@angular/core';
import * as $ from 'jquery';
@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  constructor() { }

  public ngOnInit(){
    $(document).ready(() => {
    
      $('.message a').click(function(){
       
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });


    });
  }

}
