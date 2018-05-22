import { NgModule, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { AsideModule } from '../../shared/aside/aside.module';

import { NotfoundComponent } from './notfound.component';

const routes: Routes = [
  {path: '', component: NotfoundComponent}
];

@NgModule({
  imports: [
    CommonModule,
    AsideModule,
    RouterModule.forChild(routes)
  ],
  declarations: [
    NotfoundComponent
  ]
})
export class PageNotfoundModule { }
