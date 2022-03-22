<?php 

//use App\Controller\ArticleController;
//use App\Controller\SignupController;
//use App\Controller\UserController;
use App\Controller\{ArticleController, SigninController, SignupController, UserController};
use App\Model\Article;

$router->map('GET', '/', function () {
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'ArticleController.php']);
    $articleController = new ArticleController();
    $articleController->index();
    
});

$router->map('GET|POST', '/article/new', function () {
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'ArticleController.php']);
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'Article.php']);
    $articleController = new ArticleController();
    $article = new Article();
    $articleController->new($article);
    
});

$router->map('GET|POST', '/article/edit/[i:id]', function (int $id) {
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'ArticleController.php']);
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'Article.php']);
    $articleController = new ArticleController();
    $articleController->edit($id);
    
});

$router->map('GET', '/article/delete/[i:id]', function (int $id) {
   // require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'ArticleController.php']);
   // require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'Article.php']);
    $articleController = new ArticleController();
    $articleController->delete($id);
});

$router->map('GET|POST', '/user/signin', function () {
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'UserController.php']);
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'User.php']);
    $userController = new UserController();
    $userController->signin();
}
);

$router->map('GET|POST', '/signup', function () {
    $signupController = new SignupController();
    $signupController->index();
}
);

$router->map('GET|POST', '/signin', function () {
    $signinController = new SigninController();
    $signinController->index();
}
);

$router->map('GET|POST', '/user/signout', function () {
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Controller', 'UserController.php']);
    //require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'src', 'Model', 'User.php']);
    $userController = new UserController();
    $userController->signout();
}

);
