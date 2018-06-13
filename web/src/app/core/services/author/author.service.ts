import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { BaseService } from "../base.service";
import { catchError, retry } from "rxjs/operators";

import { BaseModel } from "../base.model";
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
      .get<BaseModel<Author>>(
        `${this.baseUrl}/authors`
      )
      .pipe(catchError(this.handleError));
  }

  public download(name: string) {
    return this.http
      .get<Blob>(this.baseUrl + "/authors/" + name + "/resume", {
        responseType: "blob" as "json"
      })
      .pipe(catchError(this.handleError));
  }
}
