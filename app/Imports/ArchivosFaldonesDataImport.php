<?php 
namespace App\Imports;

use App\Models\ArchivosFaldonesDataOriginal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\RechazosValidacionesArchivosCampanasFaldones;
use App\Models\RechazosArchivosCampanasFaldones;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
class ArchivosFaldonesDataImport implements ToModel , WithHeadingRow , WithCalculatedFormulas
{   
    public $idFile;
    public $idUserSecion;

    private $row = 1;

    public function __construct($idFile, $idUserSecion){
        $this->idFile = $idFile;
        $this->idUserSecion =  $idUserSecion;
    }
        public function model(array $row)
        {       \Log::info($row);
                if (array_key_exists('cadena', $row) && array_key_exists('locales', $row) && array_key_exists('medio', $row) && array_key_exists('tipo_medio', $row) && array_key_exists('tipo_de_volante_o_catalogo_especial', $row) && array_key_exists('n_promocion', $row) && array_key_exists('seccion', $row) && array_key_exists('nombre_generico_promocion', $row) && array_key_exists('sap', $row) && array_key_exists('cod_barra', $row) && array_key_exists('umb', $row) && array_key_exists('descripcion', $row) && array_key_exists('precio_referencia_moda_o_normal', $row) && array_key_exists('tipo_promo', $row) && array_key_exists('combinacion', $row) && array_key_exists('tmp', $row) && array_key_exists('tc', $row)  && array_key_exists('cuotas', $row)  && array_key_exists('valor_cuota', $row) && array_key_exists('costo_total', $row) && array_key_exists('cae', $row)) {
                    if($row['nombre_generico_promocion'] && $row['sap'] && $row['fecha_inicio_promo'] && $row['fecha_termino_promo']){
                        return new ArchivosFaldonesDataOriginal([
                            'id_archivo' =>$this->idFile,
                            'numero_fila'=> ++$this->row , 
                            'cadena'     => $row['cadena'],
                            'locales'     => $row['locales'],
                            'medio'     => $row['medio'],
                            'tipo_medio'     => $row['tipo_medio'],
                            'tipo_volante_catalogo'     => $row['tipo_de_volante_o_catalogo_especial'],
                            'n_promocion'     => $row['n_promocion'],
                            'seccion'     => $row['seccion'],
                            'nombre_generico_promocion'     => $row['nombre_generico_promocion'],
                            'sap'     => $row['sap'],
                            'cod_barra'     => $row['cod_barra'],
                            'umb'     => $row['umb'],
                            'descripcion'     => $row['descripcion'],
                            'precio_referencia_moda'     => $row['precio_referencia_moda_o_normal'],
                            'tipo_promo'     => $row['tipo_promo'],
                            'combinacion'     => $row['combinacion'],
                            'tmp'     => $row['tmp'],
                            'tc'     => $row['tc'],
                            'cuotas'     => $row['cuotas'],
                            'valor_cuota'     => $row['valor_cuota'],
                            'costo_total'     => $row['costo_total'],
                            'cae'     => $row['cae'],
                            'puntos_cencosud'     => $row['puntos_con_tarjeta_cencosud'],
                            'puntos_otros_medios'     => $row['puntos_con_otros_medios_de_pago'],
                            'fecha_inicio_promo'     => is_numeric($row['fecha_inicio_promo'])  ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_inicio_promo'])->format('d-m-Y') : $row['fecha_inicio_promo'],
                            'fecha_termino_promo'    => is_numeric($row['fecha_termino_promo']) ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_termino_promo'])->format('d-m-Y') : $row['fecha_termino_promo'],
                            'id_usuario_crear'     => $this->idUserSecion,
                            'id_usuario_modifica'     => $this->idUserSecion,
                            'estatus_registro' =>'REGISTRADO'  
                        ]);
                }else{
                    return null;
                }
            }else {
                if (array_key_exists('cadena', $row) && array_key_exists('locales', $row) && array_key_exists('medio', $row) && array_key_exists('tipo_medio', $row) && array_key_exists('tipo_de_volante_o_catalogo_especial', $row) && array_key_exists('n_promocion', $row) && array_key_exists('seccion', $row) && array_key_exists('nombre_generico_promocion', $row) && array_key_exists('sap', $row) && array_key_exists('cod_barra', $row) && array_key_exists('umb', $row) && array_key_exists('descripcion', $row) && array_key_exists('precio_referencia_moda_o_normal', $row) && array_key_exists('tipo_promo', $row) && array_key_exists('combinacion', $row) && array_key_exists('tmp', $row) && array_key_exists('tc', $row)) {
                    return new ArchivosFaldonesDataOriginal([
                        'id_archivo' =>$this->idFile,
                        'numero_fila'=> ++$this->row , 
                        'cadena'     => $row['cadena'],
                        'locales'     => $row['locales'],
                        'medio'     => $row['medio'],
                        'tipo_medio'     => $row['tipo_medio'],
                        'tipo_volante_catalogo'     => $row['tipo_de_volante_o_catalogo_especial'],
                        'n_promocion'     => $row['n_promocion'],
                        'seccion'     => $row['seccion'],
                        'nombre_generico_promocion'     => $row['nombre_generico_promocion'],
                        'sap'     => $row['sap'],
                        'cod_barra'     => $row['cod_barra'],
                        'umb'     => $row['umb'],
                        'descripcion'     => $row['descripcion'],
                        'precio_referencia_moda'     => $row['precio_referencia_moda_o_normal'],
                        'tipo_promo'     => $row['tipo_promo'],
                        'combinacion'     => $row['combinacion'],
                        'tmp'     => $row['tmp'],
                        'tc'     => $row['tc'],
                        'fecha_inicio_promo'     => is_numeric($row['fecha_inicio_promo'])  ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_inicio_promo'])->format('d-m-Y') : $row['fecha_inicio_promo'],
                        'fecha_termino_promo'    => is_numeric($row['fecha_termino_promo']) ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_termino_promo'])->format('d-m-Y') : $row['fecha_termino_promo'],
                        'id_usuario_crear'     => $this->idUserSecion,
                        'id_usuario_modifica'     => $this->idUserSecion,
                        'estatus_registro' =>'REGISTRADO'  
                    ]);
                }else{
                    $idRechazo =  RechazosArchivosCampanasFaldones::where('cod_rechazo' , 306)->first();
                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                    $newAlert->id_archivo = $this->idFile;
                    $newAlert->id_rechazos_archivos_campanas_faldones = $idRechazo->id;
                    $newAlert->descripcion = 'Error en estructura de Archivo';
                    $newAlert->numero_fila = 0;
                    $newAlert->campo_asociado = 'cabecera_archivo';
                    $newAlert->save();
                    return null;
                }
            }
        }

}