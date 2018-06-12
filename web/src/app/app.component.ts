import { Component, OnInit } from "@angular/core";
import { TranslateService } from "@ngx-translate/core";
declare const $: any;

@Component({
  selector: "app-root",
  templateUrl: "./app.component.html",
  styleUrls: ["./app.component.scss"]
})
export class AppComponent implements OnInit {
  title = "app";

  constructor(translate: TranslateService) {
    translate.setDefaultLang("cn");
    translate.use("cn");
  }
  ngOnInit() {
    $(document).ready(function() {
      $("body").bootstrapMaterialDesign();
    });
  }
}
