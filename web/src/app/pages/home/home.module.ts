import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { RouterModule, Routes } from "@angular/router";
import { PortfolioModule } from "@app/shared";
import { PageHomeComponent } from "./home.component";

const routes: Routes = [{ path: "", component: PageHomeComponent }];

@NgModule({
  imports: [CommonModule, PortfolioModule, RouterModule.forChild(routes)],
  declarations: [PageHomeComponent]
})
export class PageHomeModule {}
