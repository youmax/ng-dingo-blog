import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Observable } from 'rxjs';
import { AgmCoreModule } from '@agm/core';

import { CommonTemplateModule } from './common/common.module';
import { AppRoutingModule } from './app-routing.module';

import { ResumeComponent } from './resume/resume.component';
import { AppComponent } from './app.component';

import { HomeComponent } from './home/home.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { BlogComponent } from './blog/blog.component';
import { ContactComponent } from './contact/contact.component';

@NgModule({
  imports: [
    BrowserModule,
    CommonModule,
    CommonTemplateModule,
    AppRoutingModule,
    AgmCoreModule.forRoot({
      apiKey: 'AIzaSyBFEgEHlo2F6fcMOh_nH0hMxEHi5RAV2gk'
    })
  ],
  declarations: [
    ResumeComponent,
    AppComponent,
    HomeComponent,
    PortfolioComponent,
    BlogComponent,
    ContactComponent
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
