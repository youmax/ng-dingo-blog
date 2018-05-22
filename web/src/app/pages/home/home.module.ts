import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { PortfolioModule } from '../../shared/portfolio/portfolio.module';
import { HomeComponent } from './home.component';

const routes: Routes = [
  { path: '', component: HomeComponent }
];

@NgModule({
  imports: [
    CommonModule,
    PortfolioModule,
    RouterModule.forChild(routes)
  ],
  declarations: [
    HomeComponent
  ]
})
export class PageHomeModule { }
