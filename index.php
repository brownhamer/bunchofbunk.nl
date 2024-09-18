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
<div id="sidebar">
    <div id="navigation">
        <a href="<?php echo $bob_url . "?page=band"; ?>">Band</a><br />
        <br />
        <a href="<?php echo $bob_url . "?page=albums"; ?>">Albums</a><br />
        &middot; <a href="<?php echo $bob_url . "?page=pleasedtomeetyou"; ?>">Pleased to Meet You</a><br />
        &middot; <a href="<?php echo $bob_url . "?page=difficult2nd"; ?>">Difficult 2nd</a><br />
        &middot; <a href="<?php echo $bob_url . "?page=fearless"; ?>">Fearless</a><br />
        <br />
        <a href="<?php echo $bob_url . "?page=media"; ?>">Media</a>
    </div>
    <div id="socials">
        <a href="https://open.spotify.com/artist/5hRck8ylzUPLXWXrcHKJ2D"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://spotify.com/&size=16" src="images/spotify.png" /></a>
        <a href="https://www.reverbnation.com/bunchofbunk"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://reverbnation.com/&size=16" src="images/reverbnation.png" /></a>
        <a href="https://soundcloud.com/bunch-of-bunk"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://soundcloud.com/&size=16" src="images/soundcloud.png" /></a>
        <a href="https://www.youtube.com/channel/UCyjs_qrurO6OdGXZgcJhK-g"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://youtube.com/&size=16" src="images/youtube.png" /></a>
        <a href="https://www.facebook.com/pages/Bunch-of-Bunk/137974419583188"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://facebook.com/&size=16" src="images/facebook.png" /></a>
        <a href="https://www.instagram.com/bunchofbunk/"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://instagram.com/&size=16" src="images/instagram.png" /></a>
        <a href="https://www.threads.net/@bunchofbunk"><img alt="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://threads.net/&size=16" src="images/threads.png" /></a>
        <a href="mailto:band@bunchofbunk.nl"><img alt="mail" src="images/mail.png" /></a><br />
    </div>
    <div id="muzikantenbank">
        <a href="https://www.muzikantenbank.net/">Muzikantenbank.NET</a> voor als je muzikanten of een bandje zoekt.
    </div>
</div>
<div id="content">
    Content
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
    <?php randomHtmlMusicSymbol(); ?>
    site by <a href="<?php echo $alt0_url; ?>"><?php echo $alt0_title; ?></a>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
