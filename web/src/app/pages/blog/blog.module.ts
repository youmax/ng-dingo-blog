import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule } from '../../shared/title/title.module';
import { AsideModule } from '../../shared/aside/aside.module';

import { BlogComponent } from './blog.component';

const routes: Routes = [
  { path: '', component: BlogComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
  ],
  declarations: [
    BlogComponent
  ]
})
export class PageBlogModule { }
