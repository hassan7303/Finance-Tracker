<?php

namespace App\Repositories;

interface FinanceRepositoryInterface
{
    public function getFinance();
    public function createFinance(array $data);
    public function updateFinance($id, array $data);
    public function deleteFinance($id);
}
