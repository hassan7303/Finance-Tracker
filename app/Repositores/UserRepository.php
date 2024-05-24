<?php


namespace App\Repositories;

use App\Models\User;

class usersRepository
{

    public $users;
    public function __construct(User $users)
    {
        dd(2224);
        $this->users = $users;
    }
    public function allUsers()
    {
        return $this->users->all();
    }
    public function findUser($id)
    {
        return $this->users->find($id);
    }
    public function createUser($data)
    {
        return $this->users->create($data);
    }
    public function updateUser($id, $data)
    {
        return $this->users->update($id, $data);
    }
    public function deleteUser($id)
    {
        return $this->users->destroy($id);
    }

}