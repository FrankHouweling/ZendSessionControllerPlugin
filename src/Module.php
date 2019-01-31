<?php
/**
 * This file is part of Zend Session Controller Plugin
 * For license information, please view the LICENSE file that was distributed with this source code.
 *
 * Written by Frank Houweling <fhouweling@senet.nl>, 31-1-2019
 */

namespace FrankHouweling\ZendSessionControllerPlugin;


class Module
{
    public function getConfig()
    {
        return require __DIR__ . '/../config/module.config.php';
    }
}
