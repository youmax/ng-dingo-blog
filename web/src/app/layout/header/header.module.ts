import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { RouterModule } from "@angular/router";
import { StorageModule } from "@app/shared";
import { HeaderComponent } from "./header.component";

@NgModule({
  imports: [CommonModule, RouterModule, StorageModule],
  exports: [HeaderComponent],
  declarations: [HeaderComponent]
})
export class HeaderModule {}
