import { Component, OnInit } from "@angular/core";
import { AuthorService } from "@app/core";
import { GlobalStorage } from "@app/shared";
import { saveAs } from "file-saver/FileSaver";

@Component({
  selector: "app-resume",
  templateUrl: "./resume.component.html",
  styleUrls: ["./resume.component.scss"]
})
export class PageResumeComponent implements OnInit {
  constructor(
    private storage: GlobalStorage,
    private authorService: AuthorService
  ) {}

  ngOnInit() {}

  get professionSkills() {
    return this.storage.author.skills.slice(0, 5);
  }

  get teamWorkSkills() {
    return this.storage.author.skills.slice(5, 8);
  }

  get additionalSkills() {
    return this.storage.author.skills.slice(8, 14);
  }

  public download() {
    this.authorService
      .download(this.storage.author.name)
      .subscribe(response => {
        saveAs(response, this.storage.author.name + ".pdf");
      });
  }
}
