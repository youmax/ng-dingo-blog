import { Injectable } from "@angular/core";
import { TranslateLoader } from "@ngx-translate/core";
import { HttpClient } from "@angular/common/http";

import { BaseService } from "../base.service";

import { of } from "rxjs";
import { Observable } from "rxjs/Observable";
import { map } from "rxjs/operators";

import { BaseModel } from "@app/core";

@Injectable()
export class TranslateHttpLoader extends BaseService
  implements TranslateLoader {
  constructor(private http: HttpClient) {
    super();
  }

  getTranslation(lang: string): Observable<Object> {
    return this.http
      .get<BaseModel<Object>>(`${this.baseUrl}/trans/${lang}`)
      .pipe(map(data => data.data));
  }
}
