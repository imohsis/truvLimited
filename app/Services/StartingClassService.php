<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- StartingLevelService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to starting level 
 * | operations.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class StartingClassService {
    
    /**
     * 
     * This method is responsible for retrieving a Starting Level by it's id.
     * 
     * @param type $id | the id of the starting level to be retrieved.
     * 
     * @return StartingLevel.
     * 
     */
    public function getStartingClassById($id){
       return \App\StartingClass::find($id); 
    }
}
