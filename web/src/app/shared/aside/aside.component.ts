import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";
import { TranslateService } from "@ngx-translate/core";

@Component({
  selector: "app-aside",
  templateUrl: "./aside.component.html",
  styleUrls: ["./aside.component.scss"]
})
export class AsideComponent implements OnInit {
  constructor(
    private GLOBALS: GlobalService,
    public translate: TranslateService
  ) {}

  ngOnInit() {}
}
