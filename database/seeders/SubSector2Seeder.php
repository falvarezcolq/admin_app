<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;
use App\Models\subSector1;
use App\Models\subsector2;

class SubSector2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
//     {
//         INSERT INTO sector (id_sector, denominacion, sigla, creado_en)
// VALUES
    $subsector2s = [
    
// INSERT INTO subsector2 (id_sector, id_subsector1, id_subsector2, denominacion, sigla, creado_en) 
// VALUES
[ 1 , 1 , 1 ,	'INVESTIGACIÓN AGRÍCOLA','AGR01'],
[ 1 , 1 , 2 ,	'SANIDAD VEGETAL','AGR02'],
[ 1 , 1 , 3 ,	'INFRAESTRUCTURA DE APOYO AGRÍCOLA','AGR03'],
[ 1 , 1 , 4 ,	'EXTENSION Y CAPACITACIÓN','AGR04'],
[ 1 , 1 , 5 ,	'EQUIPAMIENTO APOYO AGRÍCOLA','AGR05'],
[ 1 , 1 , 6 ,	'FOMENTO A LA PRODUCCIÓN AGRÍCOLA','AGR06'],
[ 1 , 2 , 1 ,	'INVESTIGACIÓN PECUARIA','PEC01'],
[ 1 , 2 , 2 ,	'EXTENSION Y CAPACITACIÓN PECUARIA','PEC02'],
[ 1 , 2 , 3 ,	'FOMENTO GANADERO','PEC03'],
[ 1 , 2 , 4 ,	'SANIDAD ANIMAL','PEC04'],
[ 1 , 2 , 5 ,	'INFRAESTRUCTURA DE APOYO PECUARIO','PEC05'],
[ 1 , 2 , 6 ,	'MEJORAMIENTO GENÉTICO','PEC06'],
[ 1 , 2 , 7 ,	'PRADERAS, FORRAJES Y NUTRICIÓN ANIMAL','PEC07'],
[ 1 , 2 , 8 ,	'DESARROLLO APICOLA','PEC08'],
[ 1 , 2 , 9 ,	'DESARROLLO AVICOLA','PEC09'],
[ 1 , 2 , 10 ,	'EQUIPAMIENTO PARA APOYO PECUARIO','PEC10'],
[ 1 , 3 , 1 ,	'PESCA EN CAUSES NATURALES','SIL01'],
[ 1 , 3 , 2 ,	'AGROSILVOPASTORIL','SIL02'],
[ 1 , 3 , 3 ,	'ACUICULTURA (CRIANZA ARTIFICIAL','SIL03'],
[ 1 , 3 , 4 ,	'INFRAESTRUCTURA DE APOYO EN ACUICULTURA','SIL04'],
[ 1 , 3 , 5 ,	'INVESTIGACIÓN DESARROLLO PESQUERO','INVDP'],
[ 1 , 4 , 1 ,	'SEGURIDAD Y SOBERANIA ALIMENTARIA AGRÍCOLA','SEG01'],
[ 1 , 4 , 2 ,	'SEGURIDAD Y SOBERANIA ALIMENTARIA PECUARIA','SEG02'],
[ 1 , 4 , 3 ,	'INVESTIGACIÓN SEGURIDAD Y  SOBERANIA ALIMENTARIA','INVSSA'],
[ 1 , 5 , 1 ,	'CONSTRUCCIÓN DE SISTEMAS DE RIEGO','RIE01'],
[ 1 , 5 , 2 ,	'MEJORAMIENTO Y AMPLIACIÓN DE SISTEMA DE RIEGO','RIE02'],
[ 1 , 5 , 3 ,	'REHABILITACIÓN DE SISTEMAS DE RIEGO','RIE03'],
[ 1 , 5 , 4 ,	'OTROS','RIE04'],
[ 1 , 5 , 5 ,	'MICRORIEGO Y OTROS (ATAJADOS, RESERVORIOS Y PERFORACIÓN DE POZOS','RIE05'],
[ 1 , 5 , 6 ,	'DRENAJES','RIE06'],
[ 1 , 5 , 7 ,	'OTROS  RIEGO','OTRIE'],
[ 1 , 5 , 8 ,	'INVESTIGACIÓN RIEGO','RIE08'],
[ 1 , 6 , 1 ,	'MULTIPROGRAMA','MULT01'],
[ 1 , 7 , 1 ,	'SANEAMIENTO TITULACIÓN Y DISTRIBUCIÓN DE TIERRAS','OTR01'],
[ 1 , 7 , 2 ,	'OTROS','OTR02'],
[ 2 , 1 , 1 ,	'PROSPECCIÓN Y EXPLORACION MINERA','MIN01'],
[ 2 , 1 , 2 ,	'EXPLOTACIÓN Y PRODUCCIÓN DE MINERALES','MIN02'],
[ 2 , 1 , 3 ,	'COMERCIALIZACIÓN DE MINERALES','MIN03'],
[ 2 , 1 , 4 ,	'INDUSTRIALIZACIÓN MINERA','MIN04'],
[ 2 , 1 , 5 ,	'INVESTIGACIÓN MINERA','MIN05'],
[ 2 , 1 , 6 ,	'TRATAMIENTO DE RESIDUOS MINEROS','MIN06'],
[ 2 , 1 , 7 ,	'REMEDIACIÓN DE PASIVOS AMBIENTALES','MIN07'],
[ 2 , 1 , 8 ,	'OTROS MINERIA','OTRMIN'],
[ 2 , 1 , 9 ,	'CONCENTRACIÓN, FUNDICIÓN Y REFINACIÓN DE MINERALES','MIN09'],
[ 2 , 1 , 10 ,	'ASISTENCIA Y CAPACITACIÓN EN MINERIA','MIN10'],
[ 2 , 1 , 11 ,	'INVESTIGACIÓN MINERA','MIN11'],
[ 3 , 1 , 1 ,	'TRANSFORMACIÓN DE ALIMENTOS Y BEBIDAS','AGRO01'],
[ 3 , 1 , 2 ,	'COMERCIALIZACIÓN DE ALIMENTOS Y BEBIDAS','AGRO02'],
[ 3 , 1 , 3 ,	'FOMENTO A LA PRODUCCIÓN AGROINDUSTRIAL','AGRO03'],
[ 3 , 2 , 1 ,	'TRANSFORMACIÓN DE TEXTILES Y PRENDAS DE VESTIR','INMA01'],
[ 3 , 2 , 2 ,	'TRANSFORMACIÓN DE MUEBLES','INMA02'],
[ 3 , 2 , 3 ,	'TRANSFORMACIÓN DE CUEROS Y CALZADOS','INMA03'],
[ 3 , 2 , 4 ,	'TRANSFORMACIÓN DE PRODUCTOS ELABORADOS DE METAL','INMA04'],
[ 3 , 2 , 5 ,	'COMERCIALIZACIÓN DE MANUFACTURAS','INMA05'],
[ 3 , 2 , 6 ,	'FOMENTO DE PROMOCIÓN DE LA PRODUCCIÓN MANUFACTURERA Y MICROEMPRESA','INMA06'],
[ 3 , 2 , 7 ,	'OTRAS MANUFACTURAS','INMA07'],
[ 3 , 3 , 1 ,	'MULTIPROGRAMA','MULT02'],
[ 3 , 4 , 1 ,	'OTROS','OTR03'],
[ 3 , 4 , 2 ,	'OTROS ARTESANIAS','OTRAR'],
[ 3 , 5 , 1 ,	'INVESTIGACIÓN INDUSTRIA','INVIND01'],
[ 4 , 1 , 1 ,	'PROSPECCION Y EXPLORACION DE HIDROCARBUROS','HID01'],
[ 4 , 1 , 2 ,	'EXPLOTACION O PRODUCCIÓN DE HIDROCARBUROS','HID02'],
[ 4 , 1 , 3 ,	'TRANSPORTE DE HIDROCARBUROS','HID03'],
[ 4 , 1 , 4 ,	'COMERCIALIZACION DE HIDROCARBUROS','HID04'],
[ 4 , 1 , 5 ,	'INDUSTRIALIZACION DE HIDROCARBUROS','HID05'],
[ 4 , 1 , 6 ,	'REDES DE DISTRIBUCIÓN DE GAS','HID06'],
[ 4 , 1 , 7 ,	'REMEDIACIÓN AMBIENTAL','HID07'],
[ 4 , 1 , 8 ,	'OTROS HIDROCARBUROS','OTRHID'],
[ 5 , 1 , 1 ,	'GENERACION DE ENERGIA ELECTRICA','ENELC02'],
[ 5 , 1 , 2 ,	'TRANSMISION DE ENERGIA ELECTRICA','ENELC03'],
[ 5 , 1 , 3 ,	'DISTRIBUCIÓN DE ENERGÍA ELECTRICA','ENELC04'],
[ 5 , 1 , 4 ,	'ELECTRIFICACION RURAL','ENELC05'],
[ 5 , 2 , 1 ,	'EOLICA','ENELALT'],
[ 5 , 2 , 2 ,	'GEOTERMICA','ENEEO'],
[ 5 , 2 , 3 ,	'FOTOVOLTAICA','ENEGEO'],
[ 5 , 2 , 4 ,	'BIOMASA','ENEBIO'],
[ 5 , 2 , 5 ,	'NUCLEAR','ENENU'],
[ 5 , 3 , 1 ,	'OTROS ENERGÍA','OTR04'],
[ 5 , 4 , 1 ,	'MULTIPROGRAMA','MULT03'],
[ 5 , 5 , 1 ,	'INVESTIGACIÓN EN DESARROLLO DE LA ENERGÍA','INVDEN01'],
[ 6 , 1 , 1 ,	'CONSTRUCCIÓN CARRETERAS PAVIMENTADAS','CAM01'],
[ 6 , 1 , 2 ,	'CONSTRUCCIÓN CARRETERAS NO PAVIMENTADAS','CAM02'],
[ 6 , 1 , 3 ,	'MEJORAMIENTO DE CARRETERAS','CAM03'],
[ 6 , 1 , 4 ,	'MANTENIMIENTO DE CARRETERAS','CAM04'],
[ 6 , 1 , 5 ,	'REHABILITACIÓN DE CARRETERAS','CAM05'],
[ 6 , 1 , 6 ,	'APERTURA DE CAMINOS VECINALES','CAM06'],
[ 6 , 1 , 7 ,	'MEJORAMIENTO DE CAMINOS VECINALES','CAM07'],
[ 6 , 1 , 8 ,	'CONSTRUCCIÓN DE PUENTES','CAM08'],
[ 6 , 1 , 9 ,	'REHABILITACIÓN DE PUENTES','CAM09'],
[ 6 , 1 , 10 ,	'SERVICIOS POR TRANSPORTE TERRESTRE','CAM10'],
[ 6 , 1 , 11 ,	'CONTROL Y SEGURIDAD DEL TRAFICO TERRESTRE','CAM11'],
[ 6 , 1 , 12 ,	'MANTENIMIENTO DE PUENTES','CAM12'],
[ 6 , 2 , 1 ,	'CONSTRUCCIÓN DE INFRAESTRUCTURA FERROVIARIA','FER01'],
[ 6 , 2 , 2 ,	'EQUIPAMIENTO DE TRACCION Y MATERIAL RODANTE','FER02'],
[ 6 , 2 , 3 ,	'MEJORAMIENTO DE INFRAESTRUCTURA FERROVIARIA','FER03'],
[ 6 , 2 , 4 ,	'REHABILITACION DE LINEAS FERREAS','FER04'],
[ 6 , 2 , 5 ,	'SERVICIOS FERROVIARIOS','FER05'],
[ 6 , 2 , 6 ,	'CONTROL Y SEGURIDAD DEL TRANSPORTE FERROVIARIO','FER06'],
[ 6 , 3 , 1 ,	'CONSTRUCCIÓN DE INFRAESTRUCTURA AEROPORTUARIA','AER01'],
[ 6 , 3 , 2 ,	'EQUIPAMIENTO PARA LA NAVEGACIÓN Y SERVICIOS AUXILIARES','AER02'],
[ 6 , 3 , 3 ,	'MEJORAMIENTO DE INFRAESTRUCTURA AEROPORTUARIA','AER03'],
[ 6 , 3 , 4 ,	'REHABILITACIÓN DE INFRAESTRUCTURA AEROPORTUARIA','AER04'],
[ 6 , 3 , 5 ,	'MANTENIMIENTO DE INFRAESTRUCTURA AEROPORTUARIA','AER05'],
[ 6 , 3 , 6 ,	'CONSTRUCCIÓN DE PISTAS','AER06'],
[ 6 , 3 , 7 ,	'CONSTRUCCIÓN DE TERMINALES AEREAS','AER07'],
[ 6 , 3 , 8 ,	'MEJORAMIENTO Y MANTENIMIENTO DE  AERONAVES','AER08'],
[ 6 , 3 , 9 ,	'SERVICIOS DE TRANSPORTE AÉREO','AER09'],
[ 6 , 3 , 10 ,	'CONTROL Y SEGURIDAD DEL TRANSPORTE AEREO','AER10'],
[ 6 , 4 , 1 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE PUERTOS','HIDR01'],
[ 6 , 4 , 2 ,	'MEJORAS PARA LA NAVEGACIÓN','HIDR02'],
[ 6 , 4 , 3 ,	'CONSTRUCCIÓN DE INFRAESTRUCTURA FLUVIAL Y LACUSTRE','HIDR03'],
[ 6 , 4 , 4 ,	'EQUIPAMIENTO PARA LA NAVEGACIÓN Y SERVICIOS AUXILIARES','HIDR04'],
[ 6 , 4 , 5 ,	'MEJORAMIENTO DE INFRAESTRUCTURA FLUVIAL Y LACUSTRE','HIDR05'],
[ 6 , 4 , 6 ,	'REHABILITACIÓN DE INFRAESTRUCTURA FLUVIAL Y LACUSTRE','HIDR06'],
[ 6 , 4 , 7 ,	'MANTENIMIENTO DE INFRAESTRUCTURA FLUVIAL Y LACUSTRE','HIDR07'],
[ 6 , 4 , 8 ,	'SERVICIO DE TRANSPORTE FLUVIAL Y LACUSTRE','HIDR08'],
[ 6 , 4 , 9 ,	'CONTROL Y SEGURIDAD DEL TRAFICO FLUVIAL Y LACUSTRE','HIDR09'],
[ 6 , 5 , 1 ,	'MULTIPROGRAMA','MULT04'],
[ 6 , 6 , 1 ,	'TRANSPORTE POR CABLE','TRCAB'],
[ 6 , 6 , 2 ,	'OTROS TRANSPORTES','OTR05'],
[ 6 , 7 , 1 ,	'INVESTIGACIÓN TRANSPORTES','INVT01'],
[ 7 , 1 , 1 ,	'CONSTRUCCIONES E INFRAESTRUCTURA','TEL01'],
[ 7 , 1 , 2 ,	'EQUIPAMIENTO DE TELECOMUNICACIONES','TEL02'],
[ 7 , 1 , 3 ,	'MEJORAMIENTO DE INFRAESTRUCTURA DE TELECOMUNICACIONES','TEL03'],
[ 7 , 1 , 4 ,	'REHABILITACIÓN DE INFRAESTRUCTURA DE TELECOMUNICACIONES','TEL04'],
[ 7 , 1 , 5 ,	'SERVICIO DE TELECOMUNICACIONES','TEL05'],
[ 7 , 1 , 6 ,	'GESTION DEL ESPACIO ELECTROMAGNETICO','TEL06'],
[ 7 , 2 , 1 ,	'CONSTRUCCIONES E INFRAESTRUCTURA DE CORREOS','POS01'],
[ 7 , 2 , 2 ,	'EQUIPAMIENTO DE SERVICIO POSTAL','POS02'],
[ 7 , 2 , 3 ,	'SERVICIO POSTAL','POS03'],
[ 7 , 3 , 1 ,	'MULTIPROGRAMA','MULT05'],
[ 7 , 4 , 1 ,	'OTROS','OTR06'],
[ 7 , 5 , 1 ,	'INVESTIGACIÓN COMUNICACIONES','INVC01'],
[ 8 , 1 , 1 ,	'CONSTRUCCIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO DE HOSPITALES','SAL01'],
[ 8 , 1 , 2 ,	'CONSTRUCCIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO DE CENTROS DE SALUD','SAL02'],
[ 8 , 1 , 3 ,	'MEJORAMIENTO DE INFRAESTRUCTURA DE HOSPITALES','SAL03'],
[ 8 , 1 , 4 ,	'MEJORAMIENTO DE INFRAESTRUCTURA DE CENTROS DE SALUD','SAL04'],
[ 8 , 1 , 5 ,	'OTROS INFRAESTRUCTURA DE SALUD','SAL05'],
[ 8 , 2 , 1 ,	'PLANIFICACION Y EDUCACIÓN PARA LA SALUD','PLA01'],
[ 8 , 2 , 2 ,	'PROGRAMAS EN PREVENCIÓN Y EDUCACION PARA LA SALUD','PLA02'],
[ 8 , 2 , 3 ,	'REGULACIÓN Y CONTROL SANITARIO','PLA03'],
[ 8 , 2 , 4 ,	'PROMOCIÓN  DE LA SALUD','PLA04'],
[ 8 , 3 , 1 ,	'ATENCIÓN PRIMARIA EN SALUD','ASA01'],
[ 8 , 3 , 2 ,	'PROGRAMAS INTEGRALES DE SALUD','ASA02'],
[ 8 , 3 , 3 ,	'EPIDEMIOLOGIA','ASA03'],
[ 8 , 3 , 4 ,	'DESARROLLO MEDICINA TRADICIONAL','ASA04'],
[ 8 , 3 , 5 ,	'SALUD OCUPACIONAL','ASA05'],
[ 8 , 4 , 1 ,	'MULTIPROGRAMA','MULT06'],
[ 8 , 5 , 1 ,	'OTROS','OTR07'],
[ 8 , 6 , 1 ,	'TELESALUD','TELES01'],
[ 8 , 7 , 1 ,	'INVESTIGACIÓN SALUD','INVS01'],
[ 9 , 1 , 1 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE ESCUELAS Y COLEGIOS','IED01'],
[ 9 , 1 , 2 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE CENTROS DE EDUCACION NO FORMAL','IED02'],
[ 9 , 1 , 3 ,	'INFRAESTRUCTURA DE EDUCACIÓN SUPERIOR','IED03'],
[ 9 , 1 , 4 ,	'OTRA INFRAESTRUCTURA EDUCATIVA','IED04'],
[ 9 , 1 , 5 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO EN EDUCACIÓN ALTERNATIVA','IED05'],
[ 9 , 1 , 6 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO EN EDUCACIÓN ESPECIAL','IED06'],
[ 9 , 2 , 1 ,	'EDUCACIÓN BASICA','EDF01'],
[ 9 , 2 , 2 ,	'EDUCACIÓN SUPERIOR','EDF02'],
[ 9 , 2 , 3 ,	'FORMACIÓN DOCENTE','EDF03'],
[ 9 , 2 , 4 ,	'FORMACIÓN OCUPACIONAL','EDF04'],
[ 9 , 2 , 5 ,	'ASISTENCIA EDUCATIVA','EDF05'],
[ 9 , 2 , 6 ,	'DESARROLLO CURRICULAR EDUCACIÓN REGULAR','EDF06'],
[ 9 , 3 , 1 ,	'ALFABETIZACIÓN','EDN01'],
[ 9 , 3 , 2 ,	'EDUCACIÓN POPULAR','EDN02'],
[ 9 , 3 , 3 ,	'FORMACIÓN DE MANO DE OBRA','EDN03'],
[ 9 , 3 , 4 ,	'DESARROLLO CURRICULAR EDUCACIÓN NO REGULAR','EDN04'],
[ 9 , 3 , 5 ,	'POST ALFABETIZACIÓN','EDN05'],
[ 9 , 4 , 1 ,	'MULTIPROGRAMA','MULT07'],
[ 9 , 4 , 2 ,	'INVESTIGACIÓN EDUCACIÓN','INVED09'],
[ 9 , 5 , 1 ,	'OTROS','OTR08'],
[ 9 , 5 , 2 ,	'PROMOCIÓN DE LA EDUCACIÓN INTEGRAL','PROMED02'],
[ 9 , 5 , 3 ,	'INVESTIGACIÓN E INNOVACIÓN EDUCATIVA','INVEIN03'],
[ 9 , 5 , 4 ,	'TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIÓN EN EDUCACIÓN','TECICE04'],
[ 10 , 1 , 1 ,	'AGUA POTABLE EN CAPITALES DE DEPARTAMENTO','AGU01'],
[ 10 , 1 , 2 ,	'AGUA POTABLE EN CIUDADES INTERMEDIAS','AGU02'],
[ 10 , 1 , 3 ,	'AGUA POTABLE EN POBLADOS RURALES','AGU03'],
[ 10 , 1 , 4 ,	'PERFORACIÓN DE POZOS PARA AGUA POTABLE','AGU04'],
[ 10 , 1 , 5 ,	'REHABILITACIÓN Y AMPLIACIÓN DE SISTEMAS DE AGUA','AGU05'],
[ 10 , 2 , 1 ,	'ALCANTARILLADO EN CAPITALES DE DEPARTAMENTO','ALC01'],
[ 10 , 2 , 2 ,	'ALCANTARILLADO EN CIUDADES INTERMEDIAS','ALC02'],
[ 10 , 2 , 3 ,	'ALCANTARILLADO EN POBLADOS RURALES','ALC03'],
[ 10 , 2 , 4 ,	'LETRINIZACIÓN','ALC04'],
[ 10 , 2 , 5 ,	'ALCANTARILLADO PLUVIAL EN CAPITALES DE DEPARTAMENTO','ALC05'],
[ 10 , 2 , 6 ,	'ALCANTARILLADO PLUVIAL EN CIUDADES INTERMEDIAS','ALC06'],
[ 10 , 2 , 7 ,	'ALCANTARILLADO PLUVIAL EN POBLADOS RURALES','ALC07'],
[ 10 , 3 , 1 ,	'TRATAMIENTO DE AGUA POTABLE','TRS01'],
[ 10 , 3 , 2 ,	'TRATAMIENTO DE AGUAS SERVIDAS','TRS02'],
[ 10 , 3 , 3 ,	'TRATAMIENTO DE RESIDUOS SOLIDOS','TRS03'],
[ 10 , 3 , 4 ,	'RECOLECCION Y ELIMINACION DE DESECHOS SOLIDOS','TRS04'],
[ 10 , 3 , 5 ,	'REHABILITACIÓN DE PLANTAS DE TRATAMIENTO','TRS05'],
[ 10 , 4 , 1 ,	'MULTIPROGRAMA','MULT08'],
[ 10 , 4 , 2 ,	'AGUA POTABLE Y ALCANTARILLADO EN CAPITALES DE DEPARTAMENTO	AG ,','01'],
[ 10 , 4 , 3 ,	'AGUA POTABLE Y ALCANTARILLADO EN CIUDADES INTERMEDIAS	AG ,','02'],
[ 10 , 4 , 4 ,	'AGUA POTABLE Y ALCANTARILLADO EN POBLADOS RURALES	AG ,','03'],
[ 10 , 4 , 5 ,	'AGUA Y LETRINIZACIÓN	AG ,','04'],
[ 10 , 4 , 6 ,	'INVESTIGACIÓN SANEAMIENTO BÁSICO	AG ,','05'],
[ 10 , 5 , 1 ,	'OTROS','OTR09'],
[ 11 , 1 , 1 ,	'PLANIFICACION URBANA Y URBANIZACIÓN','URB01'],
[ 11 , 1 , 2 ,	'EQUIPAMIENTO E INFRAESTRUCTURA URBANA','URB02'],
[ 11 , 1 , 3 ,	'EQUIPAMIENTO E INFRAESTRUCTURA RECREACIONAL','URB03'],
[ 11 , 1 , 4 ,	'MEJORAMIENTO DE INFRAESTRUCTURA URBANA','URB04'],
[ 11 , 1 , 5 ,	'VIAS URBANAS Y RURALES','URB05'],
[ 11 , 2 , 1 ,	'PLANIFICACION PARA LA DOTACIÓN DE LA VIVIENDA','VIV01'],
[ 11 , 2 , 2 ,	'CONSTRUCCIÓN DE VIVIENDAS EN CAPITAL DE DEPARTAMENTO','VIV02'],
[ 11 , 2 , 3 ,	'CONSTRUCCIÓN DE VIVIENDAS EN CIUDADES INTERMEDIAS','VIV03'],
[ 11 , 2 , 4 ,	'CONSTRUCCIÓN DE VIVIENDAS EN POBLADOS RURALES','VIV04'],
[ 11 , 3 , 1 ,	'MULTIPROGRAMA','MULT09'],
[ 11 , 3 , 2 ,	'INVESTIGACIÓN URBANISMO Y VIVIENDA','INVURBV'],
[ 11 , 4 , 1 ,	'OTROS','OTR10'],
[ 12 , 1 , 1 ,	'CONSTRUCCIÓN DE ATAJADOS Y RESERVORIOS','APR01'],
[ 12 , 1 , 2 ,	'PERFORACIÓN DE POZOS','APR02'],
[ 12 , 1 , 3 ,	'EXPLORACIÓN DE RECURSOS HÍDRICOS','APR03'],
[ 12 , 2 , 1 ,	'DEFENSIVOS Y DEFLECTORES FLUVIALES','MIC01'],
[ 12 , 2 , 2 ,	'CONTROL DE AGUA Y EROSION','MIC02'],
[ 12 , 2 , 3 ,	'CONTROL DE CARCAVAS Y AVENIDAS','MIC03'],
[ 12 , 2 , 4 ,	'CANALIZACION DE RIOS','MIC04'],
[ 12 , 2 , 5 ,	'GESTIÓN Y MANEJO DE CUENCAS','MIC05'],
[ 12 , 2 , 6 ,	'REMEDIACIÓN DE PASIVOS AMBIENTALES','MIC06'],
[ 12 , 3 , 1 ,	'MULTIPROGRAMA','MULT10'],
[ 12 , 3 , 2 ,	'INVESTIGACIÓN RECURSOS HÍDRICOS','INVRH'],
[ 12 , 4 , 1 ,	'OTROS','OTR11'],
[ 13 , 1 , 1 ,	'ASUNTOS COMERCIALES Y LABORALES','COM01'],
[ 13 , 1 , 2 ,	'DESARROLLO Y PROMOCIÓN DEL COMERCIO','COM02'],
[ 13 , 2 , 1 ,	'SUPERVISIÓN DE LA BANCA Y SEGUROS','FIN01'],
[ 13 , 3 , 1 ,	'MULTIPROGRAMA','MULT11'],
[ 13 , 3 , 2 ,	'INVESTIGACIÓN COMERCIO Y FINANZAS','INVCF'],
[ 13 , 4 , 1 ,	'OTROS','OTR12'],
[ 14 , 1 , 1 ,	'INFRAESTRUCTURA Y EQUIPAMIENTO DE APOYO','JUD01'],
[ 14 , 2 , 1 ,	'INFRAESTRUCTURA Y EQUIPAMIENTO DE APOYO','LEG01'],
[ 14 , 3 , 1 ,	'INFRAESTRUCTURA Y EQUIPAMIENTO DE APOYO','OEL01'],
[ 15 , 1 , 1 ,	'SERVICIOS POLICIALES','POL01'],
[ 15 , 1 , 2 ,	'ORDEN INTERNO','POL02'],
[ 15 , 1 , 3 ,	'CONTROL DROGAS','POL03'],
[ 15 , 1 , 4 ,	'SISTEMA PENITENCIARIO','POL04'],
[ 15 , 2 , 1 ,	'INFRAESTRUCTURA DE APOYO Y EQUIPAMIENTO AL SISTEMA POLICIAL','POLI01'],
[ 15 , 2 , 2 ,	'EQUIPAMIENTO DE SEGURIDAD CIUDADANA','POLI02'],
[ 15 , 3 , 1 ,	'OTROS','OTR14'],
[ 15 , 3 , 2 ,	'INVESTIGACIÓN EN ORDEN PÚBLICO Y SEGURIDAD CIUDADANA','INVOPSC'],
[ 16 , 1 , 1 ,	'DEFENSA NACIONAL','DEFN01'],
[ 16 , 1 , 2 ,	'INFRAESTRUCTURA MILITAR','DEFN02'],
[ 16 , 1 , 3 ,	'EQUIPAMIENTO MILITAR','DEFN03'],
[ 16 , 2 , 1 ,	'PREVENCIÓN DE DESASTRES','DEFC01'],
[ 16 , 2 , 2 ,	'ATENCIÓN DE DESASTRES','DEFC02'],
[ 16 , 3 , 1 ,	'OTROS','OTR15'],
[ 18 , 1 , 1 ,	'ESTUDIOS BASICOS PARA EL DESARROLLO','DES01'],
[ 18 , 1 , 2 ,	'PROGRAMAS DE DESARROLLO RURAL SOSTENIBLE','DES02'],
[ 18 , 1 , 3 ,	'ORDENAMIENTO TERRITORIAL','DES03'],
[ 18 , 1 , 4 ,	'INVESTIGACIÓN PARA EL DESARROLLO','DES04'],
[ 18 , 2 , 1 ,	'PROGRAMAS MULTISECTORIALES','MULTSEC'],
[ 18 , 2 , 2 ,	'INVESTIGACIÓN TEMÁTICAS MULTISECORIALES','INVTM'],
[ 18 , 3 , 1 ,	'PROGRAMAS DE FORTALECIMIENTO INSTITUCIONAL','FORINST01'],
[ 18 , 3 , 2 ,	'INVESTIGACIÓN EN FORTALECIMIENTO INSTITUCIONAL','INVFI'],
[ 19 , 1 , 1 ,	'ESTUDIOS DE RECURSOS NATURALES','CPMA01'],
[ 19 , 1 , 2 ,	'MANEJO DE PARQUES Y ÁREAS PROTEGIDAS','CPMA02'],
[ 19 , 1 , 3 ,	'BIODIVERSIDAD','CPMA03'],
[ 19 , 1 , 4 ,	'FORESTACIÓN','CPMA04'],
[ 19 , 1 , 5 ,	'REFORESTACIÓN','CPMA05'],
[ 19 , 1 , 6 ,	'CONSERVACIÓN Y CONTROL EROSIÓN DE SUELOS','CPMA06'],
[ 19 , 1 , 7 ,	'REMEDIACIÓN DE PASIVOS AMBIENTALES','CPMA07'],
[ 19 , 1 , 8 ,	'OTROS MEDIO AMBIENTE','OTR17'],
[ 19 , 1 , 9 ,	'INVESTIGACIÓN MEDIO AMBIENTE','INVMA'],
[ 20 , 1 , 1 ,	'PROMOCIÓN  TURÍSTICA','TUR01'],
[ 20 , 1 , 2 ,	'ACTIVIDADES TURÍSTICAS','TUR02'],
[ 20 , 1 , 3 ,	'INFRAESTRUCTURA TURÍSTICA','TUR03'],
[ 20 , 1 , 4 ,	'OTROS TURISMO','OTR18'],
[ 20 , 1 , 5 ,	'DESARROLLO TURISMO COMUNITARIO','TUR05'],
[ 20 , 1 , 6 ,	'INVESTIGACIÓN TURISMO','TUR06'],
[ 21 , 1 , 1 ,	'INFRAESTRUCTURA Y EQUIPAMIENTO CAJAS DE SALUD','SEGC01'],
[ 21 , 1 , 2 ,	'MEJORAMIENTO Y AMPLIACIÓN DE INFRAESTRUCTURA','SEGC02'],
[ 21 , 1 , 3 ,	'SEGURIDAD SOCIAL EN SALUD','SEGC03'],
[ 21 , 2 , 1 ,	'SISTEMA DE PENSIONES','SEGL01'],
[ 21 , 3 , 1 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE ORFANATOS, HOGARES, ALBERGUES, GUARDERIAS Y SIMILARES','OTSEG'],
[ 21 , 3 , 2 ,	'OTROS','OTR19'],
[ 21 , 4 , 1 ,	'INVESTIGACIÓN SEGURIDAD SOCIAL','INVSS01'],
[ 22 , 1 , 1 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE INFRAESTRUCTURA CULTURAL Y PATRIMONIAL','CUL01'],
[ 22 , 1 , 2 ,	'MEJORAMIENTO Y RECUPERACIÓN DE INFRAESTRUCTURA CULTURAL Y PATRIMONIAL','CUL02'],
[ 22 , 1 , 3 ,	'RECUPERACIÓN DE ACTIVOS CULTURALES Y PATRIMONIALES','CUL03'],
[ 22 , 1 , 4 ,	'PROMOCIÓN CULTURAL','CUL04'],
[ 22 , 1 , 5 ,	'OTROS CULTURA','MULT12'],
[ 22 , 1 , 6 ,	'INVESTIGACIÓN CULTURA','INVCUL'],
[ 23 , 1 , 1 ,	'INFRAESTRUCTURA Y EQUIPAMIENTO DEL SISTEMA DE JUSTICIA','JUS01'],
[ 23 , 1 , 2 ,	'MEJORAMIENTO DE INFRAESTRUCTURA DEL SISTEMA DE JUSTICIA','JUS02'],
[ 23 , 1 , 3 ,	'ADMINISTRACIÓN DE JUSTICIA','JUS03'],
[ 23 , 1 , 4 ,	'SEGURIDAD JURÍDICA','JUS04'],
[ 23 , 1 , 5 ,	'OTROS','OTR20'],
[ 23 , 1 , 6 ,	'INVESTIGACIÓN JUSTICIA','INVJUS'],
[ 24 , 1 , 1 ,	'PROMOCIÓN Y FORTALECIMIENTO DEPORTIVO','DEP01'],
[ 24 , 1 , 2 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE INFRAESTRUCTURA DEPORTIVA URBANA','DEP02'],
[ 24 , 1 , 3 ,	'CONSTRUCCIÓN Y EQUIPAMIENTO DE INFRAESTRUCTURA DEPORTIVA RURAL','DEP03'],
[ 24 , 1 , 4 ,	'ASISTENCIA TÉCNICA Y CAPACITACIÓN PARA EVENTOS DEPORTIVOS','DEP04'],
[ 24 , 1 , 5 ,	'REALIZACIÓN DE EVENTOS Y COMPETENCIAS DEPORTIVAS','DEP05'],
[ 24 , 1 , 6 ,	'OTROS','OTRSD'],
[ 24 , 1 , 7 ,	'INVESTIGACIÓN DEPORTES','INVDEP']
    ];
   foreach($subsector2s as $subsector){
    subsector2::create([
        'id_sector' => $subsector[0],
        'id_subsector1' => $subsector[1],
        'id_subsector2' => $subsector[2],
        'denominacion' => $subsector[3],
        'sigla' => $subsector[4]
    ]);
   }
    }
}
