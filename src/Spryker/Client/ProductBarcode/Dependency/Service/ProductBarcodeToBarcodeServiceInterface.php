<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductBarcode\Dependency\Service;

use Generated\Shared\Transfer\BarcodeResponseTransfer;

interface ProductBarcodeToBarcodeServiceInterface
{
    public function generateBarcode(string $text, ?string $generatorPlugin = null): BarcodeResponseTransfer;
}
