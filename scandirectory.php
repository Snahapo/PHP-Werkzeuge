<?php
//https://www.commentcamarche.net/faq/6773-php-lister-le-contenu-d-un-repertoire
function ScanDirectory($Directory){
	$MyDirectory = opendir($Directory) or die('Erreur');
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
			echo '<ul>'.$Directory;
			ScanDirectory($Directory.'/'.$Entry);
			echo '</ul>';
		}
		else {
			echo '<li>'.$Entry.'</li>';
		}
	}
  closedir($MyDirectory);
}
ScanDirectory('.');
?>