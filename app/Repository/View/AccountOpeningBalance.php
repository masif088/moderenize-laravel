<?php

namespace App\Repository\View;

use App\Repository\View;
use Illuminate\Database\Eloquent\Builder;

class AccountOpeningBalance extends \App\Models\AccountOpeningBalance implements View
{
    public static function tableSearch($params = null): Builder
    {
        $query = $params['query'];

        return empty($query) ? static::query() : static::query();
    }

    public static function tableView(): array
    {
        return [
            'searchable' => true,
        ];
    }

    public static function tableField(): array
    {
        //        'bank_name','account_number', 'account_in_name', 'note', 'status_id'
        return [
            ['label' => '#', 'sort' => 'id', 'width' => '7%'],
            ['label' => 'Nama Account'],
            ['label' => 'Periode'],
            ['label' => 'Jumlah'],
            ['label' => 'Tindakan'],
        ];
    }

    public static function tableData($data = null): array
    {
        $link = route('finance.account-opening-balance.edit', $data->id);

        return [
            ['type' => 'index'],
            ['type' => 'string', 'data' => $data->accountName->code.' - '.$data->accountName->title],
            ['type' => 'string', 'data' => month_name($data->month).' '.$data->year],
            ['type' => 'string', 'data' => 'Rp. '.thousand_format($data->opening_balances)],
            ['type' => 'raw_html', 'data' => "
            <a class='btn bg-wishka-400' href='$link'><i class='ti ti-pencil'></i></a>
            "],
        ];
    }
}