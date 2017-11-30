import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { HomeComponent } from './home.component';
import { ContactComponent } from './contact.component';
import { LoginComponent } from './login.component';
import {routing} from './app.routing';

@NgModule({
  declarations: [
    AppComponent, HomeComponent, ContactComponent, LoginComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
	routing
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
