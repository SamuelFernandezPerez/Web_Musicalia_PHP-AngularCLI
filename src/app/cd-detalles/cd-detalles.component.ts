import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Cd } from '../models/cd';

@Component({
  selector: 'app-cd-detalles',
  templateUrl: './cd-detalles.component.html',
  styleUrls: ['./cd-detalles.component.css'],
})
export class CdDetallesComponent {
  id_cd: number = -1;
  cd: Cd = {} as Cd;
  mensaje: String = '';
  cantidad: number = 1;
  constructor(
    private miServicio: MiServicioService,
    private activatedRoute: ActivatedRoute
  ) {}
  ngOnInit(): void {
    this.id_cd = Number(this.activatedRoute.snapshot.paramMap.get('id'));
    this.mensaje = 'mostrar detalles del registro de id: ' + this.cd;
    this.miServicio
      .obtenerCdPorId(this.id_cd)
      .subscribe((res) => (this.cd = res));
  }
  agregar_cd_al_carrito(): void {
    this.miServicio
      .agregarAlCarrito(this.id_cd, this.cantidad)
      .subscribe((res) =>
        res == 'ok'
          ? alert('cd agregado al carrito')
          : alert('no se pudo agregar el cd al carrito')
      );
  }
}
