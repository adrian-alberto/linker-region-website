<?php

$id = '?';
if (isset($_GET['id']))
	$id = trim($_GET['id']);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://hanlab.pythonanywhere.com/linkerregions/linkerid?linker=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
$output = curl_exec($ch);
curl_close($ch);

$linker_sequences = json_decode($output);
?>

<!DOCTYPE=html>
<head>
        <title><?php echo $id; ?> : Linker Region Family</title>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
        <link href="/linkerregions/main.css" rel="stylesheet">
</head>
<body>

	<a class="fancy-link" href="/linkerregions">Home</a><br>

	<h1><?php echo $id?></h1>
<?php
	/*$fastafile = fopen("data/linker_fastas/" . $id . ".fasta.fas","r") or die("Unable to locate linker: " . $id);
	$first = TRUE;
	while (!feof($fastafile)) {
		$line = fgets($fastafile);
		if (substr($line, 0, 1) == ">") {
			if ($first)
				$first = FALSE;
			else
				echo "</code>";
			echo "<h2>" . $line . "</h2><code>";
		}
		else
			echo $line;
	}

	fclose($fastafile);*/

	foreach ($linker_sequences as $linkerId => $seq) {
		echo "<h2>>$linkerId</h2>";
		echo "<code>$seq</code>";
	}

?>


</body>
</html>
