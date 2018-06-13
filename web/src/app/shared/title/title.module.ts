import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { TranslateModule } from "@ngx-translate/core";
import { TitleComponent } from "./title.component";

@NgModule({
  imports: [CommonModule, TranslateModule.forChild()],
  exports: [TitleComponent],
  declarations: [TitleComponent]
})
export class TitleModule {}
