import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { HeaderModule } from "./header/header.module";
import { AsideModule } from "./aside/aside.module";
import { FooterModule } from "./footer/footer.module";

@NgModule({
  imports: [CommonModule, HeaderModule, FooterModule, AsideModule],
  exports: [HeaderModule, FooterModule, AsideModule]
})
export class LayoutModule {}
