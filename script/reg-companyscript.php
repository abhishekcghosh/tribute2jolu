<script type="text/javascript">
	function checkCompanyYears(i)
	{
		if(parseInt(document.getElementById("ar_cyearf"+i).value)>parseInt(document.getElementById("ar_cyeart"+i).value))
		{
			document.getElementById("ar_cyeart"+i).value="Present";
			document.getElementById("ar_cyeart"+i).style.color="#f00";
		}
	}
	function clearColorCompany(i)
	{
		document.getElementById("ar_cyeart"+i).style.color="#000";
	}
	function addCompany()
	{
		cCount = parseInt(document.getElementById("ar_ccount").value)+1;
		document.getElementById("ar_companyholder"+cCount).style.display="block";
		document.getElementById("ar_ccount").value=cCount;
		if(cCount>=10) 
		{
			document.getElementById("ar_addcompany").style.display="none";
		}
			
	}
</script>
