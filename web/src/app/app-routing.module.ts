import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', pathMatch: 'full', redirectTo: 'home' },
  { path: 'home', loadChildren: './pages/home/home.module#HomeModule' },
  { path: 'resume', loadChildren: './pages/resume/resume.module#ResumeModule' },
  { path: 'portfolio', loadChildren: './pages/portfolio/portfolio.module#PortfolioModule' },
  { path: 'contact', loadChildren: './pages/contact/contact.module#ContactModule' },
  { path: 'blog', loadChildren: './pages/blog/blog.module#BlogModule' }
];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
