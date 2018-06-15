import { Router } from "@angular/router";
import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-header",
  templateUrl: "./header.component.html",
  styleUrls: ["./header.component.scss"]
})
export class HeaderComponent implements OnInit {

  constructor(
    private router: Router,
    private GLOBALS: GlobalService
  ) {}

  ngOnInit() {
  }
}
