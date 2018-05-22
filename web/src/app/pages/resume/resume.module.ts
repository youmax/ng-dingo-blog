import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule } from '../../shared/title/title.module';
import { AsideModule } from '../../shared/aside/aside.module';
import { NgCircleProgressModule } from 'ng-circle-progress';

import { ResumeComponent } from './resume.component';

const routes: Routes = [
  { path: '', component: ResumeComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
    NgCircleProgressModule.forRoot()
  ],
  declarations: [
    ResumeComponent
  ]
})
export class PageResumeModule { }
