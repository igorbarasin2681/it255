import {ModuleWithProviders} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';

import {HomeComponent} from './home.component';
import {ContactComponent} from './contact.component';
import {LoginComponent} from './login.component';

const appRoutes: Routes = [
	{
		path:'',
		component: HomeComponent
	},
	{
		path: 'contact',
		component: ContactComponent
	}, 
	{
		path: 'login',
		component: LoginComponent
	}

];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);