<html>
<body>
<a href="javascript:pilihsemua()">Check All</a>&nbsp;&nbsp;<a href="javascript:bersihkan()">Uncheck All</a>

<form action="proses.php" method="POST">
<br/><input type="checkbox" name="daftarku[]" value="100"/>Invoice no 100
<br/><input type="checkbox" name="daftarku[]" value="101"/>Invoice no 101
<br/><input type="checkbox" name="daftarku[]" value="102"/>Invoice no 102
<br/><input type="checkbox" name="daftarku[]" value="103"/>Invoice no 103
<br/><input type="checkbox" name="daftarku[]" value="104"/>Invoice no 104
<br/><input type="checkbox" name="daftarku[]" value="105"/>Invoice no 105
<br/><input type="submit" value="Proses"/>
</form>
<script>
function pilihsemua()
{
	var daftarku = document.getElementsByName("daftarku[]");
	var jml=daftarku.length;
	var b=0;
	for (b=0;b<jml;b++)
	{
		daftarku[b].checked=true;
		
	}
}

function bersihkan()
{
	var daftarku = document.getElementsByName("daftarku[]");
	var jml=daftarku.length;
	var b=0;
	for (b=0;b<jml;b++)
	{
		daftarku[b].checked=false;
		
	}
}
</script>
</body>
</html>