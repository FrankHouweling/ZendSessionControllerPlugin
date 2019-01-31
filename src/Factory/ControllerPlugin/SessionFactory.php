<?php
/**
 * This file is part of Zend Session Controller Plugin
 * For license information, please view the LICENSE file that was distributed with this source code.
 * 
 * Written by Frank Houweling <fhouweling@senet.nl>, 31-1-2019
 */

namespace FrankHouweling\ZendSessionControllerPlugin\Factory\ControllerPlugin;

use FrankHouweling\ZendSessionControllerPlugin\ControllerPlugin\Session;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Session\Container;
use Zend\Session\SessionManager;

/**
 * Class SessionFactory
 *
 * @package FrankHouweling\ZendSessionControllerPlugin\Factory\ControllerPlugin
 */
final class SessionFactory implements FactoryInterface
{
    /**
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     * @return Session
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new Session(new Container(
            Session::DEFAULT_SESSION_CONTAINER_NAMESPACE,
            $container->get(SessionManager::class)
        ));
    }
}
