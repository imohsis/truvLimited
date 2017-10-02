<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- ReferralService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's 
 * | referrals.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class ReferralService {

    /**
     * 
     * This method is responsible for retrieving a paginated collection of all 
     * members that was referred by a particular member.
     * 
     * @param \App\Member $member | the member in question.
     * @param limit | an integer value depicting how many records should be re-
     *   turned for each page.
     * 
     * @return paginated collection.
     * 
     */
    public function getAllMembersReferredByThisMember($member, $limit = 15){
       return ($member != null) ? \App\Member::where('refered_by', '=', $member->id)
               ->where('approved_status', '=', true)->paginate($limit) : null;
    }
    
}
