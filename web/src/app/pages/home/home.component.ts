import { Component, OnInit } from '@angular/core';
import { AuthorService } from '@app/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class PageHomeComponent implements OnInit {

  constructor(private authorService: AuthorService) { }

  ngOnInit() {
    console.log(this.authorService.get());
  }

}
