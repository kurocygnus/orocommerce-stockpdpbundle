<?php

declare(strict_types=1);

namespace Acme\Bundle\StockPdpBundle\Twig;

use Acme\Bundle\StockPdpBundle\Service\StockProvider;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Oro\Bundle\ProductBundle\Entity\Product;

class StockExtension extends AbstractExtension
{
    private StockProvider $stockProvider;

    public function __construct(StockProvider $stockProvider)
    {
        $this->stockProvider = $stockProvider;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_stock_for_product', [$this, 'getStockForProduct']),
        ];
    }

    public function getStockForProduct(Product $product): ?float
    {
        return $this->stockProvider->getStockForProduct($product);
    }
}
