import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { BaseService } from "../base.service";
import { catchError, retry } from "rxjs/operators";

import { Author } from "./author.model";

@Injectable({
  providedIn: "root"
})
export class AuthorService extends BaseService {
  constructor(private http: HttpClient) {
    super();
  }

  public get() {
    return this.http
      .get<Author>("http://localhost:3000/authors/1")
      .pipe(catchError(this.handleError));
  }
}
