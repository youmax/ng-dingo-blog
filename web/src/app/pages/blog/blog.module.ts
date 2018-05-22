import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule, AsideModule } from '@app/shared';
import { PageBlogComponent } from './blog.component';

const routes: Routes = [
  { path: '', component: PageBlogComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
  ],
  declarations: [
    PageBlogComponent
  ]
})
export class PageBlogModule { }
