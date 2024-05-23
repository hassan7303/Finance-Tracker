<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function allUsers();
    public function findUser($id);
    public function createUser(array $data);
    public function updateUser($id, array $data);
    public function deleteUser($id);
}