export interface AuthorSkill {
  name: string;
  percent: number;
}

export interface AuthorService {
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
  services: AuthorService[];
  location: AuthorLocation;
  skills: AuthorSkill[];
}
