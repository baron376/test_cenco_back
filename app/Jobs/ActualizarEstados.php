<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\FormatoTipo;
use App\Models\PlantillaTipo;
use App\Models\CampanaFaldon;
use App\Models\ArchivosFaldones;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ArchivosFaldonesDataImport;
use App\Models\ArchivosFaldonesDataOriginal;
use App\Models\AlertaArchivosCampanasFaldones;
use App\Models\AlertaValidacionesArchivosCampanasFaldones;
use App\Models\MedioCampanaFaldones;
use App\Models\TipoMedioCampanaFaldones;
use App\Models\TipoVolanteCatalogoCampanaFaldones;
use App\Models\TipoPromoCampanaFaldones;
use App\Models\RechazosArchivosCampanasFaldones;
use App\Models\RechazosValidacionesArchivosCampanasFaldones;
use App\Models\ArchivosFaldonesData;
use App\Models\Cadenas;
use App\Models\Salas;
use App\Models\Secciones;
use App\Models\SalaTipoSala;
use App\Models\TipoSala;
use App\Models\ProductosRegistrados;
use Illuminate\Support\Facades\Auth;
use App\Models\CadenaPlantillaFormatoTipoPromoTexto;
use PDF;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use App\Models\User;
use App\Models\StockDataSala;
use App\Models\UsuarioSalas;
use App\Exports\StockExport;
use App\Models\CampanaInterna;
use App\Models\Promotoras;
use App\Models\Mantencion;
use App\Models\CampanaProveedor;


class ActualizarEstados implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $signature = 'actualizar:estados';
    protected $description = 'Actualiza Estados de campaña segun fecha';

    public function __construct()
    {

    }

    public function handle()
    {
        $campanas_faldones =  CampanaFaldon::whereIn('id_estado_campana',[2,5])->get();
        $campanas_internas =  CampanaInterna::whereIn('id_estado_campana',[2,5])->get();
        $campana_proveedores =  CampanaProveedor::whereIn('id_estado_campana',[2,5])->get();

        foreach($campanas_faldones as $campana_faldon){
            if(strtotime($campana_faldon->desde) <= strtotime(date("Y-m-d"))&& $campana_faldon->id_estado_campana == 5){
                $campana_faldon->id_estado_campana = 2;
                $campana_faldon->save();
            }
            else{
                if(strtotime($campana_faldon->hasta) < strtotime(date("Y-m-d")) && $campana_faldon->id_estado_campana == 2){
                    $campana_faldon->id_estado_campana = 3;
                    $campana_faldon->save();
                }
            }
        }

        foreach($campanas_internas as $campana_interna){
            if(strtotime($campana_interna->desde) <= strtotime(date("Y-m-d"))&& $campana_interna->id_estado_campana == 5){
                $campana_interna->id_estado_campana = 2;
                $campana_interna->save();
            }
            else{
                if(strtotime($campana_interna->hasta) < strtotime(date("Y-m-d")) && $campana_interna->id_estado_campana == 2){
                    $campana_interna->id_estado_campana = 3;
                    $campana_interna->save();
                }
            }
        }

        foreach($campana_proveedores as $campana_proveedor){
            if(strtotime($campana_proveedor->desde) <= strtotime(date("Y-m-d"))&& $campana_proveedor->id_estado_campana == 5){
                $campana_proveedor->id_estado_campana = 2;
                $campana_proveedor->save();
            }
            else{
                if(strtotime($campana_proveedor->hasta) < strtotime(date("Y-m-d")) && $campana_proveedor->id_estado_campana == 2){
                    $campana_proveedor->id_estado_campana = 3;
                    $campana_proveedor->save();
                }
            }
        }
    }
}
