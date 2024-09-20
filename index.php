<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');
require_once($PATH_TO_ROOT.'/lib/vars.php');
require_once($PATH_TO_ROOT.'/lib/Parsedown.php');

#-------------------------------------------------------------------------------
startHtmlPage($PATH_TO_ROOT, $boblinks['bunchofbunk']['text'], $boblinks['bunchofbunk']['tag']);

#============================================================================ ?>

<h1><?php echo textLink('bunchofbunk'); ?></h1>
<h2><?php echo $boblinks['bunchofbunk']['tag']; ?></h2>

<div id="page">
<div id="sidebar"><div id="sidegray">
    <div id="navigation">
        <?php echo pageLink('band'); ?><br />
        <br />
        <?php echo pageLink('albums'); ?><br />
        &middot; <?php echo pageLink('pleasedtomeetyou'); ?><br />
        &middot; <?php echo pageLink('difficult2nd'); ?><br />
        &middot; <?php echo pageLink('fearless'); ?><br />
        <br />
        <?php echo pageLink('media'); ?>
    </div>
    <div id="socials">
        <?php echo iconLink('spotify'); ?>
        <?php echo iconLink('reverbnation'); ?>
        <?php echo iconLink('soundcloud'); ?>
        <?php echo iconLink('youtube'); ?>
        <?php echo iconLink('facebook'); ?>
        <?php echo iconLink('instagram'); ?>
        <?php echo iconLink('threads'); ?>
        <?php echo iconLink('mail'); ?>
    </div>
    <div id="muzikantenbank">
        <?php echo textLink('muzikantenbank'); ?> voor als je muzikanten of een bandje zoekt.
    </div>
</div></div>
<div id="content">
<?php
    $page = htmlspecialchars(getGet('page', 'home'));
    if (!is_readable($PATH_TO_ROOT.'/content/'.$page.'.md')) {
        echo '<div id="pagenotfound">Page ['.$page.'] not found, assuming homepage</div>'."\n";
        $page = 'home';
    }

    $file = $PATH_TO_ROOT.'/content/'.$page.'.md';
    $markdown = file_get_contents($file);
    $parsedown = new Parsedown();
    echo replaceBobLinks($parsedown->text($markdown));
    echo "\n".'<!-- ['.$page.'] content from ['.$file.' -->'."\n";
?>
</div>
</div>

<div id="footer">
    <div id="auteursrechten">
        <h3>Auteursrechten</h3><br /><br />
        Al onze nummers mogen gedownload, gekopiëerd, verspreid worden e.d. Ze mogen echter niet gewijzigd worden, commercieel gebruikt of iets wat daar op lijkt zonder onze schriftelijke toestemming.
    </div>
    <div id="copyright">
        <h3>Copyright</h3><br /><br />
        All songs may be downloaded, copied, distributed and such. They may however, not be changed, used commercially or anything like that without our written consent.
    </div>
</div>

<div id="by">
    <?php randomHtmlMusicSymbol(); ?> site by <?php echo textLink('alt0'); ?>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
