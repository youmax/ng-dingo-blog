import { Injectable } from "@angular/core";
import { TranslateLoader } from "@ngx-translate/core";
import { HttpClient } from "@angular/common/http";
import { environment } from "@env/environment";

import { Observable } from "rxjs/Observable";
import { map } from "rxjs/operators";

import { BaseModel } from "@app/core";

@Injectable()
export class TranslateHttpLoader implements TranslateLoader {
  constructor(private http: HttpClient) {}

  getTranslation(lang: string): Observable<Object> {
    return this.http
      .get<BaseModel<Object>>(`${environment.apiUrl}/trans/${lang}`)
      .pipe(map(data => data.data));
  }
}
