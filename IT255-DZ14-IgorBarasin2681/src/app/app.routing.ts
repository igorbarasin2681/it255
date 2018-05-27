import {ModuleWithProviders} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';

import {HomeComponent} from './home/home.component';
import {ContactComponent} from './contact/contact.component';
import {LoginComponent} from './login/login.component';
import {RoomsComponent} from './rooms/rooms.component';
import {RoomComponent} from './room/room.component';

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
	}, 
	{
		path: 'rooms',
		component: RoomsComponent
	},
	{
		path: 'room/:id', 
		component: RoomComponent
	}

];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);