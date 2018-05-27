import { Component, Directive } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import {Router} from '@angular/router';
import 'rxjs/Rx';

@Component({
  selector: 'rooms',
  templateUrl: './rooms.component.html'
})
export class RoomsComponent {
	
	private data: Object[];
	
	constructor(private http: Http) {
		http.get('http://localhost/it255/IT255-DZ10-IgorBarasin2681/src/phpwebservices/getrooms.php')
			.map(res => res.json()).share()
			.subscribe(data => {
				this.data = data;
			},
			err => {
				console.log(err.text()); 
			});
	}
}

