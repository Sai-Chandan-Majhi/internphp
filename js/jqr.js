$(document).ready(
	function search()
	{
		$("#sbtn").click(
			function (){
				let k=$("#sbar").val();
				let p=$("#spara").text();
				let i=p.indexOf(k);
				if(i===-1)
				{
					$("#x").show();
					$("#v").hide();
					$("#x").hide(2000);
				}
				else
				{
					$("#v").show();
					$("#x").hide();
					$("#v").hide(2000);
				}
			});
		$("#ta").keyup(
		function ()
		{
			let ta=$("#ta").val();
			$("#pta").text("The length is: "+ta.length);
					if(ta.length>100)
						{
							$("#ta").css("background-color","#ff7070");
						}
					else
						$("#ta").css("background-color","white");

		});
	$("#spin").click(
		function ()
		{
			$("#loader").css("display","block");
			$("#loader").fadeOut(2000);
		});
	}
);


