import { Injectable } from "@angular/core";
import { AuthorService } from "../author/author.service";
import { Author } from "../author/author.model";
import { TranslateService } from "@ngx-translate/core";

@Injectable({
  providedIn: "root"
})
export class GlobalService {
  public author: Author;

  constructor(
    private authorService: AuthorService,
    protected translate: TranslateService
  ) {
    if (!localStorage.getItem("lang")) {
      localStorage.setItem("lang", "cn");
    }

    this.translate.addLangs(["en", "cn"]);
    this.translate.setDefaultLang("cn");
    this.translate.use(localStorage.getItem("lang"));
    this.refreshAuthor();
  }

  public refreshAuthor() {
    this.authorService.get().subscribe(author => {
      const data = author.data as Author;
      this.author = data;
    });
  }
}
