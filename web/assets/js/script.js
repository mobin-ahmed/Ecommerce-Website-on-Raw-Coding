// javascript for the slide:
var a=1;
function slide(){
	if(a==1){
		document.getElementById('simg1').style.display='block';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='none';
		a=2;
	}
	else if(a==2){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='block';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='none';
		a=3;
	}
	else if(a==3){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='block';
		document.getElementById('simg4').style.display='none';
		a=4;
	}
	else if(a==4){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='block';
		a=1;
	}

	setTimeout(function(){
		slide();
	},2000)
}
slide();


// javacript for popup window:
function popup(){
	document.getElementById('log').style.display='block';
}
function popout(){
	document.getElementById('log').style.display='none';
}

//javascript for index images:
function imgst(a){
	a.style='display: none;';
}
function imgback(a){
	a.style.display='block';
}

//javascript for count:
var s=1,v;
function m(){
	clearTimeout(v);
}
function count(){
	
	v=setTimeout(function(){
		document.getElementById('c1').innerHTML=s;
		if(s%2!=0){
			document.getElementById('c1').style.color='red';
		}
		else{
			document.getElementById('c1').style.color='white';
		}
		if(s>=10){
			m();
		}
		s++;
		count();
	},1000)
	
}
count();


// // Check email validation:
// function checkEmail(){
// 	var pattern=new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
// 	if(pattern.tes)
// }



// check log validation:
function logvalidation(){
	var password=document.getElementById("ps").value;
	var email=document.getElementById("email").value;
	var username=document.getElementById("username").value;
	
	if(password=="" || email=="" || password==""){
		document.getElementById("pserr").innerHTML="may error occures in any section";
		return false;
	}
	else{
		true;
	}



}


// check reg validation:
function regvalidation(){
	var password=document.getElementById("ps").value;
	var email=document.getElementById("email").value;
	var fn=document.getElementById("firstName").value;
	var ln=document.getElementById("lastName").value;
	var mbl=document.getElementById("mbl").value;
	var cps=document.getElementById("cps").value;
	
	if(password=="" || email=="" || password=="" || fn=="" || ln=="" || mbl=="" || cps==""){
		document.getElementById("mblerr").innerHTML="may error occures in any section";
		return false;
	}
	else{
		true;
	}



}



// document.getElementById("ps").blur(function(){
// 	checkPassword();
// });

// document.getElementById("ps").keyup(function(){
// 	checkPassword();
// });