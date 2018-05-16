import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { TemplatePortfolioComponent } from './portfolio/portfolio.component';
import { AsideComponent } from './aside/aside.component';
import { TitleComponent } from './title/title.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule
  ],
  declarations: [
    HeaderComponent,
    FooterComponent,
    AsideComponent,
    TemplatePortfolioComponent,
    TitleComponent
  ],
  exports: [
    HeaderComponent,
    FooterComponent,
    AsideComponent,
    TemplatePortfolioComponent,
    TitleComponent
  ]
})
export class CommonTemplateModule { }
