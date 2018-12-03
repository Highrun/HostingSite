function calculate() {
	var maandprijs = 5.95;
	var totaalprijs = 0;
	var korting = 0;
	var list = document.getElementById("list").value;
	var result = document.getElementById("result");
	var discount = document.getElementById("discount");
	if(list == "test1"){
		// prijs blijft gelijk
		totaalprijs = maandprijs;
	}
	else if (list == "test2"){
		// per jaar betalen = korting: 10%
		totaalprijs = maandprijs * 12;
		korting = 10;
}
	else if (list == "test3"){
		totaalprijs = maandprijs * 12 * 5;
		korting = 20;
}
	result.innerHTML = "Totaalprijs: €" + totaalprijs;
	discount.innerHTML = "Korting: € " + korting;
}
