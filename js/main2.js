document.getElementsByClassName("sunce")[0].style.fontSize = "14px";
document.getElementsByClassName("sunce")[2].style.fontSize = "14px";
function sunset(){

	var i;
	var x = document.body;
	var y = document.getElementsByClassName("srjez")[0];
	var z = document.getElementsByClassName("enjez")[0];
	var provera = document.getElementsByClassName("language")[0];
	if(provera.style.color === "white"){

		proverica1();


	}else{
		proverica2();

	}

}

function proverica1(){
	document.getElementsByClassName("sunce")[0].style.display = "block";
	document.getElementsByClassName("sunce")[1].style.display = "none";
	document.getElementsByClassName("sunce")[2].style.display = "block";
	document.getElementsByClassName("sunce")[3].style.display = "none";
	document.getElementsByClassName("check")[0].checked = false;
	document.getElementsByClassName("check")[1].checked = false;

	document.body.style.backgroundColor = "white";
	for (i = 0; i < document.getElementsByClassName("black-logo").length; i++) {
		document.getElementsByClassName("black-logo")[i].style.display = "none";
	}
	for (i = 0; i < document.getElementsByClassName("white-logo").length; i++) {
		document.getElementsByClassName("white-logo")[i].style.display = "block";
	}

	var i;
	for (i = 0; i < document.getElementsByClassName("nava").length; i++) {
		document.getElementsByClassName("nava")[i].style.color = "black";
	}

	for (i = 0; i < document.getElementsByClassName("language").length; i++) {
		document.getElementsByClassName("language")[i].style.color = "black";
	}

		document.getElementsByClassName("srjez")[0].style.color = "black";
		document.getElementsByClassName("enjez")[0].style.color = "black";






	document.getElementsByTagName("FOOTER")[0].style.backgroundColor = "#f9f9f9";

	for (i = 0; i < document.getElementsByClassName("footer-naslov").length; i++) {
		document.getElementsByClassName("footer-naslov")[i].style.color = "black";
	}

	for (i = 0; i < document.getElementsByClassName("ispod-logoa").length; i++) {
		document.getElementsByClassName("ispod-logoa")[i].style.color = "black";
	}
	for (i = 0; i < document.getElementsByClassName("stranicea").length; i++) {
		document.getElementsByClassName("stranicea")[i].style.color = "black";
	}

	for (i = 0; i < document.getElementsByClassName("fut-inp").length; i++) {
		document.getElementsByClassName("fut-inp")[i].style.backgroundColor = "white";
		document.getElementsByClassName("fut-inp")[i].style.color = "black";
	}

	document.getElementsByTagName("HEADER")[0].style.backgroundColor = "white";

	document.getElementsByClassName("drugi-header")[0].style.backgroundColor = "white";

document.getElementsByClassName("drugi-header")[0].style.boxShadow = "0px 0px 20px #e2e2e2";

	document.getElementById("myLinks").style.backgroundColor = "rgb(256, 256, 256)";

	for (i = 0; i < document.getElementsByClassName("prt-h").length; i++) {
		document.getElementsByClassName("prt-h")[i].style.color = "black";
	}
	for (i = 0; i < document.getElementsByClassName("prt-p").length; i++) {
		document.getElementsByClassName("prt-p")[i].style.color = "black";
	}
	for (i = 0; i < document.getElementsByClassName("dugme-preview").length; i++) {
		document.getElementsByClassName("dugme-preview")[i].style.boxShadow = "5px 5px 15px #c2c2c2";
	}
	document.getElementById("prvilap").style.display = "block";
	document.getElementById("drugilap").style.display = "none";

	localStorage.removeItem('check');
	localStorage.setItem('check', false);
}

function proverica2(){
	document.getElementsByClassName("sunce")[1].style.display = "block";
	document.getElementsByClassName("sunce")[0].style.display = "none";
	document.getElementsByClassName("sunce")[3].style.display = "block";
	document.getElementsByClassName("sunce")[2].style.display = "none";
	document.getElementsByClassName("check")[0].checked = true;
	document.getElementsByClassName("check")[1].checked = true;

	document.body.style.backgroundColor = "#111111";
	for (i = 0; i < document.getElementsByClassName("black-logo").length; i++) {
		document.getElementsByClassName("black-logo")[i].style.display = "block";
	}
	for (i = 0; i < document.getElementsByClassName("white-logo").length; i++) {
		document.getElementsByClassName("white-logo")[i].style.display = "none";
	}

	for (i = 0; i < document.getElementsByClassName("nava").length; i++) {
		document.getElementsByClassName("nava")[i].style.color = "white";
	}

	for (i = 0; i < document.getElementsByClassName("language").length; i++) {
		document.getElementsByClassName("language")[i].style.color = "white";
	}

		document.getElementsByClassName("srjez")[0].style.color = "white";
		document.getElementsByClassName("enjez")[0].style.color = "white";








	document.getElementsByTagName("FOOTER")[0].style.backgroundColor = "#151515";

	for (i = 0; i < document.getElementsByClassName("footer-naslov").length; i++) {
		document.getElementsByClassName("footer-naslov")[i].style.color = "#c2c2c2";
	}

	for (i = 0; i < document.getElementsByClassName("ispod-logoa").length; i++) {
		document.getElementsByClassName("ispod-logoa")[i].style.color = "#c2c2c2";
	}
	for (i = 0; i < document.getElementsByClassName("stranicea").length; i++) {
		document.getElementsByClassName("stranicea")[i].style.color = "#c2c2c2";
	}

	for (i = 0; i < document.getElementsByClassName("fut-inp").length; i++) {
		document.getElementsByClassName("fut-inp")[i].style.backgroundColor = "#1c1c1c";
		document.getElementsByClassName("fut-inp")[i].style.color = "#e2e2e2";
	}

	document.getElementsByTagName("HEADER")[0].style.backgroundColor = "#111111";

	document.getElementsByClassName("drugi-header")[0].style.backgroundColor = "#111111";

	document.getElementsByClassName("drugi-header")[0].style.boxShadow = "0px 0px 10px #494949";

	document.getElementById("myLinks").style.backgroundColor = "#111111";

	for (i = 0; i < document.getElementsByClassName("prt-h").length; i++) {
		document.getElementsByClassName("prt-h")[i].style.color = "#f2f2f2";
	}
	for (i = 0; i < document.getElementsByClassName("prt-p").length; i++) {
		document.getElementsByClassName("prt-p")[i].style.color = "#f2f2f2";
	}
	for (i = 0; i < document.getElementsByClassName("dugme-preview").length; i++) {
		document.getElementsByClassName("dugme-preview")[i].style.boxShadow = "5px 5px 15px #313131";
	}
	document.getElementById("prvilap").style.display = "none";
	document.getElementById("drugilap").style.display = "block";


	localStorage.setItem('check', true);
}

