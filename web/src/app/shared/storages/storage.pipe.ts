import { Pipe, PipeTransform } from "@angular/core";
import { GlobalStorage } from "./global.storage";

function isDefined(value: any): boolean {
  return typeof value !== "undefined" && value !== null;
}

@Pipe({
  name: "storage"
})
export class StoragePipe implements PipeTransform {
  constructor(
    protected global: GlobalStorage
  ) {}
  transform(query: any, ...args: any[]): any {
    if (!query || query.length === 0) {
      return query;
    }
    const $value = this.getValue(this.global, query);
    return $value;
  }

  getValue(target: any, key: string): any {
    const keys = key.split(".");
    key = "";
    do {
      key += keys.shift();

      if (
        isDefined(target) &&
        isDefined(target[key]) &&
        (typeof target[key] === "object" || !keys.length)
      ) {
        target = target[key];
        key = "";
      } else if (!keys.length) {
        target = undefined;
      } else {
        key += ".";
      }
    } while (keys.length);
    console.log(target);
    return target;
  }
}
