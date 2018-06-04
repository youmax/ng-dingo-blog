import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { RouterModule, Routes } from "@angular/router";

import { TitleModule, AsideModule } from "@app/shared";
import { NgCircleProgressModule } from "ng-circle-progress";

import { PageResumeComponent } from "./resume.component";

const routes: Routes = [{ path: "", component: PageResumeComponent }];

@NgModule({
  imports: [
    CommonModule,
    TitleModule,
    AsideModule,
    RouterModule.forChild(routes),
    NgCircleProgressModule.forRoot()
  ],
  declarations: [PageResumeComponent]
})
export class PageResumeModule {}
