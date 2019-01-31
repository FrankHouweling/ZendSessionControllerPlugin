<?php
/**
 * This file is part of Zend Session Controller Plugin
 * For license information, please view the LICENSE file that was distributed with this source code.
 *
 * Written by Frank Houweling <fhouweling@senet.nl>, 31-1-2019
 */

namespace FrankHouweling\ZendSessionControllerPlugin;

use FrankHouweling\ZendSessionControllerPlugin\ControllerPlugin\Session;

return [
    'session_containers' => [
        Session::DEFAULT_SESSION_CONTAINER_NAMESPACE
    ],
    'controller_plugins' => [
        'factories' => [
            Session::class => ,
        ],
        'aliases' => [
            'session' => Session::class,
        ]
    ],
];