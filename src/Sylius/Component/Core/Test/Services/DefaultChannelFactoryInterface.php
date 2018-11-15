<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Core\Test\Services;

interface DefaultChannelFactoryInterface
{
    /**
     * @param string|null $code
     * @param string|null $name
     * @param string|null $currencyCode
     *
     * @return array
     */
    public function create(?string $code = null, ?string $name = null, ?string $currencyCode = null): array;
}
