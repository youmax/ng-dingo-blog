import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AsideComponent } from './aside/aside.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { TitleComponent } from './title/title.component';


@NgModule({
  imports: [
    CommonModule
  ],
  declarations:[
    AsideComponent,
    PortfolioComponent,
    TitleComponent
  ],
  exports: [
    AsideComponent,
    PortfolioComponent,
    TitleComponent
  ]
})
export class SharedModule { }
