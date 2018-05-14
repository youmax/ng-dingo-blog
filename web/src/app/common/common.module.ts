import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { TemplatePortfolioComponent } from './portfolio/portfolio.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule
  ],
  declarations: [
    HeaderComponent,
    FooterComponent,
    TemplatePortfolioComponent
  ],
  exports: [
    HeaderComponent,
    FooterComponent,
    TemplatePortfolioComponent
  ]
})
export class CommonTemplateModule { }
