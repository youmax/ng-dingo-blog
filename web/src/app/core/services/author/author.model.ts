export interface AuthorSkill {
  name: string;
  percent: number;
}

export interface AuthorCustomService {
  icon: string;
  title: string;
  desc: string;
}

export interface AuthorLocation {
  latitude: number;
  longitude: number;
}

export interface Author {
  id: string;
  name: string;
  job: string;
  greeting: string;
  services: AuthorCustomService [];
  location: AuthorLocation;
  skills: AuthorSkill[];
}
