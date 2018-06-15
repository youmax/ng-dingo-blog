import { environment } from "@env/environment";

export abstract class BaseService {
  constructor() {}

  get baseUrl(): string {
    return environment.apiUrl;
  }
}
