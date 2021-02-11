document.addEventListener("DOMContentLoaded",function(event){
	
    const validateFormCU = (event) => {
		const fname = document.getElementById('fname');
		
		const lname = document.getElementById('lname');
		
		const subject = document.getElementById('subject');
        
        const submitbtn = document.getElementById('submitbtn');
		
		if(fname.value == ""){
			alert('Please write your name!');
			fname.focus();
			return false;
		}
		if(lname.value == ""){
			alert('Please write your last name!');
			lname.focus();
			return false;
		}
		if(subject.value == ""){
			alert('Please write a subject!');
			subject.focus();
			return false;
		}
		
		return true;
	}
	
	submitbtn.addEventListener('click',validateFormCU);
	
});