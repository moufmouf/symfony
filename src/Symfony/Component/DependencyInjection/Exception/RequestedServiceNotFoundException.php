<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Exception;

use Psr\Container\NotFoundExceptionInterface;

/**
 * This exception is thrown when a non-existent service is requested.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author David Négrier <d.negrier@thecodingmachine.com>
 */
class RequestedServiceNotFoundException extends ServiceNotFoundException implements NotFoundExceptionInterface
{
    public function __construct($id, \Exception $previous = null, array $alternatives = array())
    {
        $msg = sprintf('You have requested a non-existent service "%s".', $id);

        if ($alternatives) {
            if (1 == count($alternatives)) {
                $msg .= ' Did you mean this: "';
            } else {
                $msg .= ' Did you mean one of these: "';
            }
            $msg .= implode('", "', $alternatives).'"?';
        }

        parent::__construct($msg, 0, $previous);

        $this->id = $id;
    }
}
