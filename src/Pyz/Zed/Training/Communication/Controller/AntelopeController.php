<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class AntelopeController extends AbstractController
{
    /**
     * @param Request $request
     * @return array<string,mixed>
     */
    public function addAction(Request $request): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName($request->get('name') ?? 'Oskar');
        $this->getFacade()->createAntelope($antelopeTransfer);
        return $this->viewResponse(['antelope' => $antelopeTransfer]);
    }
}