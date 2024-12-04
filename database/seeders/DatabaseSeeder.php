<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SeederUsuarios::class);
        $this->call(SeederUsuariosSisa::class);
        $this->call(SeederUsuariosJumbo::class);
        $this->call(SeederRoles::class);
        $this->call(SeederRolesUsuarios::class);        
        $this->call(SeederEspacioExhibicion::class);
        $this->call(SeederEstatusUsuarios::class);
        $this->call(SeederEstatusRoles::class);
        $this->call(SeederEstatusSalas::class);
        $this->call(SeederEstatusSeciones::class); 
        $this->call(SeederEstatusCadenas::class);
        $this->call(SeederSeciones::class);
        $this->call(SeederRegiones::class);
        $this->call(SeederProvincias::class);
        $this->call(SeederComunas::class);
        $this->call(SeederCadenas::class);
        $this->call(SeederSalas::class);
        $this->call(SeederUsuarioCadena::class);
        $this->call(SeederSalasSesiones::class);
        $this->call(SeederUsuarioSalas::class);           
        $this->call(SeederPermisos::class);       
        $this->call(SeederPermisosRoles::class);       
        $this->call(SeederModulos::class);
        $this->call(SeederToken::class);
        $this->call(SeederFormatoFaldones::class);
        $this->call(SeederPlantillaTipo::class);
        $this->call(SeederCampanaTipo::class);
        $this->call(SeederCampanaEstado::class);
        $this->call(SeederEstadoMantencion::class);
        $this->call(SeederAlertaArchivosCampanasFaldones::class);
        $this->call(SeederMedioCampanaFaldones::class); 
        $this->call(SeederTipoMedioCampanaFaldones::class); 
        $this->call(SeederTipoPromoCampanaFaldones::class); 
        $this->call(SeederTipoVolanteCatalogoCampanaFaldones::class); 
        $this->call(SeederRechazosArchivosCampanasFaldones::class);
        $this->call(SeederEstadoArchivosFaldones::class);
        $this->call(SeederEstatusArchivosFaldones::class);
        $this->call(SeederProveedores::class);
        $this->call(SeederZonas::class);
        $this->call(SeederEtapaCampana::class);
        $this->call(SeederEstatusPlantillas::class);
        $this->call(SeederPlantillaFormatoQrDisponible::class);
        $this->call(SeederQr::class);
        $this->call(SeederMarcaEstados::class);
        $this->call(SeederFormatosPlantillas::class);
        $this->call(SeederPlantillasCadenas::class);
        $this->call(SeederTurnos::class);
        $this->call(SeederEstatusPromotoras::class);
        $this->call(SeederEtapasPromotoras::class);
        $this->call(SeederInstaladores::class); 
        $this->call(SeederUmbFaldones::class);
        $this->call(SeederMarcas::class);
        $this->call(SeederSeccionEspacio::class);
        $this->call(SeederZonaExhibicion::class);
        $this->call(SeederEspacioZonaExhibicion::class);
        $this->call(SeederMaterial::class);
        $this->call(SeederZonaMaterial::class);
        $this->call(SeederTipoSala::class);
        $this->call(SeederPermisosRepositorios::class);
        $this->call(SeederModuloRepositorio::class);
        $this->call(SeederZonaExhibicionStore::class);
        $this->call(SubSeccionesTableSeeder::class);

    }
}
