<?php
require_once("view/Document.php");
$document = new Document("view/style.css", "utf8");
$document->begin();
$document->header();
$document->beginSection("corpPage", "formdiv");
$var = $_GET['var1'];
$path=$var;
//$path.='/instancesNK';

echo '<h1 id="titreProbleme">'.$var.'</h1>';

//liste des instances avec le lien des téléchargements
$instances=$path.'/instancesNK'; 
$tabDir=scandir($instances);
echo '<ul>';
for($i=2;$i<count($tabDir);$i++) {
	echo '<li>';
//<<<<<<< HEAD
		/*echo '<a href='.'"'.'statsTraces.php?var1='.$path.'/'.'traces&amp;var2='.$tabDir[$i].'"'.'>'.$tabDir[$i].'</a>';
		echo '<a href='.'"'.'downloadInstanceNK.php?var1='.$instances.'/'.$tabDir[$i].'"'.'>';
		echo '<img src="view/ressources/download.gif" height="20" width="20">'; */
//=======
		echo '<a href='.'"'.'downloadInstanceNK.php?var1='.$path.'/'.$tabDir[$i].'"'.'>'.$tabDir[$i].'</a>';
		echo '<a href='.'"'.'downloadInstanceNK.php?var1='.$path.'/'.$tabDir[$i].'"'.'>';
		echo '<img src="view/ressources/downArrow.gif" height="20" width="20">'; 
//>>>>>>> 758f29cf7b49a30f0cbb42cdba48c8fe3f02d20f
		echo '</a>';
		echo '</li>';
}
echo '</ul>';

/*liste des algos
$algos=$path.'/traces';
$tabDir=scandir($algos);
echo '<ul>';
for($i=2;$i<count($tabDir);$i++){
	echo '<li>';
		echo $tabDir[$i];
	echo '</li>';
};

echo '</ul>';*/
$document->endSection();
$document->end();
?>