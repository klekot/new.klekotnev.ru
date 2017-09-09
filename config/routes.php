<?php
/**
 *
 */

use \GF\Core\Router as Router;

//  User routes
//  Place your custom routes here:

//  replace me :)
//Router::add('^pages/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Pages']);
//Router::add('^pages/(?P<alias>[a-z-]+)$', ['controller' => 'Pages', 'action' => 'view']);

//  Main routes
Router::add('^$'       , ['module' => 'Main', 'controller' => 'Index', 'action' => 'index']);
Router::add('^contact$', ['module' => 'Main', 'controller' => 'Index', 'action' => 'contact']);
Router::add('^thanks$' , ['module' => 'Main', 'controller' => 'Index', 'action' => 'thanks']);
Router::add('^search$' , ['module' => 'Main', 'controller' => 'Index', 'action' => 'search']);

if (MODULES_ENABLED) {
    Router::add('^(?P<module>[a-z-]+)$');
    Router::add('^(?P<module>[a-z-]+)/(?P<controller>[a-z-]+)?$');
    Router::add('^(?P<module>[a-z-]+)/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

} else {
    Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
}
