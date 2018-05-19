import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { CommonTemplateModule } from '../../common/common.module';
import { NgCircleProgressModule } from 'ng-circle-progress';
import { ResumeComponent } from './resume.component';

const routes: Routes = [
  { path: '', component: ResumeComponent }
];

@NgModule({
  imports: [
    CommonModule,
    CommonTemplateModule,
    RouterModule.forChild(routes),
    NgCircleProgressModule.forRoot()
  ],
  declarations: [
    ResumeComponent
  ]
})
export class ResumeModule { }
