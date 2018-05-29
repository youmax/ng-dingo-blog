export interface BaseModel<T> {
  data: T | T[];
  meta: Object;
  message: string;
  status_code: number;
  errors: Object;
}
