<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- StartingClassService Class -----------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to starting
 * | classes.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class StartingClassService {
    
    /**
     * 
     * This method is responsible for checking the is the startingClass specified
     * is a valid starting class.
     * 
     * @param int $startingClassId | the id in question.
     * 
     * @return boolean
     * 
     */
    public function confirmStartingClassValidity($startingClassId){
        switch ($startingClassId) {
            case ($startingClassId == \App\StartingClasses::$BRONZE):
                return true;
            case ($startingClassId == \App\StartingClasses::$SILVER):
                return true;
            case ($startingClassId == \App\StartingClasses::$GOLD):
                return true;
            default:
                return false;
        }
    }
    
}
