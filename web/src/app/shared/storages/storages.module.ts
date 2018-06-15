import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { GlobalStorage } from "./global.storage";
import { StoragePipe } from "./storage.pipe";

@NgModule({
  imports: [CommonModule],
  declarations: [StoragePipe],
  exports: [StoragePipe]
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
