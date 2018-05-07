<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductBarcode\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\ProductBarcode\Business\Barcode\ProductBarcodeGenerator;
use Spryker\Zed\ProductBarcode\Business\Barcode\ProductBarcodeGeneratorInterface;
use Spryker\Zed\ProductBarcode\Business\Product\ProductSkuProvider;
use Spryker\Zed\ProductBarcode\Business\Product\ProductSkuProviderInterface;
use Spryker\Zed\ProductBarcode\Dependency\Facade\ProductBarcodeToProductFacadeInterface;
use Spryker\Zed\ProductBarcode\Dependency\Service\ProductBarcodeToBarcodeServiceInterface;
use Spryker\Zed\ProductBarcode\ProductBarcodeDependencyProvider;

/**
 * @method \Spryker\Zed\ProductBarcode\ProductBarcodeConfig getConfig()
 */
class ProductBarcodeBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\ProductBarcode\Business\Barcode\ProductBarcodeGeneratorInterface
     */
    public function createProductBarcodeGenerator(): ProductBarcodeGeneratorInterface
    {
        return new ProductBarcodeGenerator(
            $this->getBarcodeService(),
            $this->createProductSkuProvider()
        );
    }

    /**
     * @return \Spryker\Zed\ProductBarcode\Business\Product\ProductSkuProviderInterface
     */
    public function createProductSkuProvider(): ProductSkuProviderInterface
    {
        return new ProductSkuProvider(
            $this->getProductFacade()
        );
    }

    /**
     * @return \Spryker\Zed\ProductBarcode\Dependency\Facade\ProductBarcodeToProductFacadeInterface
     */
    public function getProductFacade(): ProductBarcodeToProductFacadeInterface
    {
        return $this->getProvidedDependency(ProductBarcodeDependencyProvider::FACADE_PRODUCT);
    }

    /**
     * @return \Spryker\Zed\ProductBarcode\Dependency\Service\ProductBarcodeToBarcodeServiceInterface
     */
    public function getBarcodeService(): ProductBarcodeToBarcodeServiceInterface
    {
        return $this->getProvidedDependency(ProductBarcodeDependencyProvider::SERVICE_BARCODE);
    }
}
