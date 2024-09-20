<?php #=========================================================================

#-------------------------------------------------------------------------------
function startHtmlPage($ptr, $title, $line) {
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<title>'.$title.' - '.$line.'</title>'."\n";
    echo '<link rel="stylesheet" type="text/css" href="'.$ptr.'/style/main.css">'."\n";
	echo '<style type="text/css">'."\n";
	echo 'body { background-image: url("'.$ptr.'/images/BoB-background.png"); }'."\n";
	echo '</style>'."\n";
	echo '<link rel="shortcut icon" href="'.$ptr.'/favicon.ico">'."\n";
	echo '<link rel="icon" sizes="16x16 32x32 64x64" href="'.$ptr.'/favicon.ico">'."\n";
	echo '<link rel="icon" type="image/png" sizes="196x196" href="'.$ptr.'/images/favicon/favicon-192.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="160x160" href="'.$ptr.'/images/favicon/favicon-160.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$ptr.'/images/favicon/favicon-96.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="64x64" href="'.$ptr.'/images/favicon/favicon-64.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$ptr.'/images/favicon/favicon-32.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$ptr.'/images/favicon/favicon-16.png">'."\n";
	echo '<link rel="apple-touch-icon" href="'.$ptr.'/images/favicon/favicon-57.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="114x114" href="'.$ptr.'/images/favicon/favicon-114.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="72x72" href="'.$ptr.'/images/favicon/favicon-72.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="144x144" href="'.$ptr.'/images/favicon/favicon-144.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="60x60" href="'.$ptr.'/images/favicon/favicon-60.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="120x120" href="'.$ptr.'/images/favicon/favicon-120.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="76x76" href="'.$ptr.'/images/favicon/favicon-76.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="152x152" href="'.$ptr.'/images/favicon/favicon-152.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.$ptr.'/images/favicon/favicon-180.png">'."\n";
	echo '<meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
	echo '<meta name="msapplication-TileImage" content="'.$ptr.'/images/favicon/favicon-144.png">'."\n";
	echo '<meta name="msapplication-config" content="'.$ptr.'/images/favicon/browserconfig.xml">'."\n";
	echo '</head>'."\n";
    echo '<body>'."\n";
}

#-------------------------------------------------------------------------------
function textLink($key, $txt = '', $urladd = '') {
	global $boblinks;
	$url  = $boblinks[$key]['url'];
	$text = ($txt == '') ? $boblinks[$key]['text'] : $txt;
	return '<a href="'.$url.$urladd.'">'.$text.'</a>'."\n";
}

#-------------------------------------------------------------------------------
function iconLink($key) {
	global $boblinks;
	$url  = $boblinks[$key]['url'];
	$text = $boblinks[$key]['text'];
	$icon = $boblinks[$key]['icon'];
	return '<a href="'.$url.'"><img alt="'.$text.'" src="'.$icon.'" /></a>'."\n";
}
#-------------------------------------------------------------------------------
function randomHtmlMusicSymbol() {
	$symbols = array('&#9833;', '&#9834;', '&#9835;', '&#9836;', '&#9837;', '&#9838;', '&#9839;');
    echo $symbols[array_rand($symbols)];
}

#-------------------------------------------------------------------------------
function endHtmlPage() {
    echo '</body>'."\n";
    echo '</html>'."\n";
}


#============================================================================ ?>
