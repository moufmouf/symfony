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
 * Abstract exception extended by both RequestedServiceNotFoundException and MissingDependencyException.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class ServiceNotFoundException extends InvalidArgumentException
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
