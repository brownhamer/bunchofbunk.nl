<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('BunchOfBunk.nl');
#============================================================================ ?>

<h1><a href="<?php echo $bob_url; ?>">BunchOfBunk.nl</a></h1>

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

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
