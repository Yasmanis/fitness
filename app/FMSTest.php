<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FMSTest extends Model
{
    protected $fillable = [
        'user_id', 'santadillasPF', 'santadillasObservaciones', 'paso_vallaI', 'paso_vallaD', 'paso_vallaPF', 'paso_vallaObservaciones', 'estocada_lineaI', 'estocada_lineaD', 'estocada_lineaPF', 'estocada_lineaObservaciones', 'movilidad_hombrosI', 'movilidad_hombrosD', 'movilidad_hombrosPF', 'movilidad_hombrosObservaciones', 'elev_activa_pierna_rectaI', 'elev_activa_pierna_rectaD', 'elev_activa_pierna_rectaPF', 'elev_activa_pierna_rectaObservaciones', 'estab_tronco_en_flexionI', 'estab_tronco_en_flexionD', 'estab_tronco_en_flexionPF', 'estab_tronco_en_flexionObservaciones', 'estab_tronco_en_rotacionI', 'estab_tronco_en_rotacionD', 'estab_tronco_en_rotacionPF', 'estab_tronco_en_rotacionObservaciones', 'total'
    ];
}
