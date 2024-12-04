<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockDataSala extends Model
{
    protected $table = 'stock_data_sala';
    protected $appends = ['seccion' , 'sap' , 'descripcion', 'medio' , 'tmp' , 'fecha_inicio' , 'fecha_termino' , 'dis'];
    protected $fillable = [
    	'id',
        'id_cadena',
        'id_campana_faldon',
        'id_sala',
		'id_archivos_faldones_data',
		'stock',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at'
    ];

	public function getSeccionAttribute()
    {
		$p = ArchivosFaldonesData::where('id',$this->id_archivos_faldones_data)->first();
		if($p){
			return $p->seccion;
		}else{
			return '';
		}
    }
	 public function getSapAttribute()
    {
		$p = ArchivosFaldonesData::where('id',$this->id_archivos_faldones_data)->first();
		if($p){
			return $p->sap;
		}else{
			return '';
		}
    }
	public function getDescripcionAttribute()
    {
		$p = ArchivosFaldonesData::where('id',$this->id_archivos_faldones_data)->first();
		if($p){
			return $p->descripcion;
		}else{
			return '';
		}
    }
	public function getMedioAttribute()
    {
		$p = ArchivosFaldonesData::where('id',$this->id_archivos_faldones_data)->first();
		if($p){
			return $p->medio;
		}else{
			return '';
		}
    }
	public function getTmpAttribute()
    {
		$p = ArchivosFaldonesData::where('id',$this->id_archivos_faldones_data)->first();
		if($p){
			return $p->tmp;
		}else{
			return '';
		}
    }
	public function getFechaInicioAttribute()
    {
		$p = CampanaFaldon::where('id',$this->id_campana_faldon)->first();
		if($p){
			return $p->desde;
		}else{
			return '';
		}
    }
	public function getFechaTerminoAttribute()
    {
		$p = CampanaFaldon::where('id',$this->id_campana_faldon)->first();
		if($p){
			return $p->hasta;
		}else{
			return '';
		}
    }
	public function getDisAttribute()
    {
		if($this->stock == 1){
			return true;
		}else{
			return false;
		}
    }
} 
