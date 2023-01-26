import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Pedido } from '../models/pedido';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css'],
})
export class PedidoComponent {
  pedido: Pedido = {} as Pedido;
  nombreOk = true;
  direccionOk = true;
  cpOk = true;
  provinciaOk = true;
  telefonoOk = true;
  emailOk = true;
  tarjetaOk = true;
  constructor(private servicio: MiServicioService, private router: Router) {}

  finalizarPedido() {
    if (this.validarForm()) {
      this.servicio
        .registrarPedido(this.pedido)
        .subscribe((res) =>
          res == 'ok'
            ? this.pedidoOk()
            : alert('No se pudo registrar tu pedido')
        );
    }
  }
  pedidoOk() {
    alert('Pedido realizado exitosamente, puedes seguir comprando');
    this.router.navigate(['listado']);
  }
  validarForm() {
    if (this.pedido.nombre === undefined) {
      alert('Debes insertar un nombre');
      this.nombreOk = false;
      return false;
    }
    if (/^[a-zA-Z ]{2,30}$/.test(this.pedido.nombre)) {
      this.nombreOk = true;
    } else {
      alert('Nombre debe tener de 2 a 30 caracteres, solo letras y espacios');
      this.nombreOk = false;
      return false;
    }

    if (this.pedido.direccion === undefined) {
      alert('Debes insertar una direccion');
      this.direccionOk = false;
      return false;
    }
    if (/^[a-zA-Z0-9 ]{3,30}$/.test(this.pedido.direccion)) {
      this.direccionOk = true;
    } else {
      alert(
        'Direccion debe tener de 3 a 30 caracteres, solo letras y espacios'
      );
      this.direccionOk = false;
      return false;
    }

    if (this.pedido.cp === undefined) {
      alert('Debes insertar una codigo postal');
      this.cpOk = false;
      return false;
    }
    if (/^[0-9 ]{5}$/.test(this.pedido.cp)) {
      this.cpOk = true;
    } else {
      alert('Codigo postal debe tener 5 caracteres, solo numeros');
      this.cpOk = false;
      return false;
    }

    if (this.pedido.provincia === undefined) {
      alert('Debes insertar una provincia');
      this.provinciaOk = false;
      return false;
    }
    if (/^[a-zA-Z ]{3,30}$/.test(this.pedido.provincia)) {
      this.provinciaOk = true;
    } else {
      alert(
        'Provincia debe tener de 3 a 30 caracteres, solo letras y espacios'
      );
      this.provinciaOk = false;
      return false;
    }

    if (this.pedido.telefono === undefined) {
      alert('Debes insertar un telefono');
      this.telefonoOk = false;
      return false;
    }
    if (/^[0-9 ]{9}$/.test(this.pedido.telefono)) {
      this.telefonoOk = true;
    } else {
      alert('Telefono debe tener 9 caracteres, solo numeros');
      this.telefonoOk = false;
      return false;
    }

    if (this.pedido.email === undefined) {
      alert('Debes insertar un email');
      this.emailOk = false;
      return false;
    }
    if (
      /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(
        this.pedido.email
      )
    ) {
      this.emailOk = true;
    } else {
      alert('email debe tener de 10 a 30 caracteres, incluyendo @ y punto');
      this.emailOk = false;
      return false;
    }
    if (this.pedido.tarjeta === undefined) {
      alert('Debes insertar una tarjeta');
      this.tarjetaOk = false;
      return false;
    }
    if (/^[0-9 ]{16}$/.test(this.pedido.tarjeta)) {
      this.tarjetaOk = true;
    } else {
      alert('Tarjeta debe tener 16 caracteres, solo numeros');
      this.tarjetaOk = false;
      return false;
    }
    return true;
  }
}
