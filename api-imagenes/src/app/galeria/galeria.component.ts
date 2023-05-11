import  { AppService } from '../services/app.service';
import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-galeria',
  templateUrl: './galeria.component.html',
  styleUrls: ['./galeria.component.css']
})
export class GaleriaComponent implements OnInit {
  searchTerm: string = '';
  images: any[] = [];
selectedCategory: string = "";
  constructor(private appService: AppService,private router: Router) { }

  ngOnInit(): void {
  this.loadImages();
  }
  loadImages(): void {
    this.appService.getImages('', 1, 20, 'popular').subscribe(response => {
      this.images = response.hits;
    });
  }

 buscar() {
    this.appService.buscarImagenes(this.searchTerm).subscribe(
      (imagenes) => {
        this.images = imagenes.hits;
      },
      (error) => {
        console.error(error);
      }
    );
  }

buscarselect() {
  this.appService.buscar(this.searchTerm, this.selectedCategory).subscribe((data) => {
    this.images = data.hits;
  });
}


}
