<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- MemberService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's 
 * | account.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class MemberService {
    
    /**
     * 
     * This method is responsible for handling the creation of a new member.
     * 
     * @param type $fullName | the full name of the member being signed up.
     * @param type $phone | the phone number of the member being signed up.
     * @param type $email | the email address of the member being signed up.
     * @param type $location | the location of the member being signed up.
     * @param type $approvalStatus | the approved status of the member being
     *   signed up.
     * @param type $reviewStatus | a boolean value depicting if this membership
     *   signing up has been reviewed or not.
     * @param type $userId | the user id of the user record corresponding to this
     *   account.
     * 
     * @return Member | the created member.
     * 
     */
    public function createMember($fullName, $phone, $email, $location,
            $approvalStatus, $reviewStatus, $userId){
        return Member::create([
            'full_name' => $fullName,
            'phone' => $phone,
            'email' => $email,
            'location' => $location,
            'approvalStatus' => $approvalStatus,
            'reviewStatus' => $reviewStatus,
            'memberId' => $userId
        ]);
    }
}
