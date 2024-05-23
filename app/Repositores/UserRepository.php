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
    public function all()
    {
        return $this->users->all();
    }
    public function find($id)
    {
        return $this->users->find($id);
    }
    public function create($data)
    {
        return $this->users->create($data);
    }
    public function update($id, $data)
    {
        return $this->users->update($id, $data);
    }
    public function delete($id)
    {
        return $this->users->destroy($id);
    }

}