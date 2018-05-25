import { Router } from "@angular/router";
import { Component, OnInit } from "@angular/core";
import { Menu, MenuService } from "@app/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-header",
  templateUrl: "./header.component.html",
  styleUrls: ["./header.component.scss"]
})
export class HeaderComponent implements OnInit {
  menus: Menu[];

  constructor(
    private router: Router,
    private menuService: MenuService,
    private GLOBALS: GlobalService
  ) {}

  ngOnInit() {
    this.menuService.get().subscribe(menus => {
      this.menus = menus;
    });
  }
}
