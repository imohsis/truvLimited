<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- PortfolioService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's 
 * | portfolio.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class PortfolioService {

    /**
     * 
     * This method is responsible for creating a portfolio entry for a member
     * 
     * @param type $memberId | the id of the member in question.
     * @param type $schemeId | the id of the scheme selected.
     * @param type $startingClassId  | the id of the starting class selected.
     * @param type $stageId | the id of the stage selected.
     * 
     * @return type $portfolio
     * 
     */
    public function createPortfolio($memberId, $schemeId, $startingClassId, $stageId) {
        return \App\Portfolio::create([
                    'member_id' => $memberId,
                    'scheme_id' => $schemeId,
                    'starting_class_id' => $startingClassId,
                    'stage_id' => $stageId
        ]);
    }

}
