<?php

use App\Controller\ArticleController;
use App\Controller\UserController;
use App\Model\Article;
use App\Model\User;


require_once implode(DIRECTORY_SEPARATOR, ['..', 'config', 'setup.php']);
require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'vendor', 'autoload.php']);

require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'UserController.php']);
require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'User.php']);


session_start();

$requestUrl = filter_input(INPUT_SERVER, "REQUEST_URI");
$requestMethod = filter_input(INPUT_SERVER, "REQUEST_METHOD");

$router = new AltoRouter();

require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'config', 'routes.php']);

$match = $router->match($requestUrl, $requestMethod);

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} elseif (is_bool($match) && !$match) {
    // TODO 'error 404'
}
dump($requestUrl, $requestMethod, $router, $match);

