import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import { Location } from '@angular/common';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'Angular';
  public formLogin!: FormGroup;

  constructor(private formBuilder: FormBuilder,
              private locatioon:Location) {
  }

  ngOnInit(): void {
    this.formLogin = this.formBuilder.group({
      validarEmail: ['',[Validators.required, Validators.email]],
    });
  }

  send(): any{
    console.log(this.formLogin.value);
  }

  goBack():void{
    this.locatioon.back();
  }

  clickAddvalidacion(){
    alert('Formulario enviado con exito!!');
  }
}
