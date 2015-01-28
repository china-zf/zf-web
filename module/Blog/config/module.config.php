<?php
/**
 * Created by PhpStorm.
 * User: fang
 * Date: 1/13/15
 * Time: 9:25 PM
 */

return array(
    'router' => array('routes' => array(
        'blog' => array(
            'type' => 'Literal',
            'options' => array(
                'route' => '/b',
                'defaults' => array(
                    '__NAMESPACE__' => 'Blog\Controller',
                    'controller' => 'Index',
                    'action'     => 'index',
                ),
            ),
//            'may_terminate' => true,
//            'child_routes' => array(
//                'browse' => array(
//                    'type' => 'Segment',
//                    'options' => array(
//                        'route' => ':version',
//                        'defaults' => array(
//                            'action' => 'browse',
//                        ),
//                        'constraints' => array(
//                            'version' => 'ZF(1|2)',
//                        ),
//                    ),
//                ),
//                'issue' => array(
//                    'type' => 'Segment',
//                    'options' => array(
//                        'route' => 'browse/:issue',
//                        'defaults' => array(
//                            'action'     => 'issue',
//                        ),
//                        'constraints' => array(
//                            'issue' => 'ZF\d?-\d{1,5}',
//                        ),
//                    ),
//                ),
//            ),
        ),
    )),
    'view_manager' => array(
        'template_map' => array(
//            'issues/sidebar' => __DIR__ . '/../view/issues/sidebar.phtml',
//            'issues/index'   => __DIR__ . '/../view/issues/index.phtml',
//            'issues/browse'  => __DIR__ . '/../view/issues/browse.phtml',
//            'issues/issue'   => __DIR__ . '/../view/issues/issue.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);