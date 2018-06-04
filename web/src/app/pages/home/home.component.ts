import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-home",
  templateUrl: "./home.component.html",
  styleUrls: ["./home.component.scss"]
})
export class PageHomeComponent implements OnInit {
  constructor(private GLOBALS: GlobalService) {}

  ngOnInit() {}
}
