import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { RouterModule, Routes } from "@angular/router";
import { AgmCoreModule } from "@agm/core";
import { TitleModule, AsideModule } from "@app/shared";

import { PageContactComponent } from "./contact.component";

const routes: Routes = [{ path: "", component: PageContactComponent }];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
    AgmCoreModule.forRoot({
      apiKey: "AIzaSyBFEgEHlo2F6fcMOh_nH0hMxEHi5RAV2gk"
    })
  ],
  declarations: [PageContactComponent]
})
export class PageContactModule {}
