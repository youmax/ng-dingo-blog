import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";
import { TranslateService } from "@ngx-translate/core";

@Component({
  selector: "app-home",
  templateUrl: "./home.component.html",
  styleUrls: ["./home.component.scss"]
})
export class PageHomeComponent implements OnInit {
  constructor(private GLOBALS: GlobalService, public translate: TranslateService) {}

  ngOnInit() {}
}
