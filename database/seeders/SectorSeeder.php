<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;
use App\Models\subSector1;
use App\Models\subsector2;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
//     {
//         INSERT INTO sector (id_sector, denominacion, sigla, creado_en)
// VALUES
    $sectores = [
    [1, 'AGROPECUARIO', 'AGROP'],
    [2, 'MINERO', 'MINER'],
    [3, 'INDUSTRIA', 'INDUS'],
    [4, 'HIDROCARBUROS', 'HIDRO'],
    [5, 'ENERGIA', 'ENERG'],
    [6, 'TRANSPORTES', 'TRANS'],
    [7, 'COMUNICACIONES', 'COMUN'],
    [8, 'SALUD', 'SALUD'],
    [9, 'EDUCACIÓN', 'EDUCA'],
    [10, 'SANEAMIENTO BÁSICO', 'SANEA'],
    [11, 'URBANISMO Y VIVIENDA', 'URBVIV'],
    [12, 'RECURSOS HÍDRICOS', 'RECH'],
    [13, 'COMERCIO Y FINANZAS', 'COMER'],
    [14, 'ADMINISTRACION GENERAL', 'AGUB'],
    [15, 'ORDEN PUBLICO Y SEGURIDAD CIUDADANA', 'POLIC'],
    [16, 'DEFENSA NACIONAL', 'DEF'],
    [17, 'DEUDA PÚBLICA', 'DEUDA'],
    [18, 'MULTISECTORIAL', 'MULTI'],
    [19, 'MEDIO AMBIENTE', 'MEDAM'],
    [20, 'TURISMO', 'TURIS'],
    [21, 'SEGURIDAD SOCIAL', 'SEGSOC'],
    [22, 'CULTURA', 'CULTU'],
    [23, 'JUSTICIA', 'JUSTC'],
    [24, 'DEPORTES', 'DEPOR'],
    ];
    foreach ($sectores as $sector) {
        Sector::create([
            'id_sector' => $sector[0],
            'denominacion' => $sector[1],
            'sigla' => $sector[2],
        ]);
    }

    }
}
