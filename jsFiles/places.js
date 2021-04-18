document.addEventListener("DOMContentLoaded", function (event) {

	const validateFormPlaces = (event) => {
		const name = document.getElementById('name');

        const description = document.getElementById('description');

		const link = document.getElementById('link');

		

			const submit_pl_btn = document.getElementById('submit_pl_btn');

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
		if (link.value == "") {
			alert('Please add a photo link!');
			link.focus();
			return false;
		}
		
		
	
		return true;
	}

	submit_pl_btn.addEventListener('click', validateFormPlaces);

});