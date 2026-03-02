<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductBarcode\Persistence;

use Generated\Shared\Transfer\ProductConcreteTransfer;

interface ProductBarcodeRepositoryInterface
{
    public function getProductById(int $idProduct): ProductConcreteTransfer;
}
