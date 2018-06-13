import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { TranslateModule } from "@ngx-translate/core";

import { FooterComponent } from "./footer.component";

@NgModule({
  imports: [CommonModule, TranslateModule.forChild()],
  exports: [FooterComponent],
  declarations: [FooterComponent]
})
export class FooterModule {}
