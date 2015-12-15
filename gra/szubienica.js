var max = 15;
var hasla = new Array(max);

hasla[0] = "Nie ma dymu bez ognia";
hasla[1] = "Asseco Resovia Rzeszów";
hasla[2] = "Pan tadeusz";
hasla[3] = "bez pracy nie ma kołaczy";
hasla[4] = "zaksa kędzierzyn koźle";
hasla[5] = "Kto mieczem wojuje od miecza ginie";
hasla[6] = "Legendary rover";
hasla[7] = "Adam małysz";
hasla[8] = "Wisława Szymborska";
hasla[9] = "mistrz i małgorzata";
hasla[10] = "Skrzydlate ręce";
hasla[11] = "Antonio Banderas";
hasla[12] = "Terminator";
hasla[13] = "Ogniem i mieczem";
hasla[14] = "Michael Jackson";

var podpowiedzi = new Array(max);

podpowiedzi[0]="Przysłowie";
podpowiedzi[1]="Sport";
podpowiedzi[2]="Literatura";
podpowiedzi[3]="Przysłowie";
podpowiedzi[4]="Sport";
podpowiedzi[5]="Przysłowie";
podpowiedzi[6]="Technika";
podpowiedzi[7]="Sport";
podpowiedzi[8]="Literatura";
podpowiedzi[9]="Literatura";
podpowiedzi[10] = "Muzyka";
podpowiedzi[11] ="Aktor/Aktorka";
podpowiedzi[12] ="Film";
podpowiedzi[13] ="Literatura";
podpowiedzi[14] = "Muzyka";

var losowa = Math.floor(Math.random() * max);

var podpowiedz = podpowiedzi[losowa];

var haslo = hasla[losowa];
haslo = haslo.toUpperCase();

var dlugosc = haslo.length;
var ile_skuc = 0;

var yes = new Audio("yes.wav");
var no = new Audio("no.wav");
//var victory = new Audio("fanfary.wav");

var haslo1 = "";

for(i=0; i<dlugosc; i++)
{
	if(haslo.charAt(i)==" ") haslo1 = haslo1 + " ";
	else haslo1 = haslo1 + "-";
	
}

function wypisz_haslo()
{
	document.getElementById("haslo").innerHTML = haslo1;
}

window.onload = start;

var litery = new Array(35);

litery[0] = "A";
litery[1] = "Ą";
litery[2] = "B";
litery[3] = "C";
litery[4] = "Ć";
litery[5] = "D";
litery[6] = "E";
litery[7] = "Ę";
litery[8] = "F";
litery[9] = "G";
litery[10] = "H";
litery[11] = "I";
litery[12] = "J";
litery[13] = "K";
litery[14] = "L";
litery[15] = "Ł";
litery[16] = "M";
litery[17] = "N";
litery[18] = "Ń";
litery[19] = "O";
litery[20] = "Ó";
litery[21] = "P";
litery[22] = "Q";
litery[23] = "R";
litery[24] = "S";
litery[25] = "Ś";
litery[26] = "T";
litery[27] = "U";
litery[28] = "V";
litery[29] = "W";
litery[30] = "X";
litery[31] = "Y";
litery[32] = "Z";
litery[33] = "Ż";
litery[34] = "Ź";

function start()
{
	var tresc = "";
	
	for(i=0; i<=34; i++)
	{
		var element = "lit"+i;
		tresc = tresc + '<div class="litera" onclick = "sprawdz('+i+')"id="'+element+'">'+litery[i]+'</div>';
		if (i==6) tresc = tresc + '<div style="clear:both";></div>';
	}
	
	document.getElementById("alfabet").innerHTML = tresc;
	document.getElementById("podpowiedz").innerHTML = 'Kategoria: ' + podpowiedz;
	
	wypisz_haslo();
}

String.prototype.ustawZnak = function(miejsce, znak)
{
	if(miejsce > this.length -1) return this.toString();
	else return this.substr(0, miejsce) + znak + this.substr(miejsce+1);
}

function sprawdz(nr)
{
	
	var trafiona = false;
	
	for(i=0; i<dlugosc; i++)
	{
		if(haslo.charAt(i)== litery[nr])
		{
			haslo1 = haslo1.ustawZnak(i,litery[nr]);
			trafiona = true;
		
		}
	}
	if (trafiona == true)
	{
		yes.play();
		var element = "lit"+nr;
		document.getElementById(element).style.background = "#003300";
		document.getElementById(element).style.color = "#00C000";
		document.getElementById(element).style.border = "3px solid #00C000";
		document.getElementById(element).style.cursor = "default";
		
		
		wypisz_haslo();
	}
	else
	{
		no.play();
		var element = "lit"+nr;
		document.getElementById(element).style.background = "#330000";
		document.getElementById(element).style.color = "#C00000";
		document.getElementById(element).style.cursor = "default";
		document.getElementById(element).style.border = "3px solid #C00000";
		document.getElementById(element).setAttribute("onclick",";");
		
		//skucia
		ile_skuc++;
		var obraz = "img/s"+ ile_skuc +".jpg";
		document.getElementById("obrazek").innerHTML = '<img src='+obraz+'>';
		
	}
	
	//wygrana
	if (haslo == haslo1) 
	{
		//victory.play();
		document.getElementById("alfabet").innerHTML = '<span style="color: #00C000; font-weight: bold; font-size:30px;">WYGRANA!! <br> Podano prawidłowe hasło: <br> </span> <br> '
		+ haslo + '<br><br> <span class="reset" onclick="location.reload()"> ZAGRAJ PONOWNIE!!!!</span>';
		
	}
	
	//przegrana
	if (ile_skuc==9)
	{
		document.getElementById("alfabet").innerHTML = '<span style="color: #C00000; font-weight: bold; font-size:40px;">PORAŻKA!!! <br> Prawidłowe hasło to:  <br> </span> <br>'
		+ haslo+ '<br><br> <span class="reset" onclick="location.reload()"> ZAGRAJ PONOWNIE!!!! </span>';
	}
}