import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CarritoComponent } from './carrito/carrito.component';
import { CdDetallesComponent } from './cd-detalles/cd-detalles.component';
import { ListadoComponent } from './listado/listado.component';
import { PedidoComponent } from './pedido/pedido.component';

const routes: Routes = [
  {path: "listado", component: ListadoComponent},
  {path: "carrito", component: CarritoComponent},
  {path: "detalles/:id", component: CdDetallesComponent},
  {path: "pedido", component: PedidoComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
