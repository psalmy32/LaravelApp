<?php

namespace App\Repositories\User;

interface UserInterface {
    
    public function profile();

    public function updateProfilePicture($request);

    public function updateProfileCoverPhoto($request);

    public function updateProfile($request);

    public function changePassword($request);
}