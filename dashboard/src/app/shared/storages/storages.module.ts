import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { GlobalStorage } from "./global.storage";
import { StoragePipe } from "./storage.pipe";
import { HtmlPipe } from "./html.pipe";

@NgModule({
  imports: [CommonModule],
  declarations: [StoragePipe, HtmlPipe],
  exports: [StoragePipe, HtmlPipe]
})
export class StorageModule {
  static forRoot() {
    return {
      ngModule: StorageModule,
      providers: [
        GlobalStorage
      ]
    };
  }
}
