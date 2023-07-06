function changebutton()
{
	document.getElementById("mybtn").value="You've clicked me!";
	alert("You've clicked it");
	console.log("Clickin");
}
function datesh()
{
	document.getElementById('demo').value="date";
	alert("The Date is "+Date());
}
function hide_para()
{ var x=document.getElementById("para");
	if(x.style.display=="none")
	{
		document.getElementById("para").style.display="block";
		document.getElementById("parabtn").innerHTML="Hide Paragraph";
	}
	else
	{
		$("para").hide();
		//document.getElementById("para").style.display="none";
		document.getElementById("parabtn").innerHTML="Unhide Paragraph";
	}
}
function hide_bulb()
{
	if(document.getElementById("bulb").style.display=="none")
	{
		document.getElementById("bulb").style.display="block";
		document.getElementById("bulbbtn").innerHTML="Hide Bulb";
	}
	else
	{
		document.getElementById("bulb").style.display="none";
		document.getElementById("bulbbtn").innerHTML="Unhide Bulb";
	}
}
function calc() {
	var sum;
	sum=(document.getElementById("v1").value*1)+(document.getElementById("v2").value*1)+(document.getElementById("v3").value*1);
	document.getElementById("calcp").innerHTML="Result: "+sum.toString();
}
function search()
{
	let key=document.getElementById("sbar").value;
	let p=document.getElementById("spara").innerText;
	//let i=p.indexOf(key);
	if(p.indexOf(key)===-1)
	{
		//$("alert-danger").after('<span>Word is not found!!</span>');
		//alert("not found");
		document.getElementById("x").style.display="block";
		document.getElementById("v").style.display="none";
	}
	else
	{
		//$("alert-success").after('<span>Word is found!!</span>');
		//alert("found");
		document.getElementById("v").style.display="block";
		document.getElementById("x").style.display="none";
	}

}