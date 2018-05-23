<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductBarcode\Dependency\Client;

use Generated\Shared\Transfer\BarcodeResponseTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

class ProductBarcodeToZedRequestBridge implements ProductBarcodeToZedRequestInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct($zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param string $url
     * @param \Spryker\Shared\Kernel\Transfer\TransferInterface $object
     * @param int|null $timeoutInSeconds
     *
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface|\Generated\Shared\Transfer\BarcodeResponseTransfer
     */
    public function call($url, TransferInterface $object, $timeoutInSeconds = null): BarcodeResponseTransfer
    {
        return $this->zedRequestClient->call($url, $object, $timeoutInSeconds);
    }
}
