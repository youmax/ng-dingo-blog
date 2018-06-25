import { Component, OnInit } from "@angular/core";
import { GlobalStorage } from "@app/shared";
import { DomSanitizer } from "@angular/platform-browser";
declare const $: any;

@Component({
  selector: "app-root",
  templateUrl: "./app.component.html",
  styleUrls: ["./app.component.scss"]
})
export class AppComponent implements OnInit {
  constructor(
    protected storage: GlobalStorage,
    protected sanitizer: DomSanitizer
  ) {}
  ngOnInit() {
    $(document).ready(() => {
      $("body").bootstrapMaterialDesign();
      $("body").css(
        "background-image",
        `url('${this.storage.author.background}')`
      );
    });
  }
}
