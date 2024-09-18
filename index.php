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
    <h3>Navigation</h3>
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
    <h3>Socials</h3>
    <a href="https://open.spotify.com/artist/5hRck8ylzUPLXWXrcHKJ2D">Spotify</a><br />
    <a href="https://www.reverbnation.com/bunchofbunk">ReverbNation</a><br />
    <a href="https://soundcloud.com/bunch-of-bunk">SoundCloud</a><br />
    <a href="https://www.youtube.com/channel/UCyjs_qrurO6OdGXZgcJhK-g">YouTube</a><br />
    <a href="https://www.facebook.com/pages/Bunch-of-Bunk/137974419583188">Facebook</a><br />
    <a href="https://www.instagram.com/bunchofbunk/">Instagram</a><br />
    <a href="https://www.threads.net/@bunchofbunk">Threads</a><br />
    <br />
    <a href="mailto:band@bunchofbunk.nl">Mail</a><br />
    <br />
    <hr />
    <br />
    <a href="https://www.muzikantenbank.net/">Muzikantenbank.NET</a> voor als je muzikanten of een bandje zoekt.
</div>
</div>

<div id="by">
    <?php randomHtmlMusicSymbol(); ?>
    site by <a href="<?php echo $alt0_url; ?>"><?php echo $alt0_title; ?></a>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
