<?php

namespace App\Console\Commands;
use App\Models\CampanaProveedor;

use Illuminate\Console\Command;

class CambiarEstado extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:actualizarEstado';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para actualizar estado de campañas vigentes en camapañas proveedores';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $campanasVigentes =  CampanaProveedor::where('desde', '<=', now()->toDateString())
                                            ->where('hasta', '>=', now()->toDateString())
                                            ->get();
        $campanasVencidas =  CampanaProveedor::where('desde', '<', now()->toDateString())->where('hasta', '<', now()->toDateString())->get();
        
        
        foreach ($campanasVigentes as $item) {
          $campanaVigente = CampanaProveedor::find($item->id);
          $campanaVigente->id_estado_campana = 2;
          $campanaVigente->save();
        }

        foreach ($campanasVencidas as $item) {
            $campanasVencidas = CampanaProveedor::find($item->id);
            $campanasVencidas->id_estado_campana = 3;
            $campanasVencidas->save();
          }
    }
}
