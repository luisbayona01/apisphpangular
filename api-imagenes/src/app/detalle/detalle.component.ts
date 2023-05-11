import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import  { AppService } from '../services/app.service';
@Component({
  selector: 'app-detalle',
  templateUrl: './detalle.component.html',
  styleUrls: ['./detalle.component.css']
})
export class DetalleComponent implements OnInit {

imagen: any = {};
  
  constructor(
    private activatedRoute: ActivatedRoute,
    private appService: AppService
  ) { }

  ngOnInit(): void {
 
    this.activatedRoute.params.subscribe(params => {
      const id = params['id'];
  //console.log(id);
      this.appService.getImageDetails(id).subscribe(imagen => {
        console.log('iamgen',imagen.hits[0]) 
        this.imagen = imagen.hits[0];
      });
    });
  }

}
