import { BrowserModule } from "@angular/platform-browser";
import { NgModule, APP_INITIALIZER } from "@angular/core";
import { CommonModule } from "@angular/common";

import { CoreModule } from "@app/core";
import { LayoutModule } from "@app/layout";
import { AppRoutingModule } from "@app/route";
import { TranslateLoader, TranslateModule } from "@ngx-translate/core";

import { TranslateHttpLoader } from "@app/core";
import { StorageModule, GlobalStorage } from "@app/shared";
import { AppComponent } from "./app.component";
import { HttpClient } from "@angular/common/http";
import { LoginComponent } from './pages/login/login.component';

export function HttpLoaderFactory(httpClient: HttpClient) {
  return new TranslateHttpLoader(httpClient);
}

export function StorageFactory(gs: GlobalStorage) {
  return () => gs.load();
}

@NgModule({
  imports: [
    BrowserModule,
    CommonModule,
    TranslateModule.forRoot({
      loader: {
        provide: TranslateLoader,
        useFactory: HttpLoaderFactory,
        deps: [HttpClient]
      }
    }),
    CoreModule.forRoot(),
    StorageModule.forRoot(),
    LayoutModule,
    AppRoutingModule
  ],
  declarations: [AppComponent, LoginComponent],
  providers: [
    {
      provide: APP_INITIALIZER,
      useFactory: StorageFactory,
      deps: [GlobalStorage],
      multi: true
    }
  ],
  bootstrap: [AppComponent]
})
export class AppModule {}
