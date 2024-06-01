<?php

namespace App\Http\Controllers;

class FinanceController extends Controller
{
    public function journal()
    {
        return view('admin.finance.journal');
    }
    public function journalCreate()
    {
        return view('admin.finance.journal-create');
    }
    public function journalEdit($id)
    {

    }

    public function accountNames()
    {
        return view('admin.finance.account-names');
    }

    public function accountNamesCreate()
    {
        return view('admin.finance.account-names-create');
    }

    public function accountNamesEdit($id)
    {
        return view('admin.finance.account-names-edit', compact('id'));
    }

    public function ledger()
    {
        return view('admin.finance.ledger');
    }
    public function balanceSheet()
    {
        return view('admin.finance.balance-sheet');
    }
    public function worksheet()
    {
        return view('admin.finance.worksheet');
    }
    public function calcBalance()
    {
        return view('admin.finance.calc-balance');
    }
    public function profitAndLoss()
    {
        return view('admin.finance.profit-and-loss');
    }
    public function calcProfitAndLoss()
    {
        return view('admin.finance.calc-profit-and-loss');
    }
}
