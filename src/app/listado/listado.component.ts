import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Cd } from '../models/cd';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css'],
})
export class ListadoComponent {
  cds: Cd[] = {} as Cd[];
  cdsFiltrados: Cd[] = {} as Cd[];
  currentPage = 1;
  itemsPerPage = 9;
  totalPages: number;
  constructor(private miServicio: MiServicioService, private router: Router) {
    this.totalPages = 0;
  }
  ngOnInit(): void {
    this.miServicio.obtenerCds().subscribe((res) => {
      this.cds = res;
      this.cdsFiltrados = res;
      this.totalPages = Math.ceil(this.cds.length / this.itemsPerPage);
    });
  }
  filtrarCds() {
    const buscador = (<HTMLInputElement>(
      document.getElementById('buscador_titulo')
    )).value;
    this.cdsFiltrados = this.cds.filter((c) =>
      c.titulo?.toLowerCase().includes(buscador.toLowerCase())
    );
    this.currentPage = 1;
    this.totalPages = Math.ceil(this.cdsFiltrados.length / this.itemsPerPage);
  }
  limpiarFiltro() {
    this.cdsFiltrados = this.cds;
    (<HTMLInputElement>document.getElementById('buscador_titulo')).value = '';
    this.currentPage = 1;
    this.totalPages = Math.ceil(this.cdsFiltrados.length / this.itemsPerPage);
  }
  verDetalles(c: Cd) {
    this.router.navigate(['detalles', c.id]);
  }
  nextPage() {
    this.currentPage++;
  }

  previousPage() {
    this.currentPage--;
  }
}
