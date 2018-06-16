import { Pipe, PipeTransform } from "@angular/core";
import { DomSanitizer, SafeHtml } from "@angular/platform-browser";

@Pipe({
  name: "html"
})
export class HtmlPipe implements PipeTransform {
  constructor(private _sanitizer: DomSanitizer) {}
  transform(value: any): SafeHtml {
    return this._sanitizer.bypassSecurityTrustHtml(value);
  }
}
