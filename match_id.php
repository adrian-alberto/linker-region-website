<?php
/*
$id = '?';
if (isset($_GET['id']))
	$id = trim($_GET['id']);

if (preg_match('/^ENSGT[0-9]+$/', $id) == 1)
	printf("Matches gene tree");

if (preg_match('/^ENS[A-Z]*P[0-9]+$/', $id) == 1)
	printf("Matches protein");

if (preg_match('/^PF[0-9]+$/', $id) == 1)
	printf("Matches pfam");
*/



?>
<script>
	function redirect() {
		var inp = document.getElementById("idSearchBox").value;
		alert("!!!!");
		location.href = "/linkerregions/query.php?id="+inp;
	}

</script>
<form action="javascript:redirect();">
	<input id="idSearchBox" type="text" name="id"/>
	<input type="submit" value="Search"/>
</form>