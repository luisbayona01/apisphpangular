import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule, HttpClient } from '@angular/common/http'
import { AppComponent } from './app.component';
import { GaleriaComponent } from './galeria/galeria.component';
import { DetalleComponent } from './detalle/detalle.component';
import { RouterModule } from '@angular/router';
import {routing,appRoutingProviders} from './app.routing';
import { FormsModule } from '@angular/forms';
@NgModule({
  declarations: [
    AppComponent,
    GaleriaComponent,
    DetalleComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    routing,
 FormsModule
    
  ],
  providers: [HttpClientModule,appRoutingProviders],
  bootstrap: [AppComponent]
})
export class AppModule { }
