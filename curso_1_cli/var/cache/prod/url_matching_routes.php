<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home_inicio', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/saludo' => [[['_route' => 'home_saludo', '_controller' => 'App\\Controller\\HomeController::saludo'], null, null, null, false, false, null]],
        '/home/despedida' => [[['_route' => 'home_despedida', '_controller' => 'App\\Controller\\HomeController::despedida'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template_inicio', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/template/excepcion' => [[['_route' => 'template_exception', '_controller' => 'App\\Controller\\TemplateController::excepcion'], null, null, null, false, false, null]],
        '/template/trabajo' => [[['_route' => 'template_trabajo', '_controller' => 'App\\Controller\\TemplateController::trabajo'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/template/parametros(?:/([^/]++)(?:/([^/]++))?)?(*:55)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        55 => [
            [['_route' => 'template_parametros', 'id' => 1, 'slug' => 'algo', '_controller' => 'App\\Controller\\TemplateController::parametros'], ['id', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
