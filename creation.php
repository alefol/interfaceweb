<?php
require_once("controller/calculsStats.php");
$instance=$_GET['var1'];
$np = "problemeNK";
$algos=scandir($np.'/traces');

	//création des courbes pour chaque algo
	for ($i=2; $i < count($algos); $i++) {
		$path='problemeNK/traces/'.$algos[$i].'/'.$instance.'/moyenne_algo_trace.txt';
		if(!file_exists($path)){
			$nf = 'problemeNK/traces/'.$algos[$i].'/'.$instance;
			generationFichierScoreMoyen($nf);
		}
	}

?>