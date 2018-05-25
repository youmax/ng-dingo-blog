import { NgModule, Optional, SkipSelf } from "@angular/core";
import { CommonModule } from "@angular/common";
import { HttpClientModule } from "@angular/common/http";
import { AuthorService } from "./services/author/author.service";
import { MenuService } from "./services/menu/menu.service";
import { GlobalService } from "./services/global/global.service";

@NgModule({
  imports: [CommonModule, HttpClientModule],
  providers: [AuthorService, MenuService, GlobalService],
  declarations: []
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
}
