<?php


namespace App\Repositories;

use App\Models\Finance;

class FinanceRepository 
{
    
    public $finance;
    public function __construct(Finance $finance)
    {
        $this->finance = $finance;
    }
    public function all()
    {
        return $this->finance->all();
    }
    public function find($id)
    {
        return $this->finance->find($id);
    }
    public function create($data)
    {
        return $this->finance->create($data);
    }
    public function update($id, $data)
    {
        return $this->finance->update($id, $data);
    }
    public function delete($id)
    {
        return $this->finance->destroy($id);
    }

}