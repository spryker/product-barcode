<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductBarcode;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\ProductBarcode\Dependency\Service\ProductBarcodeToBarcodeServiceBridge;

/**
 * @method \Spryker\Zed\ProductBarcode\ProductBarcodeConfig getConfig()
 */
class ProductBarcodeDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const SERVICE_BARCODE = 'SERVICE_BARCODE';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = $this->addBarcodeService($container);

        return $container;
    }

    protected function addBarcodeService(Container $container): Container
    {
        $container->set(static::SERVICE_BARCODE, function (Container $container) {
            return new ProductBarcodeToBarcodeServiceBridge(
                $container->getLocator()->barcode()->service(),
            );
        });

        return $container;
    }
}
