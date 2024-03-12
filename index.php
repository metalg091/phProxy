<?php
// target -> http://people.inf.elte.hu/pgm6rw
$var = file_get_contents($_GET["url"]);
$search = array('src="', 'href"');
$replace = array('src="furtib.web.elte.hu/phProxy/index.php?url=' + $_GET["url"] + '/', 'href="furtib.web.elte.hu/phProxy/index.php?url=' + $_GET["url"] + '/');
echo str_replace($search,$replace,$var);
?>
