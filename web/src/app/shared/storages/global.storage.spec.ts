import { TestBed, inject } from "@angular/core/testing";

import { GlobalStorage } from "./global.storage";

describe("GlobalStorage", () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [GlobalStorage]
    });
  });

  it(
    "should be created",
    inject([GlobalStorage], (service: GlobalStorage) => {
      expect(service).toBeTruthy();
    })
  );
});
