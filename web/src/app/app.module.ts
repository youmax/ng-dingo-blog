import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AppRoutingModule } from './app-routing.module';

import { ResumeComponent } from './resume/resume.component';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { HomeComponent } from './home/home.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { BlogComponent } from './blog/blog.component';
import { ContactComponent } from './contact/contact.component';
import { FooterComponent } from './footer/footer.component';

@NgModule({
  imports: [
    BrowserModule,
    CommonModule,
    AppRoutingModule,

  ],
  declarations: [
    ResumeComponent,
    AppComponent,
    HeaderComponent,
    HomeComponent,
    PortfolioComponent,
    BlogComponent,
    ContactComponent,
    FooterComponent
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
