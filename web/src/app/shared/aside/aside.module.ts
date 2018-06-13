import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { TranslateModule } from "@ngx-translate/core";

import { AsideComponent } from "./aside.component";

@NgModule({
  imports: [CommonModule, TranslateModule.forChild()],
  exports: [AsideComponent],
  declarations: [AsideComponent]
})
export class AsideModule {}
