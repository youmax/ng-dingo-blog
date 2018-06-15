import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";

import { BaseService } from "../base.service";
import { BaseModel } from "../base.model";

import { Menu } from "./menu.model";

import { CoreModule } from "../../core.module";

@Injectable({
  providedIn: CoreModule
})
export class MenuService extends BaseService {
  constructor(private http: HttpClient) {
    super();
  }

  public get() {
    return this.http
      .get<BaseModel<Menu>>(this.baseUrl + "/menus");
  }
}
