import {ModuleWithProviders}  from '@angular/core';
import {Routes,RouterModule}  from '@angular/router';
import { GaleriaComponent } from './galeria/galeria.component';
import { DetalleComponent } from './detalle/detalle.component';
const appRoutes:Routes=[
{path:'',component:GaleriaComponent},

{path:'detalle/:id',component:DetalleComponent},
]

export const appRoutingProviders:any[]=[];
export const routing: ModuleWithProviders<any> = RouterModule.forRoot(appRoutes);
