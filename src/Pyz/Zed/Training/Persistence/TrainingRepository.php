<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements
    TrainingRepositoryInterface
{
    public function getAntelope(
        AntelopeCriteriaTransfer $antelopeCriteriaTransfer
    ): ?AntelopeTransfer {
        $antelopeEntity = $this->getFactory()->createAntelopeQuery()->filterByName(
            $antelopeCriteriaTransfer->getName(),
        )->findOne();
        if (!$antelopeEntity) {
            return null;
        }
        return (new AntelopeTransfer())->fromArray($antelopeEntity->toArray(),
            true);
    }

    public function getAntelopeLocationById(int $idLocation
    ): ?AntelopeLocationTransfer {
        $antelopeLocationEntity = $this->getFactory()
            ->createAntelopeLocationQuery()->findPk($idLocation);
      
        if (!$antelopeLocationEntity) {
            return null;
        }
        return (new AntelopeLocationTransfer())->fromArray($antelopeLocationEntity->toArray(),
            true);
    }
}