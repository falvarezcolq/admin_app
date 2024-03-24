<?php

namespace Database\Seeders;

// use BalajiDharma\LaravelCategory\Models\CategoryType;
// use BalajiDharma\LaravelMenu\Models\Menu;
use Illuminate\Database\Seeder;
// use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\PermissionRegistrar;
use App\Models\Institucion;

class InstitucionSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // INSERT INTO institucion (cod, denominacion,  sigla,clasificador, departamento, creado_en)
        // VALUES
        $institutions =[

        [1201, 'Gobierno Autónomo Municipal de La Paz', 'LPZ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1202, 'Gobierno Autónomo Municipal de Palca', 'PLC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1203, 'Gobierno Autónomo Municipal de Mecapaca', 'MEC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1204, 'Gobierno Autónomo Municipal Ecológico Productivo de Achocalla', 'GAMEPA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1205, 'Gobierno Autónomo Municipal de El Alto de La Paz', 'ELLA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1206, 'Gobierno Autónomo Municipal de Viacha', 'VIA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1207, 'Gobierno Autónomo Municipal de Guaqui', 'GUA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1208, 'Gobierno Autónomo Municipal de Tiahuanacu', 'TIA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1209, 'Gobierno Autónomo Municipal de Desaguadero', 'DES', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1210, 'Gobierno Autónomo Municipal de Caranavi', 'CRV', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1211, 'Gobierno Autónomo Municipal de Sica Sica (Villa Aroma)', 'SIC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1212, 'Gobierno Autónomo Municipal de Umala', 'UMA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1213, 'Gobierno Autónomo Municipal de Ayo Ayo', 'AYO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1214, 'Gobierno Autónomo Municipal de Calamarca', 'CAL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1215, 'Gobierno Autónomo Municipal de Patacamaya', 'PAT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1216, 'Gobierno Autónomo Municipal de Colquencha', 'COL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1217, 'Gobierno Autónomo Municipal de Collana', 'COA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1218, 'Gobierno Autónomo Municipal de Inquisivi', 'INQ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1219, 'Gobierno Autónomo Municipal de Quime', 'QUI', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1220, 'Gobierno Autónomo Municipal de Cajuata', 'CAJ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1221, 'Gobierno Autónomo Municipal de Colquiri', 'COQ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1222, 'Gobierno Autónomo Municipal de Ichoca', 'ICH', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1223, 'Gobierno Autónomo Municipal de Villa Libertad Licoma', 'LIC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1224, 'Gobierno Autónomo Municipal de Achacachi', 'AHÍ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1225, 'Gobierno Autónomo Municipal de Ancoraimes', 'ANCO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1226, 'Gobierno Autónomo Municipal de Sorata', 'SOR', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1227, 'Gobierno Autónomo Municipal de Guanay', 'GNY', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1228, 'Gobierno Autónomo Municipal de Tacacoma', 'TAT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1229, 'Gobierno Autónomo Municipal de Tipuani', 'TIP', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1230, 'Gobierno Autónomo Municipal de Quiabaya', 'QBY', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1231, 'Gobierno Autónomo Municipal de Combaya', 'COM', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1232, 'Gobierno Autónomo Municipal de Copacabana', 'COP', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1233, 'Gobierno Autónomo Municipal de San Pedro de Tiquina', 'SPT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1234, 'Gobierno Autónomo Municipal de Tito Yupanqui', 'YUP', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1235, 'Gobierno Autónomo Municipal de Chuma', 'CHU', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1236, 'Gobierno Autónomo Municipal de Ayata', 'AYA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1237, 'Gobierno Autónomo Municipal de Aucapata', 'AUC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1238, 'Gobierno Autónomo Municipal de Corocoro', 'COR', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1239, 'Gobierno Autónomo Municipal de Caquiaviri', 'CAQ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1240, 'Gobierno Autónomo Municipal de Calacoto', 'CAC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1241, 'Gobierno Autónomo Municipal de Comanche', 'CMC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1242, 'Gobierno Autónomo Municipal de Charaña', 'CHA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1243, 'Gobierno Autónomo Municipal de Waldo Ballivián', 'BAL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1244, 'Gobierno Autónomo Municipal de Nazacara de Pacajes', 'NAZ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1245, 'Gobierno Autónomo Municipal de Santiago de Callapa', 'SCA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1246, 'Gobierno Autónomo Municipal de Puerto Acosta', 'ACO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1247, 'Gobierno Autónomo Municipal de Mocomoco', 'MOC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1248, 'Gobierno Autónomo Municipal de Carabuco', 'CCH', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1249, 'Gobierno Autónomo Municipal de Apolo', 'APO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1250, 'Gobierno Autónomo Municipal de Pelechuco', 'PEL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1251, 'Gobierno Autónomo Municipal de Luribay', 'LUR', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1252, 'Gobierno Autónomo Municipal de Sapahaqui', 'SAPA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1253, 'Gobierno Autónomo Municipal de Yaco', 'YAC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1254, 'Gobierno Autónomo Municipal de Malla', 'MAL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1255, 'Gobierno Autónomo Municipal de Cairoma', 'CAI', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1256, 'Gobierno Autónomo Municipal de Chulumani (Villa de la Libertad)', 'CHL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1257, 'Gobierno Autónomo Municipal de Irupana (Villa de Lanza)', 'IRU', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1258, 'Gobierno Autónomo Municipal de Yanacachi', 'YAN', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1259, 'Gobierno Autónomo Municipal de Palos Blancos', 'BLA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1260, 'Gobierno Autónomo Municipal de La Asunta', 'ASU', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1261, 'Gobierno Autónomo Municipal de Pucarani', 'PUC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1262, 'Gobierno Autónomo Municipal de Laja', 'LAJ', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1263, 'Gobierno Autónomo Municipal de Batallas', 'BAT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1264, 'Gobierno Autónomo Municipal de Puerto Pérez', 'PER', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1265, 'Gobierno Autónomo Municipal de Coroico', 'COC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1266, 'Gobierno Autónomo Municipal de Coripata', 'CRI', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1267, 'Gobierno Autónomo Municipal de Ixiamas', 'IXI', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1268, 'Gobierno Autónomo Municipal de San Buenaventura', 'SBV', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1269, 'Gobierno Autónomo Municipal de General Juan José Pérez (Charazani)', 'CPE', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1270, 'Gobierno Autónomo Municipal de Curva', 'CUR', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1271, 'Gobierno Autónomo Municipal de San Pedro de Curahuara', 'PEC', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1272, 'Gobierno Autónomo Municipal de Papel Pampa', 'PAP', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1273, 'Gobierno Autónomo Municipal de Chacarilla', 'CLL', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1274, 'Gobierno Autónomo Municipal de Santiago de Machaca', 'SMA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1275, 'Gobierno Autónomo Municipal de Catacora', 'CAT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1276, 'Gobierno Autónomo Municipal de Mapiri', 'MAP', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1277, 'Gobierno Autónomo Municipal de Teoponte', 'TEO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1278, 'Gobierno Autónomo Municipal de San Andrés de Machaca', 'AMA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1279, 'Gobierno Autónomo Municipal de Jesús de Machaca', 'JMK', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1280, 'Gobierno Autónomo Municipal de Taraco', 'TCO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1281, 'Gobierno Autónomo Municipal de Huarina', 'HUAR', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1282, 'Gobierno Autónomo Municipal de Santiago de Huata', 'SAH', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1283, 'Gobierno Autónomo Municipal de Escoma', 'ESCO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1284, 'Gobierno Autónomo Municipal de Humanata', 'HUMA', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1285, 'Gobierno Autónomo Municipal de Alto Beni', 'ABN', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1286, 'Gobierno Autónomo Municipal de Huatajata', 'HUAT', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1287, 'Gobierno Autónomo Municipal de Chua Cocani', 'CHCO', 'Gobiernos Autónomos Municipales del Departamento de La Paz', 'LA PAZ', NOW()],
        [1701, 'Gobierno Autónomo Municipal de Santa Cruz de La Sierra', 'SCZ', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1702, 'Gobierno Autónomo Municipal de Cotoca', 'CTC', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1703, 'Gobierno Autónomo Municipal de Porongo (Ayacucho)', 'PRG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1704, 'Gobierno Autónomo Municipal de La Guardia', 'LGU', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1705, 'Gobierno Autónomo Municipal de El Torno', 'TOR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1706, 'Gobierno Autónomo Municipal de Warnes', 'WAR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1707, 'Gobierno Autónomo Municipal de San Ignacio (San Ignacio de Velasco)', 'ING', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1708, 'Gobierno Autónomo Municipal de San Miguel (San Miguel de Velasco)', 'MIG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1709, 'Gobierno Autónomo Municipal de San Rafael', 'RAF', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1710, 'Gobierno Autónomo Municipal de Buena Vista', 'BUE', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1711, 'Gobierno Autónomo Municipal de San Carlos', 'CRL', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1712, 'Gobierno Autónomo Municipal de Yapacaní', 'YAP', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1713, 'Gobierno Autónomo Municipal de San José', 'JOS', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1714, 'Gobierno Autónomo Municipal de Pailón', 'PAI', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1715, 'Gobierno Autónomo Municipal de Roboré', 'ROB', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1716, 'Gobierno Autónomo Municipal de Portachuelo', 'PCH', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1717, 'Gobierno Autónomo Municipal de Santa Rosa del Sara', 'SRS', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1718, 'Gobierno Autónomo Municipal de Lagunillas', 'LAG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1720, 'Gobierno Autónomo Municipal de Cabezas', 'CAB', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1721, 'Gobierno Autónomo Municipal de Cuevo', 'CUE', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1723, 'Gobierno Autónomo Municipal de Camiri', 'CMR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1724, 'Gobierno Autónomo Municipal de Boyuibe', 'BOY', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1725, 'Gobierno Autónomo Municipal de Vallegrande', 'GRA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1726, 'Gobierno Autónomo Municipal de Trigal', 'TRG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1727, 'Gobierno Autónomo Municipal de Moro Moro', 'MOR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1728, 'Gobierno Autónomo Municipal de Postrer Valle', 'POS', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1729, 'Gobierno Autónomo Municipal de Pucara', 'PCR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1730, 'Gobierno Autónomo Municipal de Samaipata', 'SAM', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1731, 'Gobierno Autónomo Municipal de Pampa Grande', 'PAG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1732, 'Gobierno Autónomo Municipal de Mairana', 'MAY', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1733, 'Gobierno Autónomo Municipal de Quirusillas', 'QRS', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1734, 'Gobierno Autónomo Municipal de Montero', 'MTR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1735, 'Gobierno Autónomo Municipal de General Agustín Saavedra', 'SAA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1736, 'Gobierno Autónomo Municipal de Mineros', 'MIN', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1737, 'Gobierno Autónomo Municipal de Concepción', 'CON', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1738, 'Gobierno Autónomo Municipal de San Javier', 'SJA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1739, 'Gobierno Autónomo Municipal de San Julián', 'JUL', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1740, 'Gobierno Autónomo Municipal de San Matías', 'MAT', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1741, 'Gobierno Autónomo Municipal de Comarapa', 'CMP', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1742, 'Gobierno Autónomo Municipal de Saipina', 'SAI', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1743, 'Gobierno Autónomo Municipal de Puerto Suárez', 'SUA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1744, 'Gobierno Autónomo Municipal de Puerto Quijarro', 'PQO', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1745, 'Gobierno Autónomo Municipal de Ascención de Guarayos', 'ADG', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1746, 'Gobierno Autónomo Municipal de Urubicha', 'URU', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1747, 'Gobierno Autónomo Municipal de El Puente', 'PUE', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1748, 'Gobierno Autónomo Municipal de Okinawa Uno', 'OKI', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1749, 'Gobierno Autónomo Municipal de San Antonio de Lomerio', 'ANL', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1750, 'Gobierno Autónomo Municipal de San Ramón', 'SRA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1751, 'Gobierno Autónomo Municipal de El Carmen Rivero Tórrez', 'CRT', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1752, 'Gobierno Autónomo Municipal de San Juan', 'SJU', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1753, 'Gobierno Autónomo Municipal de Fernández Alonso', 'FAL', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1754, 'Gobierno Autónomo Municipal de San Pedro', 'PDR', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1755, 'Gobierno Autónomo Municipal de Cuatro Cañadas', 'CCA', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()],
        [1756, 'Gobierno Autónomo Municipal de Colpa Bélgica', 'CBE', 'Gobiernos Autónomos Municipales del Departamento de Santa Cruz', 'SANTA CRUZ', NOW()]
        ];

        foreach($institutions as $institution){
            Institucion::create([
                'id_institucion' => $institution[0],
                'denominacion' => $institution[1],
                'sigla' => $institution[2],
                'clasificador' => $institution[3],
                'departamento' => $institution[4],
                'creado_en' => $institution[5]
            ]);
        }
        

    }
}
