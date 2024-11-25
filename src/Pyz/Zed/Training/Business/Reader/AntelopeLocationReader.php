<?php

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeLocationReader
{
    public function __construct(
        protected TrainingRepositoryInterface $trainingRepository
    ) {
    }

    public function getAntelopeLocationById(
        int $idLocation
    ): ?AntelopeLocationTransfer {
        return $this->trainingRepository->getAntelopeLocationById($idLocation);
    }
}