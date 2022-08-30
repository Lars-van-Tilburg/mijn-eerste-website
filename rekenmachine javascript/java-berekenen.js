function plus()
{
	var wx = parseFloat(document.getElementById('X').value);
	var wy = parseFloat(document.getElementById('Y').value);
	var uit = wx + wy;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
}

function keer()
{
	var wx = parseFloat(document.getElementById('X').value);
	var wy = parseFloat(document.getElementById('Y').value);
	var uit = wx * wy;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
}

function min()
{
	var wx = parseFloat(document.getElementById('X').value);
	var wy = parseFloat(document.getElementById('Y').value);
	var uit = wx - wy;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
}

function delen()
{
	var wx = parseFloat(document.getElementById('X').value);
	var wy = parseFloat(document.getElementById('Y').value);
	if (wy == 0)
	{
		document.getElementById('uitkomst').innerHTML='u kunt niet delen door 0';
	}
	
	else {
	var uit = wx / wy;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
	}
}

function kwadraat()
{
	var wx = parseFloat(document.getElementById('X').value);
	var uit = wx * wx;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
}

function wortel()
{
	var wx = parseFloat(document.getElementById('X').value);
	if (wx < 0) 
	{
		document.getElementById('uitkomst').innerHTML='de wortel onder 0 is niet mogelijk';
	}
	else
	{
	var uit = Math.sqrt(wx) ;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
	}
}

function xY()
{
	var wx = parseFloat(document.getElementById('X').value);
	var wy = parseFloat(document.getElementById('Y').value);
	var uit = wx **wy;
	document.getElementById('uitkomst').innerHTML='Uitkomst is: ' + uit;
}

function Tx()
{
	var wx = parseFloat(document.getElementById('X').value);
	var tafel = wx;
	for( i = 1 ;  i	<= 10; i++) {
		var uit = tafel*i;
	document.getElementById('uitkomst').innerHTML+='Uitkomst is: ' + uit +'<br>';
	}
}

function wis()
{
c
}

function maakEvents()
{
   document.getElementById("optellen").onclick = plus;
   document.getElementById("vermenigvuldigen").onclick = keer;
   document.getElementById("min").onclick = min;
   document.getElementById("delen").onclick = delen;
   document.getElementById("kwadraat").onclick = kwadraat;
   document.getElementById("wortel").onclick =wortel;
   document.getElementById("xY").onclick = xY;		      	   
   document.getElementById("Tx").onclick = Tx;
   document.getElementById("wis").onclick = wis;
}

window.onload = maakEvents;