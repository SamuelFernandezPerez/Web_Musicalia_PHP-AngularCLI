import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CdDetallesComponent } from './cd-detalles.component';

describe('CdDetallesComponent', () => {
  let component: CdDetallesComponent;
  let fixture: ComponentFixture<CdDetallesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CdDetallesComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CdDetallesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
