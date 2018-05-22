import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule } from '../../shared/title/title.module';
import { AsideModule } from '../../shared/aside/aside.module';
import { PortfolioModule } from '../../shared/portfolio/portfolio.module';

import { PortfolioComponent } from './portfolio.component';

const routes: Routes = [
  { path: '', component: PortfolioComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    PortfolioModule,
    RouterModule.forChild(routes),
  ],
  declarations: [
    PortfolioComponent
  ]
})
export class PagePortfolioModule { }
