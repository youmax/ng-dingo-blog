import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', pathMatch: 'full', redirectTo: 'home' },
  { path: 'home', loadChildren: './pages/home/home.module#PageHomeModule' },
  { path: 'resume', loadChildren: './pages/resume/resume.module#PageResumeModule' },
  { path: 'portfolio', loadChildren: './pages/portfolio/portfolio.module#PagePortfolioModule' },
  { path: 'contact', loadChildren: './pages/contact/contact.module#PageContactModule' },
  { path: 'blog', loadChildren: './pages/blog/blog.module#PageBlogModule' },
  { path: '**', loadChildren: './pages/notfound/notfound.module#PageNotfoundModule' }
];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
