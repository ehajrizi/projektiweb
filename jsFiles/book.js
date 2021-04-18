document.addEventListener("DOMContentLoaded", function (event) {

	const validateFormBooks = (event) => {
		const titulli = document.getElementById('titulli');

		const foto = document.getElementById('foto');

		const autori = document.getElementById('autori');

		const pershkrimi = document.getElementById('pershkrimi');

		const isbn = document.getElementById('isbn');

		const pagenr = document.getElementById('pagenr');

		const submitbobtn = document.getElementById('submitbobtn');

		if (titulli.value == "") {
			alert('Please add a title!');
			titulli.focus();
			return false;
		}
		if (foto.value == "") {
			alert('Please add a cover!');
			foto.focus();
			return false;
		}
		if (autori.value == "") {
			alert('Please add an author!');
			autori.focus();
			return false;
		}
		if (pershkrimi.value == "") {
			alert('Please add a description!');
			pershkrimi.focus();
			return false;
		}
		if (isbn.value == "") {
			alert('Please add an ISBN!');
			isbn.focus();
			return false;
		}
		if (pagenr.value == "") {
			alert('Please add the number of pages!');
			pagenr.focus();
			return false;
		}

		return true;
	}

	submitbobtn.addEventListener('click', validateFormBooks);

});