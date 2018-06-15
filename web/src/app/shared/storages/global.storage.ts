import { Injectable } from "@angular/core";
import { environment } from "@env/environment";
import { AuthorService, Author, MenuService, Menu } from "@app/core";
import { TranslateService, LangChangeEvent } from "@ngx-translate/core";
import { forkJoin } from "rxjs/observable/forkJoin";
import { empty } from "rxjs/observable/empty";
import { Observable, of } from "rxjs";

@Injectable()
export class GlobalStorage {
  protected _author: Author;
  protected _menus: Menu[];
  get author() {
    return this._author;
  }
  get menus() {
    return this._menus;
  }

  protected _app_init_promise;

  constructor(
    protected authorService: AuthorService,
    protected translates: TranslateService,
    protected menuService: MenuService
  ) {
    const defaultLang = environment.APP_LOCALE || "en";
    if (!localStorage.getItem("lang")) {
      localStorage.setItem("lang", defaultLang);
    }
    this.translates.addLangs(["en", "cn"]);
    this.translates.setDefaultLang(defaultLang);
    this.translates.use(localStorage.getItem("lang"));
    this.translates.onLangChange.subscribe((event: LangChangeEvent) => {
      localStorage.setItem("lang", event.lang);
      forkJoin([this.menuService.get(), this.authorService.get()]).subscribe(
        results => {
          this._menus = results[0].data as Menu[];
          this._author = results[1].data as Author;
          console.log(this._menus, this._author);
        }
      );
    });
  }

  public load() {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        if (this._author && this._menus) {
          resolve();
        }
      }, 1000);
    });
  }
}
