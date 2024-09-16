<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
$bob_title = 'Bunch of Bunk';
$bob_line  = 'We rock!';
$bob_url   = 'https://bunchofbunk.nl';

$alt0_title = 'Alt0';
$alt0_url   = 'https://alt0.nl';

#-------------------------------------------------------------------------------
startHtmlPage($PATH_TO_ROOT, $bob_title, $bob_line);

#============================================================================ ?>

<h1><a href="<?php echo $bob_url; ?>"><?php echo $bob_title; ?></a></h1>
<h2><?php echo $bob_line; ?></h2>

<div id="page">
<div id="navigation">
    <a href="<?php echo $bob_url . "?page=band"; ?>">Band</a><br />
    <br />
    <a href="<?php echo $bob_url . "?page=albums"; ?>">Albums</a><br />
    &middot; <a href="<?php echo $bob_url . "?page=pleasedtomeetyou"; ?>">Pleased to Meet You</a><br />
    &middot; <a href="<?php echo $bob_url . "?page=difficult2nd"; ?>">Difficult 2nd</a><br />
    &middot; <a href="<?php echo $bob_url . "?page=fearless"; ?>">Fearless</a><br />
</div>
<div id="content">
Content
</div>
<div id="socials">
Socials
</div>
</div>

<div id="footer">
    <a href="<?php echo $alt0_url; ?>"><?php echo $alt0_title; ?></a>
    <?php randomHtmlMusicSymbol(); ?>
    <a href="<?php echo $bob_url; ?>"><?php echo $bob_title; ?></a>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
