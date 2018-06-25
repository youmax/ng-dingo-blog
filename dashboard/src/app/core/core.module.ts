import { NgModule, Optional, SkipSelf} from "@angular/core";
import { CommonModule } from "@angular/common";
import { HttpClientModule } from "@angular/common/http";
import { TranslateModule } from "@ngx-translate/core";

import { HTTP_INTERCEPTORS } from "@angular/common/http";
import {
  HttpHeaderInterceptor,
  HttpErrorInterceptor
} from "./inteceptors/index";

@NgModule({
  imports: [CommonModule, HttpClientModule, TranslateModule.forChild()],
  providers: [
    {
      provide: HTTP_INTERCEPTORS,
      useClass: HttpHeaderInterceptor,
      multi: true
    },
    {
      provide: HTTP_INTERCEPTORS,
      useClass: HttpErrorInterceptor,
      multi: true
    }
  ]
})
export class CoreModule {
  constructor(
    @Optional()
    @SkipSelf()
    core: CoreModule
  ) {
    if (core) {
      throw new Error("core module can only inject in app module once");
    }
  }
  static forRoot() {
    return {
      ngModule: CoreModule,
      providers: []
    };
  }
}
