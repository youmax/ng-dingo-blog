import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { TitleModule } from '../../shared/title/title.module';
import { AsideModule } from '../../shared/aside/aside.module';
import { AgmCoreModule } from '@agm/core';

import { ContactComponent } from './contact.component';

const routes: Routes = [
  { path: '', component: ContactComponent }
];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
    AgmCoreModule.forRoot({
      apiKey: 'AIzaSyBFEgEHlo2F6fcMOh_nH0hMxEHi5RAV2gk'
    }),
  ],
  declarations: [
    ContactComponent
  ]
})
export class PageContactModule { }
