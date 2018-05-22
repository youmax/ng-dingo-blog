import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TemplatePortfolioComponent} from './portfolio.component';

@NgModule({
  imports: [
    CommonModule
  ],
  exports: [
    TemplatePortfolioComponent
  ],
  declarations: [
    TemplatePortfolioComponent
  ]
})
export class PortfolioModule { }
