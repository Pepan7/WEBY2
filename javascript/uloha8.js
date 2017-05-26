function vypisAnot(id){
	id=id.trim();
	//console.log(anotacia);
	var cas=id.substr(0,id.indexOf("</td>"));
	var anot=id.substr(id.indexOf("</td>")+6,id.lastIndexOf("</td>")-16);
	//console.log(anot);
	alert("Cas: "+cas+"\nAnotacia: "+anot);
	/*document.getElementById("tabKegyMin").style.visibility = "visible";
	var riadok = document.createElement('tr');
	var stlpec1 = document.createElement('td'); 
	var stlpec2 = document.createElement('td'); 
	
	var s1=document.createTextNode(cas);
	var s2=document.createTextNode(anot);
	
	riadok.appendChild(stlpec);
	riadok.appendChild(stlpec2);
	document.getElementById("tabKegyMin").appendChild(riadok);*/
}
/*while(document.getElementById("tab").rows.length > 0) {
		document.getElementById("tab").deleteRow(0);
	}*/