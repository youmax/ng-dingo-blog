import { NgModule, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { CommonTemplateModule } from '../../common/common.module';
import { NotfoundComponent } from './notfound.component';

const routes: Routes = [
  {path: '', component: NotfoundComponent}
];

@NgModule({
  imports: [
    CommonModule,
    CommonTemplateModule,
    RouterModule.forChild(routes)
  ],
  declarations: [
    NotfoundComponent
  ]
})
export class NotfoundModule { }
