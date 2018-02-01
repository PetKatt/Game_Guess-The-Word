var slogan = "Bez pracy nie ma kołaczy";
slogan = slogan.toUpperCase();

var length = slogan.length;
var failures = 0;

var yes = new Audio("yes.wav");
var no = new Audio("no.wav");

var slogan1 = "";

//changing 'slogan' to 'slogan1' in order to hide the password
//zamiast slogan[i] trzeba uzyc slogan.charAt(i) --> w JavaScript NIE MOŻNA traktować łańcuchów String jako tablice (Array) z indeksem ;/
for (i=0; i<length; i++) {
	if (slogan.charAt(i) == " ") {slogan1 += " ";}
	else {slogan1 += "-";}
}
	function show_slogan() {
		document.getElementById("board").innerHTML = slogan1;
	}
//THE START IS HERE!V!	
//alias for event '.onload' in Object 'window'
window.onload = start;

var letters = new Array(35);
letters[0] = "A";
letters[1] = "Ą";
letters[2] = "B";
letters[3] = "C";
letters[4] = "Ć";
letters[5] = "D";
letters[6] = "E";
letters[7] = "Ę";
letters[8] = "F";
letters[9] = "G";
letters[10] = "H";
letters[11] = "I";
letters[12] = "J";
letters[13] = "K";
letters[14] = "L";
letters[15] = "Ł";
letters[16] = "M";
letters[17] = "N";
letters[18] = "Ń";
letters[19] = "O";
letters[20] = "Ó";
letters[21] = "P";
letters[22] = "Q";
letters[23] = "R";
letters[24] = "S";
letters[25] = "Ś";
letters[26] = "T";
letters[27] = "U";
letters[28] = "V";
letters[29] = "W";
letters[30] = "X";
letters[31] = "Y";
letters[32] = "Z";
letters[33] = "Ż";
letters[34] = "Ź";

	function start() {
		
		var inside_div = "";
		
		for (i=0; i<35; i++) {
			var element = "lit" + i;
			inside_div += '<div class="letter" onclick="check('+i+')" id="'+element+'">'+letters[i]+'</div>';
			if ((i+1) % 7 == 0) inside_div += '<div style="clear: both;"></div>';
		}
		
		document.getElementById("alphabet").innerHTML = inside_div;
		
		show_slogan();
	}	

//defining own new method for String class --> new method in order to change characters of the hidden slogan	
String.prototype.setChar = function(place, character) {
	if (place > this.length-1) {return this.toString();}
	else {return this.substr(0, place) + character + this.substr(place+1);}
}	

//check if the choosen letter matches the letter in the given slogan
	function check(nr) {
		var hit = false;
		
		for (i=0; i<length; i++) {
			if (slogan.charAt(i) == letters[nr]) {
				slogan1 = slogan1.setChar(i, letters[nr]);
				hit = true;
			}
			
		}
		if (hit == true) {
			yes.play();
			var element = "lit" + nr;
			document.getElementById(element).style.backgroundColor = "#003300";
			document.getElementById(element).style.color = "#00C000";
			document.getElementById(element).style.border = "3px solid #00C000";
			document.getElementById(element).style.cursor = "default";
			show_slogan();
		}
		else {
			no.play();
			var element = "lit" + nr;
			document.getElementById(element).style.backgroundColor = "#330000";
			document.getElementById(element).style.color = "#C00000";
			document.getElementById(element).style.border = "3px solid #C00000";
			document.getElementById(element).style.cursor = "default";
			document.getElementById(element).setAttribute("onclick",";");
			
			//how many failures
			failures++;
			var picture = "img/s" + failures + ".jpg";
			document.getElementById("gallows").innerHTML = '<img src="'+picture+'" alt="" />';
		}
		
		//win
		if (slogan == slogan1) {
			document.getElementById("alphabet").innerHTML = "Winner! Correct slogan: "+slogan+'<br /><br /><span class="reset" onclick="location.reload()">Try again?</span>';
		}
		
		//loss
		if (failures >= 9) {
			document.getElementById("alphabet").innerHTML = "Losser! Correct slogan: "+slogan+'<br /><br /><span class="reset" onclick="location.reload()">Try again?</span>';
		}
	}
	
	
	
	
	
	
	
	