document.addEventListener("DOMContentLoaded", function (event) {

	const validateFormMusic = (event) => {
		const name = document.getElementById('name');

        const description = document.getElementById('description');

		const foto = document.getElementById('foto');

		const link = document.getElementById('link');

		

		const submit_mu_bobtn = document.getElementById('submit_mu_bobtn');

		if (name.value == "") {
			alert('Please add a name!');
			name.focus();
			return false;
		}
        if (description.value == "") {
			alert('Please add a description!');
			description.focus();
			return false;
		}
		if (foto.value == "") {
			alert('Please add a photo!');
			foto.focus();
			return false;
		}
		if (link.value == "") {
			alert('Please add a playlist link!');
			link.focus();
			return false;
		}
		
		
		
	
		return true;
	}

	submit_mu_bobtn.addEventListener('click', validateFormMusic);

});