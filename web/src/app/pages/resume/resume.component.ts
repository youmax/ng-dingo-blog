import { Component, OnInit } from "@angular/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-resume",
  templateUrl: "./resume.component.html",
  styleUrls: ["./resume.component.scss"]
})
export class PageResumeComponent implements OnInit {
  constructor(private GLOBALS: GlobalService) {}

  ngOnInit() {
  }
}
