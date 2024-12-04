<?php

namespace App\Console\Commands;

use App\Models\Salas;
use App\Models\TpElementosCampana;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SalaElementoCupos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sala_elemento_cupos {--sala=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Llenar tabla sala_elemento_cupos con cupos 1';

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
        $sala = $this->option('sala');

        $sql = <<<'EOF'
        SELECT
            ee.id AS id_espacio,
            ee.nombre AS espacio,
            s.id AS id_seccion,
            s.nombre AS seccion,
            ss.id AS id_sub_seccion,
            ss.nombre AS sub_seccion,
            null AS cupo,
            null AS cdg_sala
        FROM
            espacio_exhibicion ee
            JOIN seccion_espacio se ON ee.id = se.id_espacio
            JOIN secciones s ON se.id_seccion = s.id
            JOIN sub_secciones ss ON s.id = ss.seccion_id;
EOF;

        $salas = Salas::select(['id'])->get()->pluck('id')->toArray();

        if (is_numeric($sala) && in_array($sala, $salas)) {
            $salas = [$sala];
        } elseif (is_numeric($sala) && ! in_array($sala, $salas)) {
            $this->warn(sprintf('"%s" no es un id existente de sala.', $sala));
            exit(0);
        } elseif (! is_numeric($sala) && $sala != '' && $sala === null) {
            $this->warn(sprintf('"%s" no es un número entero positivo.', $sala));
            exit(0);
        } else {
            $ask = $this->ask('¿ Esta seguro de realizar la actualización para las '.count($salas).' salas ? (s=si/n=no)');

            if (mb_strtolower(trim($ask)) != 's') {
                exit(0);
            }
        }

        $elementos = TpElementosCampana::select('id')->get();
        $espacios = DB::select($sql);

        foreach ($salas as $salaId) {
            foreach ($espacios as $espacio) {
                foreach ($elementos as $elemento) {
                    $this->info(sprintf('sala[%s] elemento[%s] id_seccion[%s] id_sub_seccion[%s]', $salaId, $elemento->id, $espacio->id_seccion, $espacio->id_sub_seccion));

                    DB::table('sala_elemento_cupos')->updateOrInsert([
                        'id_sala' => $salaId,
                        'id_elemento' => $elemento->id,
                        'id_seccion' => $espacio->id_seccion,
                        'id_sub_seccion' => $espacio->id_sub_seccion,
                    ], [
                        'id_sala' => $salaId,
                        'id_elemento' => $elemento->id,
                        'id_seccion' => $espacio->id_seccion,
                        'id_sub_seccion' => $espacio->id_sub_seccion,
                        'n_cupos' => 1,
                    ]);
                }
            }
        }

        return 0;
    }
}
