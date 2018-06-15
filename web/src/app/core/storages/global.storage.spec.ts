import { TestBed, inject } from "@angular/core/testing";

import { GlobalService } from "./global.storage";

describe("GlobalService", () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [GlobalService]
    });
  });

  it(
    "should be created",
    inject([GlobalService], (service: GlobalService) => {
      expect(service).toBeTruthy();
    })
  );
});
