<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;
use App\Models\subSector1;
use App\Models\subsector2;

class SubSector1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
//     {
//         INSERT INTO sector (id_sector, denominacion, sigla, creado_en)
// VALUES
    $subsector1s = [
        // INSERT INTO subsector1 [ id_sector,id_subsector1, denominacion, sigla, creado_e])
        // VALUES
            [ 1, 1, 'AGRÍCOLA', 'AGRIC'],
            [ 1, 2, 'PECUARIA', 'PECUA'],
            [ 1, 3, 'DESARROLLO PESQUERO Y ACUICOLA', 'SILVI'],
            [ 1, 4, 'SEGURIDAD Y SOBERANIA ALIMENTARIA', 'SEGAL'],
            [ 1, 5, 'RIEGO', 'RIE'],
            [ 1, 6, 'MULTIPROGRAMA AGROPECUARIO', 'MAGRP'],
            [ 1, 7, 'OTROS AGROPECUARIO', 'OAGR'],
            [ 2, 1, 'DESARROLLO MINERO', 'MIN'],
            [ 3, 1, 'AGROINDUSTRIA', 'AGROI'],
            [ 3, 2, 'INDUSTRIA MANUFACTURERA', 'INMAN'],
            [ 3, 3, 'MULTIPROGRAMA INDUSTRIA', 'MGRP'],
            [ 3, 4, 'OTROS INDUSTRIA', 'OTRIND'],
            [ 3, 5, 'INVESTIGACIÓN INDUSTRIA', 'INVIND'],
            [ 4, 1, 'HIDROCARBUROS', 'HID'],
            [ 5, 1, 'ENERGIA ELECTRICA', 'ENELC01'],
            [ 5, 2, 'ENERGIAS ALTERNATIVAS', 'OTRENEL'],
            [ 5, 3, 'OTROS ENERGÍA', 'OTENE'],
            [ 5, 4, 'MULTIPROGRAMA ENERGÍA', 'MENER'],
            [ 5, 5, 'INVESTIGACIÓN ENERGÍA', 'INVDEN'],
            [ 6, 1, 'CAMINERO', 'CAM'],
            [ 6, 2, 'FERROVIARIO', 'FER'],
            [ 6, 3, 'AÉREO', 'AER'],
            [ 6, 4, 'TRANSPORTE FLUVIAL Y LACUSTRE', 'HIDROV'],
            [ 6, 5, 'MULTIPROGRAMA TRANSPORTES', 'MTRNS'],
            [ 6, 6, 'OTROS TRANSPORTES', 'OTRTRS'],
            [ 6, 7, 'INVESTIGACIÓN TRANSPORTES', 'INVT'],
            [ 7, 1, 'TELECOMUNICACIONES', 'TEL'],
            [ 7, 2, 'SERVICIO POSTAL', 'POSTA'],
            [ 7, 3, 'MULTIPROGRAMA COMUNICACIONES', 'MCOM'],
            [ 7, 4, 'OTROS COMUNICACIONES', 'OTRCOM'],
            [ 7, 5, 'INVESTIGACIÓN COMUNICACIONES', 'INVC'],
            [ 8, 1, 'INFRAESTRUCTURA DE SALUD', 'SAL'],
            [ 8, 2, 'PLANIFICACIÓN Y PREVENCIÓN DE SALUD', 'PLA'],
            [ 8, 3, 'ATENCIÓN EN SALUD', 'ASAL'],
            [ 8, 4, 'MULTIPROGRAMA SALUD', 'MULSAL'],
            [ 8, 5, 'OTROS SALUD', 'OTSLD'],
            [ 8, 6, 'TELESALUD', 'TELES'],
            [ 8, 7, 'INVESTIGACIÓN SALUD', 'INVS'],
            [ 9, 1, 'INFRAESTRUCTURA DE EDUCACIÓN', 'IED'],
            [ 9, 2, 'EDUCACIÓN FORMAL', 'EDF'],
            [ 9, 3, 'EDUCACIÓN NO FORMAL', 'EDN'],
            [ 9, 4, 'MULTIPROGRAMA EDUCACION', 'MEDUC'],
            [ 9, 5, 'OTROS EDUCACION', 'OTREDU'],
            [ 10, 1, 'AGUA POTABLE', 'AGU'],
            [ 10, 2, 'ALCANTARILLADO', 'ALC'],
            [ 10, 3, 'TRATAMIENTO', 'TRS'],
            [ 10, 4, 'MULTIPROGRAMA SANEAMIENTO BASICO', 'MSANB'],
            [ 10, 5, 'OTROS SANEAMIENTO BASICO', 'OTRSB'],
            [ 11, 1, 'URBANISMO', 'URB'],
            [ 11, 2, 'VIVIENDA', 'VIV'],
            [ 11, 3, 'MULTIPROGRAMA URBANISMO Y VIVIENDA', 'MURVI'],
            [ 11, 4, 'OTROS URBANISMO Y VIVIENDA', 'OTURV'],
            [ 12, 1, 'APROVECHAMIENTO DE RECURSOS HIDRICOS', 'APR'],
            [ 12, 2, 'MANEJO INTEGRAL DE CUENCAS', 'MIC'],
            [ 12, 3, 'MULTIPROGRAMA RECURSOS HIDRICOS', 'MHIDR'],
            [ 12, 4, 'OTROS RECURSOS HIDRICOS', 'OTRHID'],
            [ 13, 1, 'COMERCIO', 'COM'],
            [ 13, 2, 'FINANZAS', 'FIN'],
            [ 13, 3, 'MULTIPROGRAMA COMERCIO Y FINANZAS', 'MCOFI'],
            [ 13, 4, 'OTROS COMERCIO Y FINANZAS', 'OTRCF'],
            [ 14, 1, 'ÓRGANO JUDICIAL', 'JUD'],
            [ 14, 2, 'ÓRGANO LEGISLATIVO', 'LEG'],
            [ 14, 3, 'ÓRGANO ELECTORAL', 'OEL'],
            [ 14, 4, 'ADMINISTRACION SUPERIOR EJECUTIVA', 'EJE'],
            [ 14, 5, 'ADMINISTRACION FINANCIERA', 'ADF'],
            [ 14, 6, 'RELACIONES EXTERIORES', 'REXT'],
            [ 14, 7, 'INFORMACION ESTADÍSTICA Y PLANIFICACIÓN', 'EST'],
            [ 14, 8, 'SERVICIOS DE PERSONAL', 'SPER'],
            [ 14, 9, 'OTROS', 'OTR13'],
            [ 15, 1, 'POLICIA', 'POL'],
            [ 15, 2, 'INFRAESTRUCTURA Y EQUIPAMIENTO', 'POLI'],
            [ 15, 3, 'OTROS ORDEN PUBLICO Y SEGURIDAD CIUDADANA', 'OTRPOL'],
            [ 16, 1, 'DEFENSA MILITAR', 'DEFM'],
            [ 16, 2, 'DEFENSA CIVIL', 'DEFC'],
            [ 16, 3, 'OTROS DEFENSA NACIONAL', 'OTRDN'],
            [ 17, 1, 'INTERESES DE LA DEUDA PUBLICA', 'DEU'],
            [ 17, 2, 'OTROS GASTOS', 'OTR16'],
            [ 18, 1, 'ESTUDIOS PARA EL DESARROLLO', 'DESRUR'],
            [ 18, 2, 'MULTIPROGRAMA', 'MPRG'],
            [ 18, 3, 'FORTALECIMIENTO INSTITUCIONAL', 'FORINST'],
            [ 19, 1, 'CONSERVACIÓN Y PROTECCIÓN DEL MEDIO AMBIENTE', 'CPM'],
            [ 20, 1, 'DESARROLLO TURISTICO', 'TUR'],
            [ 21, 1, 'SEGURIDAD SOCIAL CORTO PLAZO', 'SEGC'],
            [ 21, 2, 'SEGURIDAD SOCIAL LARGO PLAZO', 'SEGL'],
            [ 21, 3, 'OTROS SEGURIDAD SOCIAL', 'OTSEG'],
            [ 21, 4, 'INVESTIGACIÓN SEGURIDAD SOCIAL', 'INVSS'],
            [ 22, 1, 'DESARROLLO DE LA CULTURA', 'CUL'],
            [ 23, 1, 'JUSTICIA', 'JUS'],
            [ 24, 1, 'DESARROLLO DEL DEPORTE', 'DEP']
    ];
   
    foreach ($subsector1s as $subsector1) {
        subSector1::create([
            'id_sector' => $subsector1[0],
            'id_subsector1' => $subsector1[1],
            'denominacion' => $subsector1[2],
            'sigla' => $subsector1[3],
        ]);
    }
}
}
