<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- SchemeService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to scheme 
 * | account.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class SchemeService {
    
    /**
     * 
     * This method is responsible for retrieving a Scheme by it's id.
     * 
     * @param type $schemeId | the id of the scheme entry to be retrieved.
     * 
     * @return type
     * 
     */
    public function getSchemeById($schemeId){
        return \App\Scheme::find($id);
    }
}
