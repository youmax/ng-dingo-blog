import { Injectable } from "@angular/core";
import { AuthorService } from "../author/author.service";
import { Author } from "../author/author.model";
@Injectable({
  providedIn: "root"
})
export class GlobalService {
  public author: Author;
  constructor(private authorService: AuthorService) {
    this.refreshAuthor();
  }

  public refreshAuthor() {
    this.authorService.get().subscribe(author => {
      const data = author.data as Author;
      this.author = data;
    });
  }
}
