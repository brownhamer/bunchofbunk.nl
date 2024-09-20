<?php #=========================================================================

#-------------------------------------------------------------------------------
$bobpages = [
    'band'             => "Band",
    'albums'           => "Albums",
    'pleasedtomeetyou' => "Pleased to Meet You",
    'difficult2nd'     => "Difficult 2nd",
    'fearless'         => "Fearless",
    'media'            => "Media",
];

#-------------------------------------------------------------------------------
# External link icons created using:
# https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://muzikantenbank.net/&size=16

# Links to various sites, also useable in Markdown using [BOBLINK_<key>]
$boblinks = [
    'bunchofbunk' => [
        'url'  => onLocalhost() ? 'http://localhost/bunchofbunk.nl/' : 'https://bunchofbunk.nl',
        'text' => 'Bunch of Bunk',
        'icon' => $PATH_TO_ROOT.'/images/favicon/favicon-16.png',
        'tag'  => 'We rock!',
    ],
    'alt0' => [
        'url'  => 'https://alt0.nl',
        'text' => 'Alt0.nl',
        'icon' => $PATH_TO_ROOT.'/images/alt0.png',
    ],
    'facebook' => [
        'url'  => 'https://www.facebook.com/pages/Bunch-of-Bunk/137974419583188',
        'text' => 'Facebook',
        'icon' => $PATH_TO_ROOT.'/images/facebook.png',
    ],
    'instagram' => [
        'url'  => 'https://www.instagram.com/bunchofbunk/',
        'text' => 'Instagram',
        'icon' => $PATH_TO_ROOT.'/images/instagram.png',
    ],
    'mail' => [
        'url'  => 'mailto:band@bunchofbunk.nl',
        'text' => 'Mail',
        'icon' => $PATH_TO_ROOT.'/images/mail.png',
    ],
    'muzikantenbank' => [
        'url'  => 'https://www.muzikantenbank.net',
        'text' => 'Muzikantenbank.NET',
        'icon' => $PATH_TO_ROOT.'/images/muzikantenbank.png',
    ],
    'reverbnation' => [
        'url'  => 'https://www.reverbnation.com/bunchofbunk',
        'text' => 'ReverbNation',
        'icon' => $PATH_TO_ROOT.'/images/reverbnation.png',
    ],
    'soundcloud' => [
        'url'  => 'https://soundcloud.com/bunch-of-bunk',
        'text' => 'SoundCloud',
        'icon' => $PATH_TO_ROOT.'/images/soundcloud.png',
    ],
    'spotify' => [
        'url'  => 'https://open.spotify.com/artist/5hRck8ylzUPLXWXrcHKJ2D',
        'text' => 'Spotify',
        'icon' => $PATH_TO_ROOT.'/images/spotify.png',
    ],
    'threads' => [
        'url'  => 'https://www.threads.net/@bunchofbunk',
        'text' => 'Threads',
        'icon' => $PATH_TO_ROOT.'/images/threads.png',
    ],
    'youtube' => [
        'url'  => 'https://www.youtube.com/channel/UCyjs_qrurO6OdGXZgcJhK-g',
        'text' => 'YouTube',
        'icon' => $PATH_TO_ROOT.'/images/youtube.png',
    ],
];

#============================================================================ ?>
