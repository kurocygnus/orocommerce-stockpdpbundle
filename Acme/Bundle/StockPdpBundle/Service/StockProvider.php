<?php

declare(strict_types=1);

namespace Acme\Bundle\StockPdpBundle\Service;

use Oro\Bundle\InventoryBundle\Provider\InventoryQuantityProviderInterface;
use Oro\Bundle\ProductBundle\Entity\Product;

class StockProvider
{
    public function __construct(
        private InventoryQuantityProviderInterface $inventoryQuantityProvider
    ) {}

    public function getStock(Product $product): ?float
    {
        $unit = $product->getPrimaryUnitPrecision()->getUnit();
        return floatval($this->inventoryQuantityProvider->getAvailableQuantity($product, $unit));
    }

    public function getStockForProduct(Product $product): ?float
    {
        return $this->getStock($product);
    }
}
