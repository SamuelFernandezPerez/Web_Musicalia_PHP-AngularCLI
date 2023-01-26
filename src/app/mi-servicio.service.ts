import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { Cd } from './models/cd';
import { CdCarrito } from './models/cdCarrito';
import { Pedido } from './models/pedido';

@Injectable({
  providedIn: 'root',
})
export class MiServicioService {
  ruta_server = '/server/';
  constructor(private http: HttpClient) {}
  obtenerCds(): Observable<Cd[]> {
    return this.http.get<Cd[]>(this.ruta_server + 'obtenerCds.php');
  }
  obtenerCdPorId(id: number): Observable<Cd> {
    return this.http.get<Cd>(this.ruta_server + 'obtenerCdPorId.php?id=' + id);
  }
  agregarAlCarrito(idCd: number, cantidad: number): Observable<any> {
    return this.http.post<any>(this.ruta_server + 'agregarCdCarrito.php', {
      id: idCd,
      cantidad: cantidad,
    });
  }
  obtenerCdsCarrito(): Observable<CdCarrito[]> {
    return this.http.get<CdCarrito[]>(
      this.ruta_server + 'obtenerCdsCarrito.php'
    );
  }
  vaciarCarrito(): Observable<string> {
    return this.http.post<string>(this.ruta_server + 'vaciarCarrito.php', '');
  }
  registrarPedido(p: Pedido): Observable<string> {
    return this.http.post<string>(this.ruta_server + 'registrarPedido.php', p);
  }
  eliminarProductoCarrito(id: number): Observable<any> {
    return this.http.post<any>(
      this.ruta_server + 'eliminarProductoCarrito.php',
      { idProducto: id }
    );
  }
  actualizarCantidadCarrito(idCd: number, cantidad: number): Observable<any> {
    return this.http.post<any>(
      this.ruta_server + 'actualizarCantidadCarrito.php',
      { id: idCd, cantidad }
    );
  }
}
