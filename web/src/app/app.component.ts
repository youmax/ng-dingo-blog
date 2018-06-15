import { Component, OnInit } from "@angular/core";
declare const $: any;

@Component({
  selector: "app-root",
  templateUrl: "./app.component.html",
  styleUrls: ["./app.component.scss"]
})
export class AppComponent implements OnInit {
  title = "app";

  constructor() {
  }
  ngOnInit() {
    $(document).ready(function() {
      $("body").bootstrapMaterialDesign();
    });
  }
}
