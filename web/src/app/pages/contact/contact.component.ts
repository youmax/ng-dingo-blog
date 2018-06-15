import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-contact",
  templateUrl: "./contact.component.html",
  styleUrls: ["./contact.component.scss"]
})
export class PageContactComponent implements OnInit {
  constructor(private GLOBALS: GlobalService) {}

  ngOnInit() {
  }
}
