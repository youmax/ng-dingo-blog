import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-aside",
  templateUrl: "./aside.component.html",
  styleUrls: ["./aside.component.scss"]
})
export class AsideComponent implements OnInit {
  constructor(
    private GLOBALS: GlobalService
  ) {}

  ngOnInit() {}
}
