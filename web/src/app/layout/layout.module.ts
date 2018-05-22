import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HeaderModule } from './header/header.module';
import { FooterModule } from './footer/footer.module';


@NgModule({
  imports: [
    CommonModule,
    HeaderModule,
    FooterModule
  ],
  exports: [
    HeaderModule,
    FooterModule
  ]
})
export class LayoutModule { }
