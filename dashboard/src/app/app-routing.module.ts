import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { RouterModule, Routes } from "@angular/router";

const routes: Routes = [
  { path: "", pathMatch: "full", redirectTo: "home" },
  { path: "home", loadChildren: "./pages/home/home.module#PageHomeModule" },
];

@NgModule({
  imports: [CommonModule, RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {}
