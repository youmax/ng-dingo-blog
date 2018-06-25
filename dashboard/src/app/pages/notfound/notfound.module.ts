import { NgModule, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { AsideModule } from '@app/shared';

import { PageNotfoundComponent } from './notfound.component';

const routes: Routes = [
  {path: '', component: PageNotfoundComponent}
];

@NgModule({
  imports: [
    CommonModule,
    AsideModule,
    RouterModule.forChild(routes)
  ],
  declarations: [
    PageNotfoundComponent
  ]
})
export class PageNotfoundModule { }
