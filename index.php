<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');
require_once($PATH_TO_ROOT.'/lib/vars.php');
require_once($PATH_TO_ROOT.'/lib/Parsedown.php');

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
        <a href="<?php echo $spotify_url; ?>"><img alt="Spotify" src="<?php echo $spotify_icon; ?>" /></a>
        <a href="<?php echo $reverbnation_url; ?>"><img alt="ReverbNation" src="<?php echo $reverbnation_icon; ?>" /></a>
        <a href="<?php echo $soundcloud_url; ?>"><img alt="SoundCloud" src="<?php echo $soundcloud_icon; ?>" /></a>
        <a href="<?php echo $youtube_url; ?>"><img alt="YouTube" src="<?php echo $youtube_icon; ?>" /></a>
        <a href="<?php echo $facebook_url; ?>"><img alt="Facebook" src="<?php echo $facebook_icon; ?>" /></a>
        <a href="<?php echo $instagram_url; ?>"><img alt="Instagram" src="<?php echo $instagram_icon; ?>" /></a>
        <a href="<?php echo $bobthreads_url_url; ?>"><img alt="Threads" src="<?php echo $threads_icon; ?>" /></a>
        <a href="<?php echo $mail_url; ?>"><img alt="mail" src="<?php echo $mail_icon; ?>" /></a><br />
    </div>
    <div id="muzikantenbank">
        <a href="<?php echo $muzikantenbank_url; ?>">Muzikantenbank.NET</a> voor als je muzikanten of een bandje zoekt.
    </div>
</div>
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
    echo $parsedown->text($markdown);
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
    <?php randomHtmlMusicSymbol(); ?>
    site by <a href="<?php echo $alt0_url; ?>"><?php echo $alt0_title; ?></a>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
