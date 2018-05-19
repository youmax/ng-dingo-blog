import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { CommonTemplateModule } from '../../common/common.module';
import { BlogComponent } from './blog.component';

const routes: Routes = [
  { path: '', component: BlogComponent }
];

@NgModule({
  imports: [
    CommonModule,
    CommonTemplateModule,
    RouterModule.forChild(routes),
  ],
  declarations: [
    BlogComponent
  ]
})
export class BlogModule { }
