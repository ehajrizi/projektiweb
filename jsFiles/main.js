const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('gIcontainer');

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});

document.addEventListener("DOMContentLoaded",function(event){
	
	const validateForm = (event) => {
		const name = document.getElementById('name');
		
		const username = document.getElementById('username');
		
		const email = document.getElementById('email');
		
		const pass = document.getElementById('password');
		
		const RegBtn = document.getElementById('RegBtn');
		
		if(name.value == ""){
			alert('Please write your name!');
			name.focus();
			return false;
		}
		if(username.value == ""){
			alert('Please write your username!');
			username.focus();
			return false;
		}
		if(email.value == ""){
			alert('Please write your email!');
			email.focus();
			return false;
		}
		if(pass.value.length < 6){
			alert('Your Password must have at least 6 characters!');
			pass.focus();
			return false;
		}
		
		return true;
	}
	
	RegBtn.addEventListener('click',validateForm);
	
	const validForm = (event) => {
		
		const username1 = document.getElementById('username1');

		const pass1 = document.getElementById('password1');
		
		const LogInBtn = document.getElementById('LogInBtn');

		if(username1.value == ""){
			alert('Please write your username!');
			username1.focus();
			return false;
		}
		if(pass1.value.length < 6){
			alert('Your Password must have at least 6 characters!');
			pass1.focus();
			return false;
		}
		
		return true;
	}
	
    LogInBtn.addEventListener('click',validForm);
});

