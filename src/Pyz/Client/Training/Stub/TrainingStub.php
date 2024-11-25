<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class TrainingStub
{
    public function __construct(
        protected ZedRequestClientInterface $zedRequestClient
    ) {
    }

    public function getAntelope(
        AntelopeCriteriaTransfer $antelopeCriteriaTransfer
    ): AntelopeResponseTransfer {
        /**
         * @var AntelopeResponseTransfer $antelopeTransfer
         */
        $antelopeTransfer = $this->zedRequestClient->call('/training/gateway/get-antelope',
            $antelopeCriteriaTransfer);
        return $antelopeTransfer;
    }
}