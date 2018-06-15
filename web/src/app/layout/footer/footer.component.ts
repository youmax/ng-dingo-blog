import { Component, OnInit } from "@angular/core";
import { TranslateService } from "@ngx-translate/core";

@Component({
  selector: "app-footer",
  templateUrl: "./footer.component.html",
  styleUrls: ["./footer.component.scss"]
})
export class FooterComponent implements OnInit {
  constructor(
    public translate: TranslateService
  ) {}

  ngOnInit() {}

  getLangName(lang: string) {
    return "FOOTER." + lang.toUpperCase();
  }
  isCurrent(lang: string): boolean {
    return this.translate.currentLang === lang;
  }
  setLang(lang: string) {
    this.translate.use(lang);
  }
}
