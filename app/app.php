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

// Previews
$app->get('/preview', function ($request, $response) use ($app, $prismic) {
    $token = $request->getParam('token');
    $url = $prismic->get_api()->previewSession($token, $prismic->linkResolver, '/');
    return $response->withStatus(302)->withHeader('Location', $url);
});

// Index page
$app->get('/', function ($request, $response) use ($app, $prismic) {
    render($app, 'home');
});

$app->get('/{lg}/{uid}', function ($request, $response, $args) use ($app, $prismic) {
    $api = $prismic->get_api(); // PART 1 - Call api

    //PART 2 - Select languages
    $options = switchLanguages($args['lg']);
    if(!$options) {
        header('Location: /en/'.$args['uid']);
        exit;
    }

    //PART 3 - Call Header & Footer
    
    //PART 4 - Call current page
    $document = NULL;
    $typeSelect = '';
    $arrayTypes = ['home', 'solutions']; // UPDATE NAME OF CUSTOM TYPE HERE (only if exist in CONTENT)
    foreach ($arrayTypes as $type) {
        $document = $api->getByUID($type, $args['uid'], $options);
        if($document != NULL) break;
    }

    //PART 5 - Call good view
    render($app, 'home', array('document' => $document));
});

//ADD LANGUAGES FOR MORE POSSIBILITIES
function switchLanguages($lg) {

    $lglg = '';
    switch (strtoupper($lg)) {
        case 'FR': $lglg = 'fr-fr'; break;
        case 'EN': $lglg = 'en-us'; break;
        case 'US': $lglg = 'en-us'; break;
        case 'DE': $lglg = 'de-de'; break;
        
        default: return false;
    }

    return [ 'lang' => $lglg ];
}


/**
 * Webhook github
 * auto pull if push on master
 */
$app->post('/github-webhook', function() use ($app) {
    $data = json_decode(file_get_contents('php://input'), true);
    $ref = $data["ref"] ?? "none";
    $dir = __DIR__."/prod-test/prismic";
    if ($ref != "refs/heads/master") {
        shell_exec("cd $dir && echo $ref >> git.log 2>&1");
    }
    shell_exec("cd $dir && git pull >> git.log 2>&1");
});

/**
 * Webhook github
 * manual pull
 */
$app->get('/github-webhook', function() use ($app) {
    $dir = __DIR__."/prod-test/prismic";
    echo "<pre>";
    echo nl2br(shell_exec("cd $dir && git pull 2>&1"));
    echo "<hr>";
    echo nl2br(shell_exec("cd $dir && git log  --pretty=oneline -10"));
    echo "<pre>";
});
