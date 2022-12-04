<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class AsService
{
    public function __construct(
        public bool $public = false,
        public bool $autowired = true,
        public bool $lazy = false,
        public bool $shared = true,
    ) {
    }
}
