<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
$bob_title = 'Bunch of Bunk';
$bob_line  = 'We rock!';
$bob_url   = 'https://bunchofbunk.nl';

#-------------------------------------------------------------------------------
startHtmlPage($PATH_TO_ROOT, $bob_title, $bob_line);

#============================================================================ ?>

<h1><a href="<?php echo $bob_url; ?>"><?php echo $bob_title; ?></a></h1>
<h2><?php echo $bob_line; ?></h2>

<div id="page">
<div id="navigation">
Navigation
</div>
<div id="content">
Content
</div>
<div id="socials">
Socials
</div>
</div>

<div id="footer"><a href="<?php echo $bob_url; ?>"><?php echo $bob_title; ?></a></div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
