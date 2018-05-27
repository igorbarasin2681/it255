import { Component, Directive } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { Http, Response, Headers } from '@angular/http';
import {Router} from '@angular/router';
import 'rxjs/Rx';

@Component({
  selector: 'rooms',
  templateUrl: './rooms.component.html'
})
export class RoomsComponent {
		private data: Object[];
		http: Http;
		router: Router;
		postResponse: any;

		addRoomForm = new FormGroup({
			roomname: new FormControl(),
			tv: new FormControl(),
			beds: new FormControl()
		});
	
	constructor(http: Http, router: Router) {
		this.http = http;
		this.router = router;
		if (localStorage.getItem('token') != null) {
			this.router.navigate(['./']);
		}
		
		this.http.get('http://localhost/it255/IT255-DZ11-IgorBarasin2681/src/phpwebservices/getrooms.php') 
			.map(res => res.json()).share()
			.subscribe(data => {

				this.data = data.rooms;

			},
			err => {
				console.log(err.text()); 
			});
	}

	onAddRoom(): void {
		var data ="roomName="+this.addRoomForm.value.roomname+"&&hasTV="+this.addRoomForm.value.tv+"&&beds="+this.addRoomForm.value.beds;
		var headers = new Headers();
		headers.append('Content-Type', 'application/x-www-form-urlencoded');
		this.http.post('http://localhost/it255/IT255-DZ11-IgorBarasin2681/src/phpwebservices/addroomservice.php',data,
		{headers:headers})
		.map(res => res)
		.subscribe( 
			data => this.postResponse = data,
			err => alert(JSON.stringify(err)),
			() => {
				if(this.postResponse["_body"].indexOf("error") === -1){
					this.router.navigate(['./']);
				}
				else{
					alert("ERROR!");
				}
			}
		);
	}
}

