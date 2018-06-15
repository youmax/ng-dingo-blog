import { Injectable } from "@angular/core";
import { environment } from "@env/environment";

import { AuthorService } from "../services/author/author.service";
import { Author } from "../services/author/author.model";
import { MenuService } from "../services/menu/menu.service";
import { Menu } from "../services/menu/menu.model";
import { TranslateService, LangChangeEvent } from "@ngx-translate/core";

import { CoreModule } from "../core.module";

@Injectable({
  providedIn: CoreModule
})
export class GlobalService {
  protected _author: Author;
  protected _menus: Menu[];
  get author() {
    return this._author;
  }
  get menus() {
    return this._menus;
  }

  constructor(
    protected authorService: AuthorService,
    protected translates: TranslateService,
    protected menuService: MenuService
  ) {
    this.initLanguage();
  }

  protected initLanguage() {
    const defaultLang = environment.APP_LOCALE || "en";
    if (!localStorage.getItem("lang")) {
      localStorage.setItem("lang", defaultLang);
    }
    this.translates.onLangChange.subscribe((event: LangChangeEvent) => {
      localStorage.setItem("lang", event.lang);
      this.refreshAuthor();
      this.refreshMenus();
    });
    this.translates.addLangs(["en", "cn"]);
    this.translates.setDefaultLang(defaultLang);
    this.translates.use(localStorage.getItem("lang"));
  }

  public refreshAuthor() {
    this.authorService.get().subscribe(author => {
      const data = author.data as Author;
      this._author = data;
    });
  }

  public refreshMenus() {
    this.menuService.get().subscribe(menus => {
      const data = menus.data as Menu[];
      this._menus = data;
    });
  }
}
