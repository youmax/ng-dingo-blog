import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { BaseService } from "../base.service";
import { catchError, retry } from "rxjs/operators";

import { Menu } from "./menu.model";

@Injectable({
  providedIn: "root"
})
export class MenuService extends BaseService {
  constructor(private http: HttpClient) {
    super();
  }

  public get() {
    return this.http
      .get<Menu[]>("http://localhost:3000/menus")
      .pipe(catchError(this.handleError));
  }
}