var srp = document.getElementsByClassName("srjez");
var eng = document.getElementsByClassName("enjez");
function english(){
	var i;
	for( i = 0; i < srp.length; i++){
		srp[i].style.borderBottom = "none";
		srp[i].style.fontWeight = "normal";
	}
	for( i = 0; i < eng.length; i++){
		eng[i].style.borderBottom = "2px solid orange";
		eng[i].style.fontWeight = "bold";
	}
		var i;
		for (i = 0; i < document.getElementsByClassName("srp").length; i++) {
			document.getElementsByClassName("srp")[i].style.display = "none";
		}
		for (i = 0; i < document.getElementsByClassName("eng").length; i++) {
			document.getElementsByClassName("eng")[i].style.display = "block";
		}

		localStorage.setItem('eng', true);

}
function srpski(){
		var i;
		for( i = 0; i < eng.length; i++){
			eng[i].style.borderBottom = "none";
			eng[i].style.fontWeight = "normal";
		}
		for( i = 0; i < srp.length; i++){
			srp[i].style.borderBottom = "2px solid orange";
			srp[i].style.fontWeight = "bold";
		}

		var i;
		for (i = 0; i < document.getElementsByClassName("eng").length; i++) {
			document.getElementsByClassName("eng")[i].style.display = "none";
		}
		for (i = 0; i < document.getElementsByClassName("srp").length; i++) {
			document.getElementsByClassName("srp")[i].style.display = "block";
		}

		localStorage.removeItem('eng');
		localStorage.setItem('eng', false);
}

//language session start
$(document).ready( function () {
	language();
	sunfunction();
  });

function language(){
		if(localStorage.getItem('eng') == 'true'){
			english();
		}else{
			srpski();
		}

}
function sunfunction(){
		if(localStorage.getItem('check') == 'true'){
			proverica2();
		}else{
			proverica1();
		}

}
//language session end



// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementsByClassName("drugi-header")[0].style.top = "0";
  } else {
    document.getElementsByClassName("drugi-header")[0].style.top = "-125px";
  }
}




$(document).ready(function(){
	$('.nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});



function hamfunkcija() {
    document.getElementsByTagName("header");
    var e = document.getElementById("myLinks");
    "block" === e.style.display ? ((e.style.display = "none"), (document.body.style.overflow = "auto")) : ((e.style.display = "block"), (document.body.style.overflow = "hidden"));
}
function openNav() {
    "0%" === document.getElementById("myLinks").style.width || "" === document.getElementById("myLinks").style.width
        ? ((document.getElementById("myLinks").style.width = "100%"), (document.body.style.overflow = "hidden"))
        : ((document.getElementById("myLinks").style.width = "0%"), (document.body.style.overflow = "auto"));
}
function hamburgerX(e) {
    e.classList.toggle("change");
}







// When the user scrolls down 20px from the top of the document, slide down the navbar


function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementsByClassName("drugi-header")[0].style.top = "0";
  } else {
    document.getElementsByClassName("drugi-header")[0].style.top = "-125px";
  }
}


	document.getElementsByClassName("dugme-preview")[0].style.border = "1.7px solid orange";
	document.getElementsByClassName("sajt-1")[0].style.display="block";
	document.getElementsByClassName("sajt-2")[0].style.display="block";
	document.getElementsByClassName("sajt-3")[0].style.display="block";
	document.getElementsByClassName("sajt-4")[0].style.display="block";
function prvisajt(f){
	let i;
	for (i=0; i < document.getElementsByClassName("dugme-preview").length; i++){
		document.getElementsByClassName("dugme-preview")[i].style.border = "none";
		document.getElementsByClassName("sajt-1")[i].style.display="none";
		document.getElementsByClassName("sajt-2")[i].style.display="none";
		document.getElementsByClassName("sajt-3")[i].style.display="none";
		document.getElementsByClassName("sajt-4")[i].style.display="none";
	}
	document.getElementsByClassName("dugme-preview")[f].style.border = "1.7px solid orange";
	document.getElementsByClassName("sajt-1")[f].style.display="block";
	document.getElementsByClassName("sajt-2")[f].style.display="block";
	document.getElementsByClassName("sajt-3")[f].style.display="block";
	document.getElementsByClassName("sajt-4")[f].style.display="block";
}
