<?php

namespace Pyz\Zed\Training\Business;

use Pyz\Zed\Training\Business\Reader\AntelopeLocationReader;
use Pyz\Zed\Training\Business\Reader\AntelopeReader;
use Pyz\Zed\Training\Business\Writer\AntelopeWriter;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method TrainingEntityManagerInterface getEntityManager()
 * @method TrainingRepositoryInterface getRepository()
 */
class TrainingBusinessFactory extends AbstractBusinessFactory
{
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter($this->getEntityManager());
    }

    public function createAntelopeLocationWriter(): AntelopeLocationWriter
    {
        return new AntelopeLocationWriter($this->getEntityManager());
    }

    public function getTrainingEntityManager(): TrainingEntityManagerInterface
    {
        return $this->getEntityManager();
    }

    public function createAntelopeReader(): AntelopeReader
    {
        return new AntelopeReader($this->getRepository());
    }

    public function createAntelopeLocationReader(): AntelopeLocationReader
    {
        return new AntelopeLocationReader($this->getRepository());
    }
}