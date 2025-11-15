<?php

declare(strict_types=1);

namespace Acme\Bundle\StockPdpBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeStockPdpBundle extends Bundle
{
    public function getContainerExtension(): ExtensionInterface
    {
        return new DependencyInjection\AcmeStockPdpExtension();
    }
}
