<?php

namespace App\Http\Controllers;

use App\Repositories\FinanceRepositoryInterface;
use Illuminate\Http\Request;

class FinanceTrackerController extends Controller
{
    private $financeRepository;

    public function __construct(FinanceRepositoryInterface $financeRepository)
    {
        $this->financeRepository = $financeRepository;
    }
    //از متد ها استفاده کن
    
    public function show(Request $request)
    {
       return $this->financeRepository->getFinance();
    }
    public function create(Request $request)
    {
        dd('create');
    }

    public function update(Request $request)
    {
        dd('update');
    }
    public function delete(Request $request)
    {
        dd('delete');
    }
}
