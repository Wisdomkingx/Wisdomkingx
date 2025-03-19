function kings(form) {
	let msg =document.getElementById("msg");
	console.log(msg);
	let mt = document.getElementById('mat');
	console.log(mt);

	if(form.matno.value.trim() ==""){	
		alert("matriculation field cannot be empty");
		mt.style.border="1px solid red";
		msg.innerHTML="please enter a matric number";
		msg.style.color="red";
	   //form.matno.focus();
	   
	   return false;
	   }
	   let re=/^[\w]+$/;
if(!re.test(form.matno.value)){
   alert("invalid character found in the matric number field");
   mt.style.border="1px solid red";
   return false;
}
if(form.depart.value.trim() ==""){
	alert("department field cannot be empty");
	dpp.style.border="1px solid red";
	msge.innerHTML="please enter a department";
	msge.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.depart.value)){
	alert("invalid character found in the department field");
	dpp.style.border="1px solid red";
	return false;
 }
 if(form.fname.value.trim() ==""){
	alert("firstName field cannot be empty");
	fan.style.border="1px solid red";
	msgg.innerHTML="please enter your firstname";
	msgg.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.fname.value)){
	alert("invalid character found in the firstname field");
	fan.style.border="1px solid red";
	return false;
 }
 if(form.lname.value.trim() ==""){
	alert("lastName field cannot be empty");
	lan.style.border="1px solid red";
	msgee.innerHTML="please enter your lastname";
	msgee.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.lname.value)){
	alert("invalid character found in the lastname field");
	lan.style.border="1px solid red";
	return false;
 }
 if(form.uname.value.trim() ==""){
	alert("userName field cannot be empty");
	una.style.border="1px solid red";
	msggs.innerHTML="please enter a username";
	msggs.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.uname.value)){
	alert("invalid character found in the username field");
	una.style.border="1px solid red";
	return false;
 }
 if(form.pwd.value.trim() ==""){
	alert("password field cannot be empty");
	pad.style.border="1px solid red";
	msgge.innerHTML="please enter a password";
	msgge.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.pwd.value)){
	alert("invalid character found in the password field");
	msgge.style.border="1px solid red";
	return false;
 }

 if(form.dad.value.trim() ==""){
	alert("date field cannot be empty");
	dad.style.border="1px solid red";
	msggss.innerHTML="please enter accurate Birth date";
	msggss.style.color="red";
	//form.fname.focus();
   
   return false;
   }

   if(form.bob.value.trim() ==""){
	alert("gender field cannot be empty");
	bob.style.border="1px solid red";
	kut.innerHTML="please select a gender";
	kut.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.bob.value)){
	alert("invalid character found in the gender field");
	bob.style.border="1px solid red";
	return false;
   }

   if(form.adas.value.trim() ==""){
	alert("address field cannot be empty");
	adas.style.border="1px solid red";
	msgga.innerHTML="please type in your address";
	msgga.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.adas.value)){
	alert("invalid character found in the address field");
	adas.style.border="1px solid red";
	return false;

   }
   if(!re.test(form.selc.value)){
	alert("invalid character found in the nationality field");
	selc.style.border="1px solid red";
	msk.innerHTML="please select your country of origin";
	msk.style.color="red";
	return false;
   }
   if(!re.test(form.selt.value)){
	alert("invalid character found in the state of origin field");
	selt.style.border="1px solid red";
	mks.innerHTML="please select your state of origin";
	mks.style.color="red";
	return false;
   }
   if(!re.test(form.telt.value)){
	alert("invalid character found in the city field");
	telt.style.border="1px solid red";
	myk.innerHTML="please select your current city";
	myk.style.color="red";
	return false;
   }
   if(!re.test(form.tee.value)){
	alert("invalid character found in the LGA field");
	tee.style.border="1px solid red";
	mky.innerHTML="please select your LGA";
	mky.style.color="red";
	return false;
   }
   if(form.pone.value.trim() ==""){
	alert("phone field cannot be empty");
	pone.style.border="1px solid red";
	muy.innerHTML="please enter your phone number";
	muy.style.color="red";
	//form.fname.focus();
   
   return false;
   }
   if(!re.test(form.pone.value)){
	alert("invalid character found in the phone field");
	pone.style.border="1px solid red";
	return false;
 }
 
return true;
   }