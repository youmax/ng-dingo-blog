import { Component, OnInit } from "@angular/core";
import { GlobalStorage } from "@app/shared";
import { DomSanitizer, SafeStyle } from "@angular/platform-browser";
declare const $: any;

@Component({
  selector: "app-root",
  templateUrl: "./app.component.html",
  styleUrls: ["./app.component.scss"]
})
export class AppComponent implements OnInit {
  public backgroundImg: SafeStyle;

  constructor(
    protected storage: GlobalStorage,
    protected sanitizer: DomSanitizer
  ) {}
  ngOnInit() {
    this.backgroundImg = this.sanitizer.bypassSecurityTrustStyle(
      `url(${this.storage.author.background })`
    );
    $(document).ready(function() {
      $("body").bootstrapMaterialDesign();
    });
  }
}
