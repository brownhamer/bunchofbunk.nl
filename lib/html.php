<?php #=========================================================================

#-------------------------------------------------------------------------------
function startHtmlPage($title) {
    global $PATH_TO_ROOT;
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<title>'.$title.'</title>'."\n";
    echo '<link rel="stylesheet" type="text/css" href="'.$PATH_TO_ROOT.'/style/main.css">'."\n";
	echo '<style type="text/css">'."\n";
	echo 'body { background-image: url("'.$PATH_TO_ROOT.'/images/BoB-background.png"); }'."\n";
	echo '</style>'."\n";
	echo '<link rel="shortcut icon" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" sizes="16x16 32x32 64x64" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" type="image/png" sizes="196x196" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-192.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="160x160" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-160.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-96.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="64x64" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-64.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-32.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-16.png">'."\n";
	echo '<link rel="apple-touch-icon" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-57.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="114x114" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-114.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="72x72" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-72.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="144x144" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-144.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="60x60" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-60.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="120x120" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-120.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="76x76" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-76.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="152x152" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-152.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.$PATH_TO_ROOT.'/images/favicon/favicon-180.png">'."\n";
	echo '<meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
	echo '<meta name="msapplication-TileImage" content="'.$PATH_TO_ROOT.'/images/favicon/favicon-144.png">'."\n";
	echo '<meta name="msapplication-config" content="'.$PATH_TO_ROOT.'/images/favicon/browserconfig.xml">'."\n";
	echo '</head>'."\n";
    echo '<body>'."\n";
}

#-------------------------------------------------------------------------------
function endHtmlPage() {
	global $alt0_url, $bob_url, $dgt_url, $nieklin_url;

	echo '<div id="footer"><a href="'.$bob_url.'">BunchOfBunk.nl</a></div>'."\n";
    echo '</body>'."\n";
    echo '</html>'."\n";
}

#-------------------------------------------------------------------------------
$bob_url = 'https://bunchofbunk.nl';


#============================================================================ ?>
