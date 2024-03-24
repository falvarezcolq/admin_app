<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cat_programatica;

class CatProgramatica extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $catProgramaticas = [
//             -- Active: 1709851839954@@127.0.0.1@3306@simplex_db
// INSERT INTO cat_programatica (id_programa, cod_o, denominacion, finalidad_funcion, id_sector, creado_en) 
// VALUES
[0, '*', 'FUNCIONAMIENTO ÓRGANO EJECUTIVO', '111', 14],
[1, '*', 'FUNCIONAMIENTO ÓRGANO DELIBERATIVO', '111', 14],
[2, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[3, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[4, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[5, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[6, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[7, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[8, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[9, '2 – 09', 'ADMINISTRACION CENTRAL', '111', 14],
[10, '10', 'PROMOCIÓN Y FOMENTO A LA PRODUCCIÓN AGROPECUARIA', '4.2 – 10.9', 1],
[11, '11', 'SANEAMIENTO BÁSICO', '5.2 – 6.3', 10],
[12, '12', 'CONSTRUCCIÓN Y MANTENIMIENTO DE RIEGO Y/O MICRORIEGO', '421', 1],
[13, '13', 'DESARROLLO Y PRESERVACIÓN DEL MEDIO AMBIENTE', '5', 19],
[14, '14', 'ASEO URBANO, MANEJO Y TRATAMIENTO DE RESIDUOS SÓLIDOS', '51', 10],
[15, '15', 'FUENTES DE ENERGÍA Y APOYO A LA ELECTRIFICACIÓN', '4.3.5 – 4.3.6', 5],
[16, '16', 'SERVICIO DE ALUMBRADO PÚBLICO', '64', 11],
[17, '17', 'INFRAESTRUCTURA URBANA Y RURAL', '4.4.3 – 4.5.1-6.1', 11],
[18, '18', 'GESTIÓN DE CAMINOS VECINALES', '451', 6],
[19, '19', 'SERVICIO DE CATASTRO URBANO Y RURAL', '6.1 – 6.2 – 4.9', 11],
[20, '20', 'GESTIÓN DE SALUD / 20 000 99 Servicios de Salud Universal y Gratuita – SUS / 20 000 150 Prevención, Control y Atención del Coronavirus', '7 – 10.9-10.4.1 74', 8],
[21, '21', 'GESTIÓN DE EDUCACIÓN / 21 000 88 Fondo de Fomento a la Educación Cívico Patriótica', '9 – 10.9 /98', 9],
[22, '22', 'DESARROLLO Y PROMOCIÓN DEL DEPORTE', '8.1-8.6-10.9', 24],
[23, '23', 'PROMOCION Y CONSERVACION DE CULTURA Y PATRIMONIO', '8.2 – 8.6 – 10.9', 22],
[24, '24', 'DESARROLLO Y FOMENTO DEL TURISMO', '4.7.1 – 4.7.2 – 4.7.3-10.9', 20],
[25, '25', 'PROMOCIÓN Y POLÍTICAS PARA GRUPOS VULNERABLES Y DE LA MUJER /25 00 88 Renta Dignida / 25 00 89 Ayuda Económica para Personas con Discapacidad', '10.9 – 10.1 – 10.2 – 10.1.2-10.4.1', 21],
[26, '26', 'DEFENSA Y PROTECCIÓN DE LA NIÑEZ Y ADOLESCENCIA', '10.9 – 10.4.1', 21],
[27, '27', 'VIALIDAD Y TRANSPORTE PÚBLICO', '451', 6],
[28, '28', 'DEFENSA DEL CONSUMIDOR', '4.1.1 – 4.7.1', 13],
[29, '29', 'SERVICIO DE FAENADO DE GANADO', '4.9 – 4.2.4', 1],
[30, '30', 'SERVICIO DE INHUMACIÓN, EXHUMACIÓN, CREMACIÓN Y TRASLADO DE RESTOS', '6.1 – 6.2', 11],
[31, '31', 'GESTION DE RIESGOS', '1.01', 12],
[32, '32', 'RECURSOS HÍDRICOS', '63', 12],
[33, '33', 'SERVICIOS DE SEGURIDAD CIUDADANA /33 000 80 Fortalecimiento a la FELCV', '3 -10.9 / 10,9,1', 15],
[34, '34', 'FORTALECIMIENTO INSTITUCIONAL / 34 00 88 Sistema Asociativo Municipal / 34 00 99 Participación y Control Social (PyCS)', '1.1.1 – 6.2 / 62 /62', 18],
[35, '35', 'FOMENTO AL DESARROLLO ECONOMICO LOCAL Y PROMOCION DEL EMPLEO', '4.1 – 4.4.2 – 10.9', 3],
[36, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[37, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[38, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[39, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[40, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[41, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[42, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[43, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[44, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[45, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[46, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[47, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[48, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[49, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[50, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[51, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[52, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[53, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[54, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[55, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[56, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[57, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[58, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[59, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[60, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[61, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[62, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[63, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[64, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[65, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[66, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[67, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[68, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[69, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[70, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[71, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[72, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[73, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[74, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[75, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[76, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[77, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[78, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[79, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[80, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[81, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[82, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[83, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[84, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[85, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[86, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[87, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[88, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[89, '36 al 89', 'OTROS PROGRAMAS ESPECÍFICOS', '0', 0],
[97, '97', 'PARTIDAS NO ASIGNABLES A PROGRAMAS – ACTIVOS FINANCIEROS (Grupo 50000 y otras previsiones)', '112', 14],
[98, '98', 'PARTIDAS NO ASIGNABLES A PROGRAMAS – TRANSFERENCIAS (Grupo 70000)', '18', 14],
[99, '99', 'PARTIDAS NO ASIGNABLES A PROGRAMAS – DEUDAS (Grupo 60000)', '17', 17]
        ];

        foreach ($catProgramaticas as $catProgramatica) {
            cat_programatica::create([
                'id_programa' => $catProgramatica[0],
                'cod_o' => $catProgramatica[1],
                'denominacion' => $catProgramatica[2],
                'finalidad_funcion' => $catProgramatica[3],
                'id_sector' => $catProgramatica[4],
            ]);
        }
    }
}
