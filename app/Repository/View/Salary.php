<?php

namespace App\Repository\View;

use App\Repository\View;
use Illuminate\Database\Eloquent\Builder;

class Salary extends \App\Models\Salary implements View
{
    protected $table='salaries';
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
            ['label' => 'Referensi',],
            ['label' => 'Nama Pegawai',],
            ['label' => 'Dibuat pada', ],
            ['label' => 'Gaji setelah potongan', ],
            ['label' => 'Tindakan'],
        ];
    }

    public static function tableData($data = null): array
    {
//        '', '', '', '', '', '',
        $salary =  $data->basic_salary+$data->bonus+$data->overtime+$data->transportation-$data->debt_deduction-$data->employee_cooperative_deductions;
        $link = route('salary.edit', $data->id);
        $link2 = route('salary.download', $data->id);
        return [
            ['type' => 'index'],
            ['type' => 'string', 'data' => $data->reference],
            ['type' => 'string', 'data' => $data->user->name],
            ['type' => 'string', 'data' => $data->created_at->format('d/M/Y')],
            ['type' => 'string', 'data' => 'Rp. '. thousand_format($salary)],
            ['type' => 'raw_html', 'data' => "
            <div class='gap-3 flex'>
            <a class='btn bg-wishka-400' href='$link'><i class='ti ti-pencil'></i></a>
            <a class='btn bg-red-600' href='#' wire:click='deleteItem($data->id)'><i class='ti ti-trash'></i></a>
            <a class='btn bg-wishka-700' target='_blank' href='$link2'><i class='ti ti-download'></i></a>
</div>

            "],
        ];
    }
}
