<?php
/**
 * This file is part of Zend Session Controller Plugin
 * For license information, please view the LICENSE file that was distributed with this source code.
 *
 * Written by Frank Houweling <fhouweling@senet.nl>, 31-1-2019
 */

namespace FrankHouweling\ZendSessionControllerPlugin\ControllerPlugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Session\Container;
use Zend\Session\SessionManager;

/**
 * Class Session
 * @package FrankHouweling\ZendSessionControllerPlugin\ControllerPlugin
 */
final class Session extends AbstractPlugin
{
    /** @var string */
    public const DEFAULT_SESSION_CONTAINER_NAMESPACE = 'Global';

    /** @var SessionManager */
    private $container;

    /**
     * Session constructor.
     * @param SessionManager $sessionManager
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param string|null $sessionContainerNamespace
     * @return Container
     */
    public function __invoke(): Container
    {
        return $this->container;
    }
}
