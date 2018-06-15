import { Component, OnInit } from "@angular/core";
import { TranslateService } from "@ngx-translate/core";
import { GlobalService } from "@app/core";

@Component({
  selector: "app-footer",
  templateUrl: "./footer.component.html",
  styleUrls: ["./footer.component.scss"]
})
export class FooterComponent implements OnInit {
  constructor(
    public translate: TranslateService,
    protected global: GlobalService
  ) {}

  ngOnInit() {}

  getLangName(lang: string) {
    return "FOOTER." + lang.toUpperCase();
  }
  isCurrent(lang: string): boolean {
    return this.translate.currentLang === lang;
  }
  setLang(lang: string) {
    localStorage.setItem("lang", lang);
    this.translate.use(lang);
    this.global.refreshAuthor();
  }
}
