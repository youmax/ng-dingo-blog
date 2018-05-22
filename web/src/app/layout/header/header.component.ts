import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';

const ROUTES = [
  { path: 'home'},
  { path: 'resume'},
  { path: 'portfolio'},
  { path: 'contact'},
  { path: 'blog'},
];


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  routes;

  constructor(private router:Router) { }

  ngOnInit() {
      this.routes = ROUTES;
  }

}
