import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule, PortfolioModule, AsideModule } from '@app/shared';

import { PagePortfolioComponent } from './portfolio.component';

const routes: Routes = [
  { path: '', component: PagePortfolioComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    PortfolioModule,
    AsideModule,
    RouterModule.forChild(routes),
  ],
  declarations: [
    PagePortfolioComponent
  ]
})
export class PagePortfolioModule { }
