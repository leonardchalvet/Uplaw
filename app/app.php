<?php

/*
 * This is the main file of the application, including routing and controllers.
 *
 * $app is a Slim application instance, see the framework documentation for more details:
 * http://docs.slimframework.com/
 *
 * The order of the routes matter, as it will define the priority of routes. For that reason we
 * need to keep the more "generic" routes, such as the pages route, at the end of the file.
 *
 * If you decide to change the URLs, make sure to change PrismicLinkResolver in LinkResolver.php
 * as well to make sures links in your site are correctly generated.
 */

use Prismic\Api;
use Prismic\Predicates;

require_once 'includes/http.php';

/*
 *  --[ INSERT YOUR ROUTES HERE ]--
 */

// Index page
$app->get('/', function ($request, $response) use ($app, $prismic) {



    header('Location: /fr/home');
    exit;
});

$app->get('/{lg}/{uid}', function ($request, $response, $args) use ($app, $prismic) {
    $api = $prismic->get_api(); // PART 1 - Call api

    //PART 2 - Select languages
    $options = switchLanguages($args['lg']);
    if(!$options) {
        header('Location: /');
        exit;
    }

    //PART 3 - Call Header & Footer
    $header = $api->getByUID('header', 'header', $options);
    $footer = $api->getByUID('footer', 'footer', $options);
    
    //PART 4 - Call current page
    $document = NULL;
    $nType = 0;
    $arrayTypes = ['home', 'fonctionalities', 'services', 'legal_notices', 'about_us', 'sign_up', 'solutions']; // UPDATE NAME OF CUSTOM TYPE HERE (only if exist in CONTENT)
    $arrayView = ['home', 'features', 'services', 'mentions', 'about', 'signin', 'solutions'];
    foreach ($arrayTypes as $type) {
        $document = $api->getByUID($type, $args['uid'], $options);
        $allLang = $api->getByUID($type, $args['uid'], [ 'lang' => '*' ] );
        
        $nUrl = 0;
        $allUrl = NULL;
        if($alternate_languages != NULL) {
            foreach ($allLang->alternate_languages as $lang) {
                $allUrl[$nUrl] = [ $lang->uid, invertSwitchLanguages($lang->lang) ];
                $nUrl += 1;
            }
        }
        
        $nType++;
        if($document != NULL) {
            break;
        }
    }

    //PART 5 - Call good view
    render($app, $arrayView[$nType-1], array('document' => $document, 'header' => $header, 'footer' => $footer, 'allUrl' => $allUrl));
});

//ADD LANGUAGES FOR MORE POSSIBILITIES
function switchLanguages($lg) {

    $lglg = '';
    switch (strtoupper($lg)) {
        case 'FR': $lglg = 'fr-fr'; break;
        case 'EN': $lglg = 'en-us'; break;
        case 'US': $lglg = 'en-us'; break;
        case 'DE': $lglg = 'de-de'; break;
        case 'ES': $lglg = 'es-es'; break;
        case 'JP': $lglg = 'ja-jp'; break;
        
        default: return false;
    }

    return [ 'lang' => $lglg ];
}

//ADD LANGUAGES FOR MORE POSSIBILITIES
function invertSwitchLanguages($lglg) {

    $lg = '';
    switch (strtolower($lglg)) {
        case 'fr-fr': $lg = 'fr'; break;
        case 'en-us': $lg = 'en'; break;
        case 'de-de': $lg = 'de'; break;
        case 'es-es': $lg = 'es'; break;
        case 'ja-jp': $lg = 'jp'; break;
        
        default: return false;
    }

    return $lg;
}