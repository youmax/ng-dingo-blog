import { Component, OnInit } from '@angular/core';
import { AuthorService, Author } from '@app/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class PageHomeComponent implements OnInit {

  author: Author;

  constructor(private authorService: AuthorService) { }

  ngOnInit() {
    this.authorService.get().subscribe(
      (data: Author) => this.author = { ...data }
    );
    console.log(this.author);
  }

}
