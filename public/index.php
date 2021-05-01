<?php

// var_dump($_SERVER);

// Include file for all the classes
require __DIR__ . '/../vendor/autoload.php';

// New object with AltoRouter
$router = new AltoRouter();

// Specify to the router that the website is in this subfolder
// (starting from the root of the web server)
// If there is a sub-folder
if (array_key_exists('BASE_URI', $_SERVER)) {
    // Then define the AltoRouter's basePath
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    // The default value will be $_SERVER['BASE_URI'] (use in CoreController)
    $_SERVER['BASE_URI'] = '/';
}

// Map Homepage to inform the router of all available routes

// For main pages
$router->map('GET','/',['controller' => 'MainController', 'method' => 'home'],'home');
$router->map('GET','/about',['controller' => 'MainController', 'method' => 'about'],'about');
$router->map('GET','/contact',['controller' => 'MainController', 'method' => 'contact'],'contact');
$router->map('GET','/privacy',['controller' => 'MainController', 'method' => 'privacy'],'privacy');
$router->map('GET','/sitemap',['controller' => 'MainController', 'method' => 'sitemap'],'sitemap');

// For articles
$router->map('GET','/articles',['controller' => 'ArticleController', 'method' => 'list'],'article-list');
$router->map('GET','/articles/[i:article_id]',['controller' => 'ArticleController', 'method' => 'single'],'article');

// For projects
$router->map('GET','/projects',['controller' => 'ProjectController', 'method' => 'list'],'project-list');
$router->map('GET','/projects/[i:project_id]',['controller' => 'ProjectController', 'method' => 'single'],'project');

// Check the current URL and provide the corresponding informations
$match = $router->match();

// https://packagist.org/packages/benoclock/alto-dispatcher
// Dispatch in the good method of the good controller
// 1st argument : $match returned by AltoRouter
// 2nd argument : "target" (controller & method) to display error 404
$dispatcher = new Dispatcher($match, '\NamLee\Controllers\ErrorController::error404');
// Setup controllers' namespace
$dispatcher->setControllersNamespace('NamLee\Controllers');
// Setup controllers' arguments
$dispatcher->setControllersArguments([$router]);
// Run the dispatch method wich will call the mapped method
$dispatcher->dispatch();
