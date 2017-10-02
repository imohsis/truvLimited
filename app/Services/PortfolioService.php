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
    
    /**
     * 
     * This method is responsible for retrieving all $member
     * 
     * @param $member | the member whose portfolio is to be retrieved.
     * 
     * @return array collection
     * 
     */
    public function getAllPortfoliosForAMember($member){
        if($member != null){
            return \App\Portfolio::where('member_id', '=', $member->id)->get();
        }
        return [];
    }
    
    /**
     * 
     * This method is responsible for adding(crediting) a specified amount to a 
     * member portfolio record. This method is mostly called when you want to
     * add 1 as a result of a referred member.
     * 
     * @param \App\Member $memberToCredit | the member to be credited.
     * 
     * @param int $amount | the amount to credit.
     * 
     * @return boolean
     * 
     */
    public function creditMemberPortfolioStageId($memberToCredit, $amount){
        if($memberToCredit == null){
            $portfolios = $this->getAllPortfoliosForAMember($memberToCredit);
            if(count($portfolios) >  0){
               $portfolio =  $portfolios->get(0);
               $portfolio->stage_id += $amount;
               return $portfolio->save();
            }
        }
        return false;
    }
}
