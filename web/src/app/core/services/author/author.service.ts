import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { BaseService } from "../base.service";

import { BaseModel } from "../base.model";
import { Author } from "./author.model";

import { CoreModule } from "../../core.module";

@Injectable({
  providedIn: CoreModule
})
export class AuthorService extends BaseService {
  constructor(private http: HttpClient) {
    super();
  }

  public get() {
    return this.http
      .get<BaseModel<Author>>(
        `${this.baseUrl}/authors`
      );
  }

  public download(name: string) {
    return this.http
      .get<Blob>(this.baseUrl + "/authors/" + name + "/resume", {
        responseType: "blob" as "json"
      });
  }
}
