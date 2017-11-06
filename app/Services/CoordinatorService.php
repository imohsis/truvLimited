<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- CoordinatorService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to coordinators
 * | account management.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class CoordinatorService {
    
    /**
     * 
     * This method is responsible for creating a new coordinator.
     * 
     * @param type $name | the name of the coordinator been created
     * @param type $email | the email of the coordinator to be created
     * @param type $password | the password for the coordinator.
     * 
     * @return type
     * 
     */
    public function createCoordinator($name, $email, $password, $role){

        $checkIfExist = \App\User::select('name')->where('email','=',$email)->get();

        if (count($checkIfExist) > 0){
           return "Not empty";
        }else {

            return \App\User::create([

                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
                'role_id' => $role,

            ]);
        }
    }
    
    /**
     * 
     * This method is responsible for retrieving a paginated collection
     * of coordinators on the platform.
     * 
     * @return
     * 
     */
    public function getAllCoordinators($limit = 15){
        return \App\User::where('role_id', '=', \App\UserRole::$COORDINATOR)->paginate($limit);
    }
}
