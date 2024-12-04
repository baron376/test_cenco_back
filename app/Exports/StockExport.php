<?php 
namespace App\Exports;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StockExport implements FromView
{
    public $data;

    public function __construct($data){
        $this->data = $data;
    }
    public function view(): View
    {
        return view('Faldones.Stock.stock_sala', [
            'data' => $this->data
        ]);
    }
}