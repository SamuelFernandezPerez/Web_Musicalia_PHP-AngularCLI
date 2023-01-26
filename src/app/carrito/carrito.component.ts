import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { CdCarrito } from '../models/cdCarrito';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css'],
})
export class CarritoComponent {
  cdsCarrito: CdCarrito[] = {} as CdCarrito[];
  currentPage = 1;
  itemsPerPage = 9;
  totalPages: number;
  constructor(private miServicio: MiServicioService, private router: Router) {
    this.totalPages = 0;
  }

  ngOnInit(): void {
    this.listarCdsCarrito();
  }
  listarCdsCarrito() {
    this.miServicio.obtenerCdsCarrito().subscribe((res) => {
      this.cdsCarrito = res;
      this.totalPages = Math.ceil(this.cdsCarrito.length / this.itemsPerPage);
    });
  }
  vaciarCarrito() {
    this.miServicio
      .vaciarCarrito()
      .subscribe((res) =>
        res == 'ok'
          ? (this.cdsCarrito = [])
          : alert('no pude vaciar el carrito')
      );
  }
  realizarPedido() {
    if (this.cdsCarrito.length === undefined || this.cdsCarrito.length == 0) {
      alert(
        'El carrito no puede estar vacio. Agrega un producto para realizar el pedido'
      );
      return;
    }
    this.router.navigate(['pedido']);
  }
  nextPage() {
    this.currentPage++;
  }
  previousPage() {
    this.currentPage--;
  }
  eliminarProductoCarrito(id: number): void {
    this.miServicio
      .eliminarProductoCarrito(id)

      .subscribe((res) =>
        res == 'vacio' ? (this.cdsCarrito = []) : this.listarCdsCarrito
      );
  }
  onValueChange(event: any, idCd: number): void {
    let cantidad = event.target.value;
    if (cantidad > 0) {
      this.miServicio
        .actualizarCantidadCarrito(idCd, cantidad)
        .subscribe((res) => console.log(res));
    }
  }
}
