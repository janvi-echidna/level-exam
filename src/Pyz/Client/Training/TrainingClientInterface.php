<?php

namespace Pyz\Client\Training;


use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;

/**
 * @method \Pyz\Client\Training\TrainingFactory getFactory()
 */
interface TrainingClientInterface
{
    public function getAntelope(
        AntelopeCriteriaTransfer $antelopeCriteriaTransfer
    ): AntelopeResponseTransfer;
}