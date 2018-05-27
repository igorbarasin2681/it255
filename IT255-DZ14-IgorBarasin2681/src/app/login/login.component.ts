import { Component, Directive } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/Rx';
import {Router} from '@angular/router';

@Component({
  selector: 'login',
  templateUrl: './login.component.html'
})
export class LoginComponent {
	
	http: Http;
	router: Router;
	
	registerForm = new FormGroup({
		username: new FormControl(),
		password: new FormControl(),
		firstName: new FormControl(),
		lastName: new FormControl(),
		emailadd: new FormControl()
	});
	
	loginForm = new FormGroup({
		usernameLogin: new FormControl(),
		passwordLogin: new FormControl()
	});
	
	constructor(http: Http, router: Router) {
		this.http = http;
		this.router = router;
		if (localStorage.getItem('token') != null) {
			this.router.navigate(['./']);
		}
	}
	
	onRegister(): void {
		let data =
		"firstName="+this.registerForm.value.firstName+"&&lastName="+this.registerForm.value.lastName+
		"&&emailadd="+this.registerForm.value.emailadd+
		"&&username="+this.registerForm.value.username+"&&password="+this.registerForm.value.password;
		
		let headers = new Headers();
		headers.append('Content-Type', 'application/x-www-form-urlencoded');	
		this.http.post('http://localhost/it255/IT255-DZ14-IgorBarasin2681/src/phpwebservices/registerservice.php',data,
		{headers:headers})
		.map(res => res)
		.subscribe( data => {
			let obj = JSON.parse(data["_body"]);
			localStorage.setItem('token', obj.token);
			this.router.navigate(['./']);
		},
		err => {
			let obj = JSON.parse(err._body);
			let element = <HTMLElement> document.getElementById("regAlert");
			element.style.display = "block";
			element.innerHTML =
			obj.error.split("\\r\\n").join("<br/>").split("\"").join("");
		}
		);
	}
	
	onLogin(): void {
		let data = "username="+this.loginForm.value.usernameLogin+"&&password="+this.loginForm.value.passwordLogin;
		let headers = new Headers();
		headers.append('Content-Type', 'application/x-www-form-urlencoded');
		this.http.post('http://localhost/it255/IT255-DZ14-IgorBarasin2681/src/phpwebservices/loginservice.php',data,
		{headers:headers})
		.map(res => res)
		.subscribe( data => {
			let obj = JSON.parse(data["_body"]);
			localStorage.setItem('token', obj.token);
			this.router.navigate(['./']);
		},
		err => {
			let obj = JSON.parse(err._body);
			let element = <HTMLElement>document.getElementsByClassName("alert")[0];
			element.style.display = "block";
			element.innerHTML =
			obj.error.split("\\r\\n").join("<br/>").split("\"").join("");
		}
		);
		
	}

}
