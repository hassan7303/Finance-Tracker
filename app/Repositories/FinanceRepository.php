<?php

namespace App\Repositories;

use App\Repositories\FinanceRepositoryInterface;
use App\Models\Finance;

class FinanceRepository implements FinanceRepositoryInterface
{
    public $finance;
    public function __construct(Finance $finance)
    {
        $this->finance = $finance;
    }
    public function getFinance()
    {
        return $this->finance->all();
    }
    public function createFinance($data)
    {
        return $this->finance->create($data);
    }
    public function updateFinance($id, $data)
    {
        return $this->finance->update($id, $data);
    }
    public function deleteFinance($id)
    {
        return $this->finance->destroy($id);
    }

}