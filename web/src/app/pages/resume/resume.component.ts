import { Component, OnInit } from "@angular/core";
import { GlobalService, AuthorService } from "@app/core";
import { saveAs } from "file-saver/FileSaver";
import { TranslateService } from "@ngx-translate/core";

@Component({
  selector: "app-resume",
  templateUrl: "./resume.component.html",
  styleUrls: ["./resume.component.scss"]
})
export class PageResumeComponent implements OnInit {
  constructor(
    private GLOBALS: GlobalService,
    private authorService: AuthorService,
    public translate: TranslateService
  ) {}

  ngOnInit() {}

  protected download() {
    this.authorService
      .download(this.GLOBALS.author.name)
      .subscribe(response => {
        saveAs(response, this.GLOBALS.author.name + ".pdf");
      });
  }
}
