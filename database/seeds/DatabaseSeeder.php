<?php

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

    	DB::table('ubigeo')->delete();
    	DB::table('tipo_documento')->delete();
    	DB::table('tipo_persona')->delete();
    	DB::table('paises')->delete();
    	DB::table('usuarios')->delete();

    	DB::select("ALTER TABLE sys_seb_ubigeo AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_tipo_documento AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_tipo_persona AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_paises AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_usuarios AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_cargos AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_automoviles AUTO_INCREMENT = 1;");
        DB::select("ALTER TABLE sys_seb_empleados AUTO_INCREMENT = 1;");


        DB::table("cargos")->insert( [
			'nombre' => "Cargo 1",
			]);

        DB::table("cargos")->insert( [
			'nombre' => "Cargo 2",
			]);

        DB::table("cargos")->insert( [
			'nombre' => "Cargo 3",
			]);


    	DB::table("usuarios")->insert( [
			'nombre' => "Pedro Perez",
			'email'=>'demo@avicola.com',
			'password'=> Hash::make('secret'),
			]);


    	DB::table("paises")->insert( [
			'id'=>1,
			'codigo'=>'AF',
			'nombre'=>'Afganistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>2,
			'codigo'=>'AX',
			'nombre'=>'Islas Gland'
			] );


						
			DB::table("paises")->insert( [
			'id'=>3,
			'codigo'=>'AL',
			'nombre'=>'Albania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>4,
			'codigo'=>'DE',
			'nombre'=>'Alemania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>5,
			'codigo'=>'AD',
			'nombre'=>'Andorra'
			] );


						
			DB::table("paises")->insert( [
			'id'=>6,
			'codigo'=>'AO',
			'nombre'=>'Angola'
			] );


						
			DB::table("paises")->insert( [
			'id'=>7,
			'codigo'=>'AI',
			'nombre'=>'Anguilla'
			] );


						
			DB::table("paises")->insert( [
			'id'=>8,
			'codigo'=>'AQ',
			'nombre'=>'Antártida'
			] );


						
			DB::table("paises")->insert( [
			'id'=>9,
			'codigo'=>'AG',
			'nombre'=>'Antigua y Barbuda'
			] );


						
			DB::table("paises")->insert( [
			'id'=>10,
			'codigo'=>'AN',
			'nombre'=>'Antillas Holandesas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>11,
			'codigo'=>'SA',
			'nombre'=>'Arabia Saudí'
			] );


						
			DB::table("paises")->insert( [
			'id'=>12,
			'codigo'=>'DZ',
			'nombre'=>'Argelia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>13,
			'codigo'=>'AR',
			'nombre'=>'Argentina'
			] );


						
			DB::table("paises")->insert( [
			'id'=>14,
			'codigo'=>'AM',
			'nombre'=>'Armenia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>15,
			'codigo'=>'AW',
			'nombre'=>'Aruba'
			] );


						
			DB::table("paises")->insert( [
			'id'=>16,
			'codigo'=>'AU',
			'nombre'=>'Australia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>17,
			'codigo'=>'AT',
			'nombre'=>'Austria'
			] );


						
			DB::table("paises")->insert( [
			'id'=>18,
			'codigo'=>'AZ',
			'nombre'=>'Azerbaiyán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>19,
			'codigo'=>'BS',
			'nombre'=>'Bahamas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>20,
			'codigo'=>'BH',
			'nombre'=>'Bahréin'
			] );


						
			DB::table("paises")->insert( [
			'id'=>21,
			'codigo'=>'BD',
			'nombre'=>'Bangladesh'
			] );


						
			DB::table("paises")->insert( [
			'id'=>22,
			'codigo'=>'BB',
			'nombre'=>'Barbados'
			] );


						
			DB::table("paises")->insert( [
			'id'=>23,
			'codigo'=>'BY',
			'nombre'=>'Bielorrusia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>24,
			'codigo'=>'BE',
			'nombre'=>'Bélgica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>25,
			'codigo'=>'BZ',
			'nombre'=>'Belice'
			] );


						
			DB::table("paises")->insert( [
			'id'=>26,
			'codigo'=>'BJ',
			'nombre'=>'Benin'
			] );


						
			DB::table("paises")->insert( [
			'id'=>27,
			'codigo'=>'BM',
			'nombre'=>'Bermudas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>28,
			'codigo'=>'BT',
			'nombre'=>'Bhután'
			] );


						
			DB::table("paises")->insert( [
			'id'=>29,
			'codigo'=>'BO',
			'nombre'=>'Bolivia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>30,
			'codigo'=>'BA',
			'nombre'=>'Bosnia y Herzegovina'
			] );


						
			DB::table("paises")->insert( [
			'id'=>31,
			'codigo'=>'BW',
			'nombre'=>'Botsuana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>32,
			'codigo'=>'BV',
			'nombre'=>'Isla Bouvet'
			] );


						
			DB::table("paises")->insert( [
			'id'=>33,
			'codigo'=>'BR',
			'nombre'=>'Brasil'
			] );


						
			DB::table("paises")->insert( [
			'id'=>34,
			'codigo'=>'BN',
			'nombre'=>'Brunéi'
			] );


						
			DB::table("paises")->insert( [
			'id'=>35,
			'codigo'=>'BG',
			'nombre'=>'Bulgaria'
			] );


						
			DB::table("paises")->insert( [
			'id'=>36,
			'codigo'=>'BF',
			'nombre'=>'Burkina Faso'
			] );


						
			DB::table("paises")->insert( [
			'id'=>37,
			'codigo'=>'BI',
			'nombre'=>'Burundi'
			] );


						
			DB::table("paises")->insert( [
			'id'=>38,
			'codigo'=>'CV',
			'nombre'=>'Cabo Verde'
			] );


						
			DB::table("paises")->insert( [
			'id'=>39,
			'codigo'=>'KY',
			'nombre'=>'Islas Caimán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>40,
			'codigo'=>'KH',
			'nombre'=>'Camboya'
			] );


						
			DB::table("paises")->insert( [
			'id'=>41,
			'codigo'=>'CM',
			'nombre'=>'Camerún'
			] );


						
			DB::table("paises")->insert( [
			'id'=>42,
			'codigo'=>'CA',
			'nombre'=>'Canadá'
			] );


						
			DB::table("paises")->insert( [
			'id'=>43,
			'codigo'=>'CF',
			'nombre'=>'República Centroafricana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>44,
			'codigo'=>'TD',
			'nombre'=>'Chad'
			] );


						
			DB::table("paises")->insert( [
			'id'=>45,
			'codigo'=>'CZ',
			'nombre'=>'República Checa'
			] );


						
			DB::table("paises")->insert( [
			'id'=>46,
			'codigo'=>'CL',
			'nombre'=>'Chile'
			] );


						
			DB::table("paises")->insert( [
			'id'=>47,
			'codigo'=>'CN',
			'nombre'=>'China'
			] );


						
			DB::table("paises")->insert( [
			'id'=>48,
			'codigo'=>'CY',
			'nombre'=>'Chipre'
			] );


						
			DB::table("paises")->insert( [
			'id'=>49,
			'codigo'=>'CX',
			'nombre'=>'Isla de Navidad'
			] );


						
			DB::table("paises")->insert( [
			'id'=>50,
			'codigo'=>'VA',
			'nombre'=>'Ciudad del Vaticano'
			] );


						
			DB::table("paises")->insert( [
			'id'=>51,
			'codigo'=>'CC',
			'nombre'=>'Islas Cocos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>52,
			'codigo'=>'CO',
			'nombre'=>'Colombia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>53,
			'codigo'=>'KM',
			'nombre'=>'Comoras'
			] );


						
			DB::table("paises")->insert( [
			'id'=>54,
			'codigo'=>'CD',
			'nombre'=>'República Democrática del Congo'
			] );


						
			DB::table("paises")->insert( [
			'id'=>55,
			'codigo'=>'CG',
			'nombre'=>'Congo'
			] );


						
			DB::table("paises")->insert( [
			'id'=>56,
			'codigo'=>'CK',
			'nombre'=>'Islas Cook'
			] );


						
			DB::table("paises")->insert( [
			'id'=>57,
			'codigo'=>'KP',
			'nombre'=>'Corea del Norte'
			] );


						
			DB::table("paises")->insert( [
			'id'=>58,
			'codigo'=>'KR',
			'nombre'=>'Corea del Sur'
			] );


						
			DB::table("paises")->insert( [
			'id'=>59,
			'codigo'=>'CI',
			'nombre'=>'Costa de Marfil'
			] );


						
			DB::table("paises")->insert( [
			'id'=>60,
			'codigo'=>'CR',
			'nombre'=>'Costa Rica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>61,
			'codigo'=>'HR',
			'nombre'=>'Croacia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>62,
			'codigo'=>'CU',
			'nombre'=>'Cuba'
			] );


						
			DB::table("paises")->insert( [
			'id'=>63,
			'codigo'=>'DK',
			'nombre'=>'Dinamarca'
			] );


						
			DB::table("paises")->insert( [
			'id'=>64,
			'codigo'=>'DM',
			'nombre'=>'Dominica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>65,
			'codigo'=>'DO',
			'nombre'=>'República Dominicana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>66,
			'codigo'=>'EC',
			'nombre'=>'Ecuador'
			] );


						
			DB::table("paises")->insert( [
			'id'=>67,
			'codigo'=>'EG',
			'nombre'=>'Egipto'
			] );


						
			DB::table("paises")->insert( [
			'id'=>68,
			'codigo'=>'SV',
			'nombre'=>'El Salvador'
			] );


						
			DB::table("paises")->insert( [
			'id'=>69,
			'codigo'=>'AE',
			'nombre'=>'Emiratos Árabes Unidos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>70,
			'codigo'=>'ER',
			'nombre'=>'Eritrea'
			] );


						
			DB::table("paises")->insert( [
			'id'=>71,
			'codigo'=>'SK',
			'nombre'=>'Eslovaquia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>72,
			'codigo'=>'SI',
			'nombre'=>'Eslovenia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>73,
			'codigo'=>'ES',
			'nombre'=>'España'
			] );


						
			DB::table("paises")->insert( [
			'id'=>74,
			'codigo'=>'UM',
			'nombre'=>'Islas ultramarinas de Estados Unidos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>75,
			'codigo'=>'US',
			'nombre'=>'Estados Unidos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>76,
			'codigo'=>'EE',
			'nombre'=>'Estonia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>77,
			'codigo'=>'ET',
			'nombre'=>'Etiopía'
			] );


						
			DB::table("paises")->insert( [
			'id'=>78,
			'codigo'=>'FO',
			'nombre'=>'Islas Feroe'
			] );


						
			DB::table("paises")->insert( [
			'id'=>79,
			'codigo'=>'PH',
			'nombre'=>'Filipinas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>80,
			'codigo'=>'FI',
			'nombre'=>'Finlandia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>81,
			'codigo'=>'FJ',
			'nombre'=>'Fiyi'
			] );


						
			DB::table("paises")->insert( [
			'id'=>82,
			'codigo'=>'FR',
			'nombre'=>'Francia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>83,
			'codigo'=>'GA',
			'nombre'=>'Gabón'
			] );


						
			DB::table("paises")->insert( [
			'id'=>84,
			'codigo'=>'GM',
			'nombre'=>'Gambia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>85,
			'codigo'=>'GE',
			'nombre'=>'Georgia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>86,
			'codigo'=>'GS',
			'nombre'=>'Islas Georgias del Sur y Sandwich del Sur'
			] );


						
			DB::table("paises")->insert( [
			'id'=>87,
			'codigo'=>'GH',
			'nombre'=>'Ghana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>88,
			'codigo'=>'GI',
			'nombre'=>'Gibraltar'
			] );


						
			DB::table("paises")->insert( [
			'id'=>89,
			'codigo'=>'GD',
			'nombre'=>'Granada'
			] );


						
			DB::table("paises")->insert( [
			'id'=>90,
			'codigo'=>'GR',
			'nombre'=>'Grecia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>91,
			'codigo'=>'GL',
			'nombre'=>'Groenlandia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>92,
			'codigo'=>'GP',
			'nombre'=>'Guadalupe'
			] );


						
			DB::table("paises")->insert( [
			'id'=>93,
			'codigo'=>'GU',
			'nombre'=>'Guam'
			] );


						
			DB::table("paises")->insert( [
			'id'=>94,
			'codigo'=>'GT',
			'nombre'=>'Guatemala'
			] );


						
			DB::table("paises")->insert( [
			'id'=>95,
			'codigo'=>'GF',
			'nombre'=>'Guayana Francesa'
			] );


						
			DB::table("paises")->insert( [
			'id'=>96,
			'codigo'=>'GN',
			'nombre'=>'Guinea'
			] );


						
			DB::table("paises")->insert( [
			'id'=>97,
			'codigo'=>'GQ',
			'nombre'=>'Guinea Ecuatorial'
			] );


						
			DB::table("paises")->insert( [
			'id'=>98,
			'codigo'=>'GW',
			'nombre'=>'Guinea-Bissau'
			] );


						
			DB::table("paises")->insert( [
			'id'=>99,
			'codigo'=>'GY',
			'nombre'=>'Guyana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>100,
			'codigo'=>'HT',
			'nombre'=>'Haití'
			] );


						
			DB::table("paises")->insert( [
			'id'=>101,
			'codigo'=>'HM',
			'nombre'=>'Islas Heard y McDonald'
			] );


						
			DB::table("paises")->insert( [
			'id'=>102,
			'codigo'=>'HN',
			'nombre'=>'Honduras'
			] );


						
			DB::table("paises")->insert( [
			'id'=>103,
			'codigo'=>'HK',
			'nombre'=>'Hong Kong'
			] );


						
			DB::table("paises")->insert( [
			'id'=>104,
			'codigo'=>'HU',
			'nombre'=>'Hungría'
			] );


						
			DB::table("paises")->insert( [
			'id'=>105,
			'codigo'=>'IN',
			'nombre'=>'India'
			] );


						
			DB::table("paises")->insert( [
			'id'=>106,
			'codigo'=>'ID',
			'nombre'=>'Indonesia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>107,
			'codigo'=>'IR',
			'nombre'=>'Irán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>108,
			'codigo'=>'IQ',
			'nombre'=>'Iraq'
			] );


						
			DB::table("paises")->insert( [
			'id'=>109,
			'codigo'=>'IE',
			'nombre'=>'Irlanda'
			] );


						
			DB::table("paises")->insert( [
			'id'=>110,
			'codigo'=>'IS',
			'nombre'=>'Islandia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>111,
			'codigo'=>'IL',
			'nombre'=>'Israel'
			] );


						
			DB::table("paises")->insert( [
			'id'=>112,
			'codigo'=>'IT',
			'nombre'=>'Italia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>113,
			'codigo'=>'JM',
			'nombre'=>'Jamaica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>114,
			'codigo'=>'JP',
			'nombre'=>'Japón'
			] );


						
			DB::table("paises")->insert( [
			'id'=>115,
			'codigo'=>'JO',
			'nombre'=>'Jordania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>116,
			'codigo'=>'KZ',
			'nombre'=>'Kazajstán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>117,
			'codigo'=>'KE',
			'nombre'=>'Kenia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>118,
			'codigo'=>'KG',
			'nombre'=>'Kirguistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>119,
			'codigo'=>'KI',
			'nombre'=>'Kiribati'
			] );


						
			DB::table("paises")->insert( [
			'id'=>120,
			'codigo'=>'KW',
			'nombre'=>'Kuwait'
			] );


						
			DB::table("paises")->insert( [
			'id'=>121,
			'codigo'=>'LA',
			'nombre'=>'Laos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>122,
			'codigo'=>'LS',
			'nombre'=>'Lesotho'
			] );


						
			DB::table("paises")->insert( [
			'id'=>123,
			'codigo'=>'LV',
			'nombre'=>'Letonia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>124,
			'codigo'=>'LB',
			'nombre'=>'Líbano'
			] );


						
			DB::table("paises")->insert( [
			'id'=>125,
			'codigo'=>'LR',
			'nombre'=>'Liberia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>126,
			'codigo'=>'LY',
			'nombre'=>'Libia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>127,
			'codigo'=>'LI',
			'nombre'=>'Liechtenstein'
			] );


						
			DB::table("paises")->insert( [
			'id'=>128,
			'codigo'=>'LT',
			'nombre'=>'Lituania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>129,
			'codigo'=>'LU',
			'nombre'=>'Luxemburgo'
			] );


						
			DB::table("paises")->insert( [
			'id'=>130,
			'codigo'=>'MO',
			'nombre'=>'Macao'
			] );


						
			DB::table("paises")->insert( [
			'id'=>131,
			'codigo'=>'MK',
			'nombre'=>'ARY Macedonia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>132,
			'codigo'=>'MG',
			'nombre'=>'Madagascar'
			] );


						
			DB::table("paises")->insert( [
			'id'=>133,
			'codigo'=>'MY',
			'nombre'=>'Malasia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>134,
			'codigo'=>'MW',
			'nombre'=>'Malawi'
			] );


						
			DB::table("paises")->insert( [
			'id'=>135,
			'codigo'=>'MV',
			'nombre'=>'Maldivas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>136,
			'codigo'=>'ML',
			'nombre'=>'Malí'
			] );


						
			DB::table("paises")->insert( [
			'id'=>137,
			'codigo'=>'MT',
			'nombre'=>'Malta'
			] );


						
			DB::table("paises")->insert( [
			'id'=>138,
			'codigo'=>'FK',
			'nombre'=>'Islas Malvinas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>139,
			'codigo'=>'MP',
			'nombre'=>'Islas Marianas del Norte'
			] );


						
			DB::table("paises")->insert( [
			'id'=>140,
			'codigo'=>'MA',
			'nombre'=>'Marruecos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>141,
			'codigo'=>'MH',
			'nombre'=>'Islas Marshall'
			] );


						
			DB::table("paises")->insert( [
			'id'=>142,
			'codigo'=>'MQ',
			'nombre'=>'Martinica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>143,
			'codigo'=>'MU',
			'nombre'=>'Mauricio'
			] );


						
			DB::table("paises")->insert( [
			'id'=>144,
			'codigo'=>'MR',
			'nombre'=>'Mauritania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>145,
			'codigo'=>'YT',
			'nombre'=>'Mayotte'
			] );


						
			DB::table("paises")->insert( [
			'id'=>146,
			'codigo'=>'MX',
			'nombre'=>'México'
			] );


						
			DB::table("paises")->insert( [
			'id'=>147,
			'codigo'=>'FM',
			'nombre'=>'Micronesia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>148,
			'codigo'=>'MD',
			'nombre'=>'Moldavia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>149,
			'codigo'=>'MC',
			'nombre'=>'Mónaco'
			] );


						
			DB::table("paises")->insert( [
			'id'=>150,
			'codigo'=>'MN',
			'nombre'=>'Mongolia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>151,
			'codigo'=>'MS',
			'nombre'=>'Montserrat'
			] );


						
			DB::table("paises")->insert( [
			'id'=>152,
			'codigo'=>'MZ',
			'nombre'=>'Mozambique'
			] );


						
			DB::table("paises")->insert( [
			'id'=>153,
			'codigo'=>'MM',
			'nombre'=>'Myanmar'
			] );


						
			DB::table("paises")->insert( [
			'id'=>154,
			'codigo'=>'NA',
			'nombre'=>'Namibia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>155,
			'codigo'=>'NR',
			'nombre'=>'Nauru'
			] );


						
			DB::table("paises")->insert( [
			'id'=>156,
			'codigo'=>'NP',
			'nombre'=>'Nepal'
			] );


						
			DB::table("paises")->insert( [
			'id'=>157,
			'codigo'=>'NI',
			'nombre'=>'Nicaragua'
			] );


						
			DB::table("paises")->insert( [
			'id'=>158,
			'codigo'=>'NE',
			'nombre'=>'Níger'
			] );


						
			DB::table("paises")->insert( [
			'id'=>159,
			'codigo'=>'NG',
			'nombre'=>'Nigeria'
			] );


						
			DB::table("paises")->insert( [
			'id'=>160,
			'codigo'=>'NU',
			'nombre'=>'Niue'
			] );


						
			DB::table("paises")->insert( [
			'id'=>161,
			'codigo'=>'NF',
			'nombre'=>'Isla Norfolk'
			] );


						
			DB::table("paises")->insert( [
			'id'=>162,
			'codigo'=>'NO',
			'nombre'=>'Noruega'
			] );


						
			DB::table("paises")->insert( [
			'id'=>163,
			'codigo'=>'NC',
			'nombre'=>'Nueva Caledonia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>164,
			'codigo'=>'NZ',
			'nombre'=>'Nueva Zelanda'
			] );


						
			DB::table("paises")->insert( [
			'id'=>165,
			'codigo'=>'OM',
			'nombre'=>'Omán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>166,
			'codigo'=>'NL',
			'nombre'=>'Países Bajos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>167,
			'codigo'=>'PK',
			'nombre'=>'Pakistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>168,
			'codigo'=>'PW',
			'nombre'=>'Palau'
			] );


						
			DB::table("paises")->insert( [
			'id'=>169,
			'codigo'=>'PS',
			'nombre'=>'Palestina'
			] );


						
			DB::table("paises")->insert( [
			'id'=>170,
			'codigo'=>'PA',
			'nombre'=>'Panamá'
			] );


						
			DB::table("paises")->insert( [
			'id'=>171,
			'codigo'=>'PG',
			'nombre'=>'Papúa Nueva Guinea'
			] );


						
			DB::table("paises")->insert( [
			'id'=>172,
			'codigo'=>'PY',
			'nombre'=>'Paraguay'
			] );


						
			DB::table("paises")->insert( [
			'id'=>173,
			'codigo'=>'PE',
			'nombre'=>'Perú'
			] );


						
			DB::table("paises")->insert( [
			'id'=>174,
			'codigo'=>'PN',
			'nombre'=>'Islas Pitcairn'
			] );


						
			DB::table("paises")->insert( [
			'id'=>175,
			'codigo'=>'PF',
			'nombre'=>'Polinesia Francesa'
			] );


						
			DB::table("paises")->insert( [
			'id'=>176,
			'codigo'=>'PL',
			'nombre'=>'Polonia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>177,
			'codigo'=>'PT',
			'nombre'=>'Portugal'
			] );


						
			DB::table("paises")->insert( [
			'id'=>178,
			'codigo'=>'PR',
			'nombre'=>'Puerto Rico'
			] );


						
			DB::table("paises")->insert( [
			'id'=>179,
			'codigo'=>'QA',
			'nombre'=>'Qatar'
			] );


						
			DB::table("paises")->insert( [
			'id'=>180,
			'codigo'=>'GB',
			'nombre'=>'Reino Unido'
			] );


						
			DB::table("paises")->insert( [
			'id'=>181,
			'codigo'=>'RE',
			'nombre'=>'Reunión'
			] );


						
			DB::table("paises")->insert( [
			'id'=>182,
			'codigo'=>'RW',
			'nombre'=>'Ruanda'
			] );


						
			DB::table("paises")->insert( [
			'id'=>183,
			'codigo'=>'RO',
			'nombre'=>'Rumania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>184,
			'codigo'=>'RU',
			'nombre'=>'Rusia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>185,
			'codigo'=>'EH',
			'nombre'=>'Sahara Occidental'
			] );


						
			DB::table("paises")->insert( [
			'id'=>186,
			'codigo'=>'SB',
			'nombre'=>'Islas Salomón'
			] );


						
			DB::table("paises")->insert( [
			'id'=>187,
			'codigo'=>'WS',
			'nombre'=>'Samoa'
			] );


						
			DB::table("paises")->insert( [
			'id'=>188,
			'codigo'=>'AS',
			'nombre'=>'Samoa Americana'
			] );


						
			DB::table("paises")->insert( [
			'id'=>189,
			'codigo'=>'KN',
			'nombre'=>'San Cristóbal y Nevis'
			] );


						
			DB::table("paises")->insert( [
			'id'=>190,
			'codigo'=>'SM',
			'nombre'=>'San Marino'
			] );


						
			DB::table("paises")->insert( [
			'id'=>191,
			'codigo'=>'PM',
			'nombre'=>'San Pedro y Miquelón'
			] );


						
			DB::table("paises")->insert( [
			'id'=>192,
			'codigo'=>'VC',
			'nombre'=>'San Vicente y las Granadinas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>193,
			'codigo'=>'SH',
			'nombre'=>'Santa Helena'
			] );


						
			DB::table("paises")->insert( [
			'id'=>194,
			'codigo'=>'LC',
			'nombre'=>'Santa Lucía'
			] );


						
			DB::table("paises")->insert( [
			'id'=>195,
			'codigo'=>'ST',
			'nombre'=>'Santo Tomé y Príncipe'
			] );


						
			DB::table("paises")->insert( [
			'id'=>196,
			'codigo'=>'SN',
			'nombre'=>'Senegal'
			] );


						
			DB::table("paises")->insert( [
			'id'=>197,
			'codigo'=>'CS',
			'nombre'=>'Serbia y Montenegro'
			] );


						
			DB::table("paises")->insert( [
			'id'=>198,
			'codigo'=>'SC',
			'nombre'=>'Seychelles'
			] );


						
			DB::table("paises")->insert( [
			'id'=>199,
			'codigo'=>'SL',
			'nombre'=>'Sierra Leona'
			] );


						
			DB::table("paises")->insert( [
			'id'=>200,
			'codigo'=>'SG',
			'nombre'=>'Singapur'
			] );


						
			DB::table("paises")->insert( [
			'id'=>201,
			'codigo'=>'SY',
			'nombre'=>'Siria'
			] );


						
			DB::table("paises")->insert( [
			'id'=>202,
			'codigo'=>'SO',
			'nombre'=>'Somalia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>203,
			'codigo'=>'LK',
			'nombre'=>'Sri Lanka'
			] );


						
			DB::table("paises")->insert( [
			'id'=>204,
			'codigo'=>'SZ',
			'nombre'=>'Suazilandia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>205,
			'codigo'=>'ZA',
			'nombre'=>'Sudáfrica'
			] );


						
			DB::table("paises")->insert( [
			'id'=>206,
			'codigo'=>'SD',
			'nombre'=>'Sudán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>207,
			'codigo'=>'SE',
			'nombre'=>'Suecia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>208,
			'codigo'=>'CH',
			'nombre'=>'Suiza'
			] );


						
			DB::table("paises")->insert( [
			'id'=>209,
			'codigo'=>'SR',
			'nombre'=>'Surinam'
			] );


						
			DB::table("paises")->insert( [
			'id'=>210,
			'codigo'=>'SJ',
			'nombre'=>'Svalbard y Jan Mayen'
			] );


						
			DB::table("paises")->insert( [
			'id'=>211,
			'codigo'=>'TH',
			'nombre'=>'Tailandia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>212,
			'codigo'=>'TW',
			'nombre'=>'Taiwán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>213,
			'codigo'=>'TZ',
			'nombre'=>'Tanzania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>214,
			'codigo'=>'TJ',
			'nombre'=>'Tayikistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>215,
			'codigo'=>'IO',
			'nombre'=>'Territorio Británico del Océano Índico'
			] );


						
			DB::table("paises")->insert( [
			'id'=>216,
			'codigo'=>'TF',
			'nombre'=>'Territorios Australes Franceses'
			] );


						
			DB::table("paises")->insert( [
			'id'=>217,
			'codigo'=>'TL',
			'nombre'=>'Timor Oriental'
			] );


						
			DB::table("paises")->insert( [
			'id'=>218,
			'codigo'=>'TG',
			'nombre'=>'Togo'
			] );


						
			DB::table("paises")->insert( [
			'id'=>219,
			'codigo'=>'TK',
			'nombre'=>'Tokelau'
			] );


						
			DB::table("paises")->insert( [
			'id'=>220,
			'codigo'=>'TO',
			'nombre'=>'Tonga'
			] );


						
			DB::table("paises")->insert( [
			'id'=>221,
			'codigo'=>'TT',
			'nombre'=>'Trinidad y Tobago'
			] );


						
			DB::table("paises")->insert( [
			'id'=>222,
			'codigo'=>'TN',
			'nombre'=>'Túnez'
			] );


						
			DB::table("paises")->insert( [
			'id'=>223,
			'codigo'=>'TC',
			'nombre'=>'Islas Turcas y Caicos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>224,
			'codigo'=>'TM',
			'nombre'=>'Turkmenistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>225,
			'codigo'=>'TR',
			'nombre'=>'Turquía'
			] );


						
			DB::table("paises")->insert( [
			'id'=>226,
			'codigo'=>'TV',
			'nombre'=>'Tuvalu'
			] );


						
			DB::table("paises")->insert( [
			'id'=>227,
			'codigo'=>'UA',
			'nombre'=>'Ucrania'
			] );


						
			DB::table("paises")->insert( [
			'id'=>228,
			'codigo'=>'UG',
			'nombre'=>'Uganda'
			] );


						
			DB::table("paises")->insert( [
			'id'=>229,
			'codigo'=>'UY',
			'nombre'=>'Uruguay'
			] );


						
			DB::table("paises")->insert( [
			'id'=>230,
			'codigo'=>'UZ',
			'nombre'=>'Uzbekistán'
			] );


						
			DB::table("paises")->insert( [
			'id'=>231,
			'codigo'=>'VU',
			'nombre'=>'Vanuatu'
			] );


						
			DB::table("paises")->insert( [
			'id'=>232,
			'codigo'=>'VE',
			'nombre'=>'Venezuela'
			] );


						
			DB::table("paises")->insert( [
			'id'=>233,
			'codigo'=>'VN',
			'nombre'=>'Vietnam'
			] );


						
			DB::table("paises")->insert( [
			'id'=>234,
			'codigo'=>'VG',
			'nombre'=>'Islas Vírgenes Británicas'
			] );


						
			DB::table("paises")->insert( [
			'id'=>235,
			'codigo'=>'VI',
			'nombre'=>'Islas Vírgenes de los Estados Unidos'
			] );


						
			DB::table("paises")->insert( [
			'id'=>236,
			'codigo'=>'WF',
			'nombre'=>'Wallis y Futuna'
			] );


						
			DB::table("paises")->insert( [
			'id'=>237,
			'codigo'=>'YE',
			'nombre'=>'Yemen'
			] );


						
			DB::table("paises")->insert( [
			'id'=>238,
			'codigo'=>'DJ',
			'nombre'=>'Yibuti'
			] );


						
			DB::table("paises")->insert( [
			'id'=>239,
			'codigo'=>'ZM',
			'nombre'=>'Zambia'
			] );


						
			DB::table("paises")->insert( [
			'id'=>240,
			'codigo'=>'ZW',
			'nombre'=>'Zimbabue'
			] );





        DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10000,
			'departamento'=>'AMAZONAS',
			'provincia'=>'AMAZONAS',
			'distrito'=>'AMAZONAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10100,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'CHACHAPOYAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10101,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'CHACHAPOYAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10102,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'ASUNCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10103,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'BALSAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10104,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'CHETO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10105,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'CHILIQUIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10106,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'CHUQUIBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10107,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'GRANADA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10108,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'HUANCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10109,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'LA JALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10110,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'LEIMEBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10111,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'LEVANTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10112,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'MAGDALENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10113,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'MARISCAL CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10114,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'MOLINOPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10115,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'MONTEVIDEO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10116,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'OLLEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10117,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'QUINJALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10118,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'SAN FRANCISCO DE DAGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10119,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'SAN ISIDRO DE MAINO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10120,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'SOLOCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10121,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CHACHAPOYAS',
			'distrito'=>'SONCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10200,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'BAGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10201,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'BAGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10202,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'ARAMANGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10203,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'COPALLIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10204,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'EL PARCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10205,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'IMAZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10206,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BAGUA',
			'distrito'=>'LA PECA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10300,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'BONGARÁ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10301,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'JUMBILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10302,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'CHISQUILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10303,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'CHURUJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10304,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'COROSHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10305,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'CUISPES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10306,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'FLORIDA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10307,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'JAZAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10308,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'RECTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10309,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'SAN CARLOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10310,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'SHIPASBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10311,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'VALERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10312,
			'departamento'=>'AMAZONAS',
			'provincia'=>'BONGARÁ',
			'distrito'=>'YAMBRASBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10400,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CONDORCANQUI',
			'distrito'=>'CONDORCANQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10401,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CONDORCANQUI',
			'distrito'=>'NIEVA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10402,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CONDORCANQUI',
			'distrito'=>'EL CENEPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10403,
			'departamento'=>'AMAZONAS',
			'provincia'=>'CONDORCANQUI',
			'distrito'=>'RÍO SANTIAGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10500,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LUYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10501,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LAMUD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10502,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'CAMPORREDONDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10503,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'COCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10504,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'COLCAMAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10505,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'CONILA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10506,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'INGUILPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10507,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LONGUITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10508,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LONYA CHICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10509,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LUYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10510,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'LUYA VIEJO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10511,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'MARÍA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10512,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'OCALLI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10513,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'OCUMAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10514,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'PISUQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10515,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'PROVIDENCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10516,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SAN CRISTÓBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10517,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SAN FRANCISCO DE YESO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10518,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SAN JERÓNIMO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10519,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SAN JUAN DE LOPECANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10520,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SANTA CATALINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10521,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'SANTO TOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10522,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'TINGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10523,
			'departamento'=>'AMAZONAS',
			'provincia'=>'LUYA',
			'distrito'=>'TRITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10600,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'RODRÍGUEZ DE MENDOZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10601,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'SAN NICOLÁS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10602,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'CHIRIMOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10603,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'COCHAMAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10604,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'HUAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10605,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'LIMABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10606,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'LONGAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10607,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'MARISCAL BENAVIDES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10608,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'MILPUC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10609,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'OMIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10610,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10611,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'TOTORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10612,
			'departamento'=>'AMAZONAS',
			'provincia'=>'RODRÍGUEZ DE MENDOZA',
			'distrito'=>'VISTA ALEGRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10700,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'UTCUBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10701,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'BAGUA GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10702,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'CAJARURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10703,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'CUMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10704,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'EL MILAGRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10705,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'JAMALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10706,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'LONYA GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>10707,
			'departamento'=>'AMAZONAS',
			'provincia'=>'UTCUBAMBA',
			'distrito'=>'YAMON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20000,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ÁNCASH',
			'distrito'=>'ÁNCASH'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20100,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'HUARAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20101,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'HUARAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20102,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'COCHABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20103,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'COLCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20104,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'HUANCHAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20105,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'INDEPENDENCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20106,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'JANGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20107,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'LA LIBERTAD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20108,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'OLLEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20109,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'PAMPAS GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20110,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'PARIACOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20111,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'PIRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20112,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARAZ',
			'distrito'=>'TARICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20200,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'AIJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20201,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'AIJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20202,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'CORIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20203,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'HUACLLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20204,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'LA MERCED'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20205,
			'departamento'=>'ÁNCASH',
			'provincia'=>'AIJA',
			'distrito'=>'SUCCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20300,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'ANTONIO RAYMONDI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20301,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'LLAMELLIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20302,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'ACZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20303,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'CHACCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20304,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'CHINGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20305,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'MIRGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20306,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ANTONIO RAYMONDI',
			'distrito'=>'SAN JUAN DE RONTOY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20400,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ASUNCIÓN',
			'distrito'=>'ASUNCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20401,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ASUNCIÓN',
			'distrito'=>'CHACAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20402,
			'departamento'=>'ÁNCASH',
			'provincia'=>'ASUNCIÓN',
			'distrito'=>'ACOCHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20500,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'BOLOGNESI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20501,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'CHIQUIAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20502,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'ABELARDO PARDO LEZAMETA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20503,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'ANTONIO RAYMONDI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20504,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'AQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20505,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'CAJACAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20506,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'CANIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20507,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'COLQUIOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20508,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'HUALLANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20509,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'HUASTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20510,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'HUAYLLACAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20511,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'LA PRIMAVERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20512,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'MANGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20513,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'PACLLON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20514,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'SAN MIGUEL DE CORPANQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20515,
			'departamento'=>'ÁNCASH',
			'provincia'=>'BOLOGNESI',
			'distrito'=>'TICLLOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20600,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'CARHUAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20601,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'CARHUAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20602,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'ACOPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20603,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'AMASHCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20604,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'ANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20605,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'ATAQUERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20606,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'MARCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20607,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'PARIAHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20608,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'SAN MIGUEL DE ACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20609,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'SHILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20610,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'TINCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20611,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARHUAZ',
			'distrito'=>'YUNGAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20700,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARLOS FERMÍN FITZCARRALD',
			'distrito'=>'CARLOS FERMÍN FITZCARRALD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20701,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARLOS FERMÍN FITZCARRALD',
			'distrito'=>'SAN LUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20702,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARLOS FERMÍN FITZCARRALD',
			'distrito'=>'SAN NICOLÁS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20703,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CARLOS FERMÍN FITZCARRALD',
			'distrito'=>'YAUYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20800,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CASMA',
			'distrito'=>'CASMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20801,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CASMA',
			'distrito'=>'CASMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20802,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CASMA',
			'distrito'=>'BUENA VISTA ALTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20803,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CASMA',
			'distrito'=>'COMANDANTE NOEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20804,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CASMA',
			'distrito'=>'YAUTAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20900,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'CORONGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20901,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'CORONGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20902,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'ACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20903,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'BAMBAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20904,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'CUSCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20905,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'LA PAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20906,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'YANAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>20907,
			'departamento'=>'ÁNCASH',
			'provincia'=>'CORONGO',
			'distrito'=>'YUPAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21000,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21001,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21002,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'ANRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21003,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'CAJAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21004,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'CHAVIN DE HUANTAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21005,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUACACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21006,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUACCHIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21007,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUACHIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21008,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'HUANTAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21009,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'MASIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21010,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'PAUCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21011,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'PONTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21012,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'RAHUAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21013,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'RAPAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21014,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'SAN MARCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21015,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'SAN PEDRO DE CHANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21016,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARI',
			'distrito'=>'UCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21100,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'HUARMEY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21101,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'HUARMEY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21102,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'COCHAPETI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21103,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'CULEBRAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21104,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'HUAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21105,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUARMEY',
			'distrito'=>'MALVAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21200,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'HUAYLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21201,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'CARAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21202,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'HUALLANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21203,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'HUATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21204,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'HUAYLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21205,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'MATO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21206,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'PAMPAROMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21207,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'PUEBLO LIBRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21208,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21209,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'SANTO TORIBIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21210,
			'departamento'=>'ÁNCASH',
			'provincia'=>'HUAYLAS',
			'distrito'=>'YURACMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21300,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'MARISCAL LUZURIAGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21301,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'PISCOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21302,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'CASCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21303,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'ELEAZAR GUZMÁN BARRON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21304,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'FIDEL OLIVAS ESCUDERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21305,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'LLAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21306,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'LLUMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21307,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'LUCMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21308,
			'departamento'=>'ÁNCASH',
			'provincia'=>'MARISCAL LUZURIAGA',
			'distrito'=>'MUSGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21400,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'OCROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21401,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'OCROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21402,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'ACAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21403,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'CAJAMARQUILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21404,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'CARHUAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21405,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'COCHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21406,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'CONGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21407,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'LLIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21408,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'SAN CRISTÓBAL DE RAJAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21409,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'SAN PEDRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21410,
			'departamento'=>'ÁNCASH',
			'provincia'=>'OCROS',
			'distrito'=>'SANTIAGO DE CHILCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21500,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'PALLASCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21501,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'CABANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21502,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'BOLOGNESI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21503,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'CONCHUCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21504,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'HUACASCHUQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21505,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'HUANDOVAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21506,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'LACABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21507,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'LLAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21508,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'PALLASCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21509,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'PAMPAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21510,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21511,
			'departamento'=>'ÁNCASH',
			'provincia'=>'PALLASCA',
			'distrito'=>'TAUCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21600,
			'departamento'=>'ÁNCASH',
			'provincia'=>'POMABAMBA',
			'distrito'=>'POMABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21601,
			'departamento'=>'ÁNCASH',
			'provincia'=>'POMABAMBA',
			'distrito'=>'POMABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21602,
			'departamento'=>'ÁNCASH',
			'provincia'=>'POMABAMBA',
			'distrito'=>'HUAYLLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21603,
			'departamento'=>'ÁNCASH',
			'provincia'=>'POMABAMBA',
			'distrito'=>'PAROBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21604,
			'departamento'=>'ÁNCASH',
			'provincia'=>'POMABAMBA',
			'distrito'=>'QUINUABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21700,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'RECUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21701,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'RECUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21702,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'CATAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21703,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'COTAPARACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21704,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'HUAYLLAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21705,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'LLACLLIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21706,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'MARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21707,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'PAMPAS CHICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21708,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'PARARIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21709,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'TAPACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21710,
			'departamento'=>'ÁNCASH',
			'provincia'=>'RECUAY',
			'distrito'=>'TICAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21800,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'SANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21801,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'CHIMBOTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21802,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'CÁCERES DEL PERÚ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21803,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'COISHCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21804,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'MACATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21805,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'MORO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21806,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'NEPEÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21807,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'SAMANCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21808,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'SANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21809,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SANTA',
			'distrito'=>'NUEVO CHIMBOTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21900,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'SIHUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21901,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'SIHUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21902,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'ACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21903,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'ALFONSO UGARTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21904,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'CASHAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21905,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'CHINGALPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21906,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'HUAYLLABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21907,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'QUICHES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21908,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'RAGASH'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21909,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'SAN JUAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>21910,
			'departamento'=>'ÁNCASH',
			'provincia'=>'SIHUAS',
			'distrito'=>'SICSIBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22000,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'YUNGAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22001,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'YUNGAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22002,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'CASCAPARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22003,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'MANCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22004,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'MATACOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22005,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'QUILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22006,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'RANRAHIRCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22007,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'SHUPLUY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>22008,
			'departamento'=>'ÁNCASH',
			'provincia'=>'YUNGAY',
			'distrito'=>'YANAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30000,
			'departamento'=>'APURÍMAC',
			'provincia'=>'APURÍMAC',
			'distrito'=>'APURÍMAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30100,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'ABANCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30101,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'ABANCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30102,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'CHACOCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30103,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'CIRCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30104,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'CURAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30105,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'HUANIPACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30106,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'LAMBRAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30107,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'PICHIRHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30108,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'SAN PEDRO DE CACHORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30109,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ABANCAY',
			'distrito'=>'TAMBURCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30200,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'ANDAHUAYLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30201,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'ANDAHUAYLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30202,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'ANDARAPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30203,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'CHIARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30204,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'HUANCARAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30205,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'HUANCARAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30206,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'HUAYANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30207,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'KISHUARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30208,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'PACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30209,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'PACUCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30210,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'PAMPACHIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30211,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'POMACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30212,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'SAN ANTONIO DE CACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30213,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'SAN JERÓNIMO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30214,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'SAN MIGUEL DE CHACCRAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30215,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'SANTA MARÍA DE CHICMO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30216,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'TALAVERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30217,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'TUMAY HUARACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30218,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'TURPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30219,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'KAQUIABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30220,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANDAHUAYLAS',
			'distrito'=>'JOSÉ MARÍA ARGUEDAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30300,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'ANTABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30301,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'ANTABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30302,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'EL ORO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30303,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'HUAQUIRCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30304,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'JUAN ESPINOZA MEDRANO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30305,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'OROPESA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30306,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'PACHACONAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30307,
			'departamento'=>'APURÍMAC',
			'provincia'=>'ANTABAMBA',
			'distrito'=>'SABAINO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30400,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'AYMARAES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30401,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'CHALHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30402,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'CAPAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30403,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'CARAYBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30404,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'CHAPIMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30405,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'COLCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30406,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'COTARUSE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30407,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'IHUAYLLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30408,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'JUSTO APU SAHUARAURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30409,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'LUCRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30410,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'POCOHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30411,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'SAN JUAN DE CHACÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30412,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'SAÑAYCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30413,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'SORAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30414,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'TAPAIRIHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30415,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'TINTAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30416,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'TORAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30417,
			'departamento'=>'APURÍMAC',
			'provincia'=>'AYMARAES',
			'distrito'=>'YANACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30500,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'COTABAMBAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30501,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'TAMBOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30502,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'COTABAMBAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30503,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'COYLLURQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30504,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'HAQUIRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30505,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'MARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30506,
			'departamento'=>'APURÍMAC',
			'provincia'=>'COTABAMBAS',
			'distrito'=>'CHALLHUAHUACHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30600,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'CHINCHEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30601,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'CHINCHEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30602,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'ANCO_HUALLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30603,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'COCHARCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30604,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'HUACCANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30605,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'OCOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30606,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'ONGOY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30607,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'URANMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30608,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'RANRACANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30609,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'ROCCHACC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30610,
			'departamento'=>'APURÍMAC',
			'provincia'=>'CHINCHEROS',
			'distrito'=>'EL PORVENIR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30700,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'GRAU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30701,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'CHUQUIBAMBILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30702,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'CURPAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30703,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'GAMARRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30704,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'HUAYLLATI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30705,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'MAMARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30706,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'MICAELA BASTIDAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30707,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'PATAYPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30708,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'PROGRESO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30709,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'SAN ANTONIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30710,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30711,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'TURPAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30712,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'VILCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30713,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'VIRUNDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>30714,
			'departamento'=>'APURÍMAC',
			'provincia'=>'GRAU',
			'distrito'=>'CURASCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40000,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'AREQUIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40100,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'AREQUIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40101,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'AREQUIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40102,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'ALTO SELVA ALEGRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40103,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'CAYMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40104,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'CERRO COLORADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40105,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'CHARACATO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40106,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'CHIGUATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40107,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'JACOBO HUNTER'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40108,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'LA JOYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40109,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'MARIANO MELGAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40110,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'MIRAFLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40111,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'MOLLEBAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40112,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'PAUCARPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40113,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'POCSI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40114,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'POLOBAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40115,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'QUEQUEÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40116,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SABANDIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40117,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SACHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40118,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SAN JUAN DE SIGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40119,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SAN JUAN DE TARUCANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40120,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SANTA ISABEL DE SIGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40121,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SANTA RITA DE SIGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40122,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'SOCABAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40123,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'TIABAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40124,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'UCHUMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40125,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'VITOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40126,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'YANAHUARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40127,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'YARABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40128,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'YURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40129,
			'departamento'=>'AREQUIPA',
			'provincia'=>'AREQUIPA',
			'distrito'=>'JOSÉ LUIS BUSTAMANTE Y RIVERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40200,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'CAMANÁ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40201,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'CAMANÁ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40202,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'JOSÉ MARÍA QUIMPER'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40203,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'MARIANO NICOLÁS VALCÁRCEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40204,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'MARISCAL CÁCERES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40205,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'NICOLÁS DE PIEROLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40206,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'OCOÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40207,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'QUILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40208,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAMANÁ',
			'distrito'=>'SAMUEL PASTOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40300,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'CARAVELÍ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40301,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'CARAVELÍ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40302,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'ACARÍ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40303,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'ATICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40304,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'ATIQUIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40305,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'BELLA UNIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40306,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'CAHUACHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40307,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'CHALA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40308,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'CHAPARRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40309,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'HUANUHUANU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40310,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'JAQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40311,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'LOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40312,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'QUICACHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40313,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CARAVELÍ',
			'distrito'=>'YAUCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40400,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40401,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'APLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40402,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'ANDAGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40403,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'AYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40404,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'CHACHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40405,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'CHILCAYMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40406,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'CHOCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40407,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'HUANCARQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40408,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'MACHAGUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40409,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'ORCOPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40410,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'PAMPACOLCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40411,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'TIPAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40412,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'UÑON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40413,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'URACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40414,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CASTILLA',
			'distrito'=>'VIRACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40500,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'CAYLLOMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40501,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'CHIVAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40502,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'ACHOMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40503,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'CABANACONDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40504,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'CALLALLI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40505,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'CAYLLOMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40506,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'COPORAQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40507,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'HUAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40508,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'HUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40509,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'ICHUPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40510,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'LARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40511,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'LLUTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40512,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'MACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40513,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'MADRIGAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40514,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'SAN ANTONIO DE CHUCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40515,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'SIBAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40516,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'TAPAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40517,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'TISCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40518,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'TUTI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40519,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'YANQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40520,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CAYLLOMA',
			'distrito'=>'MAJES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40600,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'CONDESUYOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40601,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'CHUQUIBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40602,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'ANDARAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40603,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'CAYARANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40604,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'CHICHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40605,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'IRAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40606,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'RÍO GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40607,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'SALAMANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40608,
			'departamento'=>'AREQUIPA',
			'provincia'=>'CONDESUYOS',
			'distrito'=>'YANAQUIHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40700,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'ISLAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40701,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'MOLLENDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40702,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'COCACHACRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40703,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'DEAN VALDIVIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40704,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'ISLAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40705,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'MEJIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40706,
			'departamento'=>'AREQUIPA',
			'provincia'=>'ISLAY',
			'distrito'=>'PUNTA DE BOMBÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40800,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'LA UNIÒN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40801,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'COTAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40802,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'ALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40803,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'CHARCANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40804,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'HUAYNACOTAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40805,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'PAMPAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40806,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'PUYCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40807,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'QUECHUALLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40808,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'SAYLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40809,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'TAURIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40810,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'TOMEPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>40811,
			'departamento'=>'AREQUIPA',
			'provincia'=>'LA UNIÒN',
			'distrito'=>'TORO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50000,
			'departamento'=>'AYACUCHO',
			'provincia'=>'AYACUCHO',
			'distrito'=>'AYACUCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50100,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'HUAMANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50101,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'AYACUCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50102,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'ACOCRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50103,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'ACOS VINCHOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50104,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'CARMEN ALTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50105,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'CHIARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50106,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'OCROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50107,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'PACAYCASA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50108,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'QUINUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50109,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'SAN JOSÉ DE TICLLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50110,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'SAN JUAN BAUTISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50111,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'SANTIAGO DE PISCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50112,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'SOCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50113,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'TAMBILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50114,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'VINCHOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50115,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'JESÚS NAZARENO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50116,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUAMANGA',
			'distrito'=>'ANDRÉS AVELINO CÁCERES DORREGARAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50200,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'CANGALLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50201,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'CANGALLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50202,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'CHUSCHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50203,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'LOS MOROCHUCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50204,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'MARÍA PARADO DE BELLIDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50205,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'PARAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50206,
			'departamento'=>'AYACUCHO',
			'provincia'=>'CANGALLO',
			'distrito'=>'TOTOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50300,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANCA SANCOS',
			'distrito'=>'HUANCA SANCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50301,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANCA SANCOS',
			'distrito'=>'SANCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50302,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANCA SANCOS',
			'distrito'=>'CARAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50303,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANCA SANCOS',
			'distrito'=>'SACSAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50304,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANCA SANCOS',
			'distrito'=>'SANTIAGO DE LUCANAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50400,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'HUANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50401,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'HUANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50402,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'AYAHUANCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50403,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'HUAMANGUILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50404,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'IGUAIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50405,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'LURICOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50406,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'SANTILLANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50407,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'SIVIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50408,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'LLOCHEGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50409,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'CANAYRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50410,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'UCHURACCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50411,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'PUCACOLPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50412,
			'departamento'=>'AYACUCHO',
			'provincia'=>'HUANTA',
			'distrito'=>'CHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50500,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'LA MAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50501,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'SAN MIGUEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50502,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'ANCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50503,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'AYNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50504,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'CHILCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50505,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'CHUNGUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50506,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'LUIS CARRANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50507,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50508,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'TAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50509,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'SAMUGARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50510,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LA MAR',
			'distrito'=>'ANCHIHUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50600,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'LUCANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50601,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'PUQUIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50602,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'AUCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50603,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'CABANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50604,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'CARMEN SALCEDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50605,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'CHAVIÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50606,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'CHIPAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50607,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'HUAC-HUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50608,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'LARAMATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50609,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'LEONCIO PRADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50610,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'LLAUTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50611,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'LUCANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50612,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'OCAÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50613,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'OTOCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50614,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SAISA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50615,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SAN CRISTÓBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50616,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SAN JUAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50617,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SAN PEDRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50618,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SAN PEDRO DE PALCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50619,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SANCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50620,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SANTA ANA DE HUAYCAHUACHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50621,
			'departamento'=>'AYACUCHO',
			'provincia'=>'LUCANAS',
			'distrito'=>'SANTA LUCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50700,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'PARINACOCHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50701,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'CORACORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50702,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'CHUMPI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50703,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'CORONEL CASTAÑEDA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50704,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'PACAPAUSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50705,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'PULLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50706,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'PUYUSCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50707,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'SAN FRANCISCO DE RAVACAYCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50708,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PARINACOCHAS',
			'distrito'=>'UPAHUACHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50800,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'PÀUCAR DEL SARA SARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50801,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'PAUSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50802,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'COLTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50803,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'CORCULLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50804,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'LAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50805,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'MARCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50806,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'OYOLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50807,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'PARARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50808,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'SAN JAVIER DE ALPABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50809,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'SAN JOSÉ DE USHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50810,
			'departamento'=>'AYACUCHO',
			'provincia'=>'PÀUCAR DEL SARA SARA',
			'distrito'=>'SARA SARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50900,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'SUCRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50901,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'QUEROBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50902,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'BELÉN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50903,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'CHALCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50904,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'CHILCAYOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50905,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'HUACAÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50906,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'MORCOLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50907,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'PAICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50908,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'SAN PEDRO DE LARCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50909,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'SAN SALVADOR DE QUIJE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50910,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'SANTIAGO DE PAUCARAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>50911,
			'departamento'=>'AYACUCHO',
			'provincia'=>'SUCRE',
			'distrito'=>'SORAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51000,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'VÍCTOR FAJARDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51001,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'HUANCAPI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51002,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'ALCAMENCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51003,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'APONGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51004,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'ASQUIPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51005,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'CANARIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51006,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'CAYARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51007,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'COLCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51008,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'HUAMANQUIQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51009,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'HUANCARAYLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51010,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'HUAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51011,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'SARHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51012,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VÍCTOR FAJARDO',
			'distrito'=>'VILCANCHOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51100,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'VILCAS HUAMÁN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51101,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'VILCAS HUAMAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51102,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'ACCOMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51103,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'CARHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51104,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'CONCEPCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51105,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'HUAMBALPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51106,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'INDEPENDENCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51107,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'SAURAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>51108,
			'departamento'=>'AYACUCHO',
			'provincia'=>'VILCAS HUAMÁN',
			'distrito'=>'VISCHONGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60000,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'CAJAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60100,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'CAJAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60101,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'CAJAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60102,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'ASUNCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60103,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'CHETILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60104,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'COSPAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60105,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'ENCAÑADA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60106,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'JESÚS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60107,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'LLACANORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60108,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'LOS BAÑOS DEL INCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60109,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'MAGDALENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60110,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'MATARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60111,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'NAMORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60112,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJAMARCA',
			'distrito'=>'SAN JUAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60200,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJABAMBA',
			'distrito'=>'CAJABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60201,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJABAMBA',
			'distrito'=>'CAJABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60202,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJABAMBA',
			'distrito'=>'CACHACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60203,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJABAMBA',
			'distrito'=>'CONDEBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60204,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CAJABAMBA',
			'distrito'=>'SITACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60300,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'CELENDÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60301,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'CELENDÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60302,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'CHUMUCH'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60303,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'CORTEGANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60304,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'HUASMIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60305,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'JORGE CHÁVEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60306,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'JOSÉ GÁLVEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60307,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'MIGUEL IGLESIAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60308,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'OXAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60309,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'SOROCHUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60310,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'SUCRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60311,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'UTCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60312,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CELENDÍN',
			'distrito'=>'LA LIBERTAD DE PALLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60400,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60401,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60402,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'ANGUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60403,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHADIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60404,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHIGUIRIP'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60405,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHIMBAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60406,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHOROPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60407,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'COCHABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60408,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CONCHAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60409,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'HUAMBOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60410,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'LAJAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60411,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'LLAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60412,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'MIRACOSTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60413,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'PACCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60414,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'PION'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60415,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'QUEROCOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60416,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'SAN JUAN DE LICUPIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60417,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'TACABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60418,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'TOCMOCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60419,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CHOTA',
			'distrito'=>'CHALAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60500,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'CONTUMAZÁ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60501,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'CONTUMAZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60502,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'CHILETE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60503,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'CUPISNIQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60504,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'GUZMANGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60505,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'SAN BENITO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60506,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'SANTA CRUZ DE TOLEDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60507,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'TANTARICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60508,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CONTUMAZÁ',
			'distrito'=>'YONAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60600,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'CUTERVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60601,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'CUTERVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60602,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'CALLAYUC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60603,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'CHOROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60604,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'CUJILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60605,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'LA RAMADA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60606,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'PIMPINGOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60607,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'QUEROCOTILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60608,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SAN ANDRÉS DE CUTERVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60609,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SAN JUAN DE CUTERVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60610,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SAN LUIS DE LUCMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60611,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60612,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SANTO DOMINGO DE LA CAPILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60613,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SANTO TOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60614,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'SOCOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60615,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'CUTERVO',
			'distrito'=>'TORIBIO CASANOVA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60700,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'HUALGAYOC',
			'distrito'=>'HUALGAYOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60701,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'HUALGAYOC',
			'distrito'=>'BAMBAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60702,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'HUALGAYOC',
			'distrito'=>'CHUGUR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60703,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'HUALGAYOC',
			'distrito'=>'HUALGAYOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60800,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'JAÉN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60801,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'JAÉN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60802,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'BELLAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60803,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'CHONTALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60804,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'COLASAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60805,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'HUABAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60806,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'LAS PIRIAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60807,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'POMAHUACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60808,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'PUCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60809,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'SALLIQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60810,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'SAN FELIPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60811,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'SAN JOSÉ DEL ALTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60812,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'JAÉN',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60900,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'SAN IGNACIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60901,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'SAN IGNACIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60902,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'CHIRINOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60903,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'HUARANGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60904,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'LA COIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60905,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'NAMBALLE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60906,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'SAN JOSÉ DE LOURDES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>60907,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN IGNACIO',
			'distrito'=>'TABACONAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61000,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'SAN MARCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61001,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'PEDRO GÁLVEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61002,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'CHANCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61003,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'EDUARDO VILLANUEVA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61004,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'GREGORIO PITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61005,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'ICHOCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61006,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'JOSÉ MANUEL QUIROZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61007,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MARCOS',
			'distrito'=>'JOSÉ SABOGAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61100,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'SAN MIGUEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61101,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'SAN MIGUEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61102,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'BOLÍVAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61103,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'CALQUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61104,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'CATILLUC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61105,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'EL PRADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61106,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'LA FLORIDA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61107,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'LLAPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61108,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'NANCHOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61109,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'NIEPOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61110,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'SAN GREGORIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61111,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'SAN SILVESTRE DE COCHAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61112,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'TONGOD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61113,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN MIGUEL',
			'distrito'=>'UNIÓN AGUA BLANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61200,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN PABLO',
			'distrito'=>'SAN PABLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61201,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN PABLO',
			'distrito'=>'SAN PABLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61202,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN PABLO',
			'distrito'=>'SAN BERNARDINO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61203,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN PABLO',
			'distrito'=>'SAN LUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61204,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SAN PABLO',
			'distrito'=>'TUMBADEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61300,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61301,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61302,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'ANDABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61303,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'CATACHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61304,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'CHANCAYBAÑOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61305,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'LA ESPERANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61306,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'NINABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61307,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'PULAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61308,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'SAUCEPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61309,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'SEXI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61310,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'UTICYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>61311,
			'departamento'=>'CAJAMARCA',
			'provincia'=>'SANTA CRUZ',
			'distrito'=>'YAUYUCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70000,
			'departamento'=>'CALLAO',
			'provincia'=>'CALLAO',
			'distrito'=>'CALLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70100,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'PROV. CONST. DEL CALLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70101,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'CALLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70102,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'BELLAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70103,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'CARMEN DE LA LEGUA REYNOSO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70104,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'LA PERLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70105,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'LA PUNTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70106,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'VENTANILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>70107,
			'departamento'=>'CALLAO',
			'provincia'=>'PROV. CONST. DEL CALLAO',
			'distrito'=>'MI PERÚ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80000,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'CUSCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80100,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'CUSCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80101,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'CUSCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80102,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'CCORCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80103,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'POROY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80104,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'SAN JERÓNIMO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80105,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'SAN SEBASTIAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80106,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'SANTIAGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80107,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'SAYLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80108,
			'departamento'=>'CUSCO',
			'provincia'=>'CUSCO',
			'distrito'=>'WANCHAQ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80200,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'ACOMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80201,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'ACOMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80202,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'ACOPIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80203,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'ACOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80204,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'MOSOC LLACTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80205,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'POMACANCHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80206,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'RONDOCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80207,
			'departamento'=>'CUSCO',
			'provincia'=>'ACOMAYO',
			'distrito'=>'SANGARARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80300,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'ANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80301,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'ANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80302,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'ANCAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80303,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'CACHIMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80304,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'CHINCHAYPUJIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80305,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'HUAROCONDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80306,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'LIMATAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80307,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'MOLLEPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80308,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'PUCYURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80309,
			'departamento'=>'CUSCO',
			'provincia'=>'ANTA',
			'distrito'=>'ZURITE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80400,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'CALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80401,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'CALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80402,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'COYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80403,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'LAMAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80404,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'LARES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80405,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'PISAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80406,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'SAN SALVADOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80407,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'TARAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80408,
			'departamento'=>'CUSCO',
			'provincia'=>'CALCA',
			'distrito'=>'YANATILE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80500,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'CANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80501,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'YANAOCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80502,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'CHECCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80503,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'KUNTURKANKI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80504,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'LANGUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80505,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'LAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80506,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'PAMPAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80507,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'QUEHUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80508,
			'departamento'=>'CUSCO',
			'provincia'=>'CANAS',
			'distrito'=>'TUPAC AMARU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80600,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'CANCHIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80601,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'SICUANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80602,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'CHECACUPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80603,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'COMBAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80604,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'MARANGANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80605,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'PITUMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80606,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'SAN PABLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80607,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'SAN PEDRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80608,
			'departamento'=>'CUSCO',
			'provincia'=>'CANCHIS',
			'distrito'=>'TINTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80700,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'CHUMBIVILCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80701,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'SANTO TOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80702,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'CAPACMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80703,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'CHAMACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80704,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'COLQUEMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80705,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'LIVITACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80706,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'LLUSCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80707,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'QUIÑOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80708,
			'departamento'=>'CUSCO',
			'provincia'=>'CHUMBIVILCAS',
			'distrito'=>'VELILLE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80800,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'ESPINAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80801,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'ESPINAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80802,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'CONDOROMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80803,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'COPORAQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80804,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'OCORURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80805,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'PALLPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80806,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'PICHIGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80807,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'SUYCKUTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80808,
			'departamento'=>'CUSCO',
			'provincia'=>'ESPINAR',
			'distrito'=>'ALTO PICHIGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80900,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'LA CONVENCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80901,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'SANTA ANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80902,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'ECHARATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80903,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'HUAYOPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80904,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'MARANURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80905,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'OCOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80906,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'QUELLOUNO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80907,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'KIMBIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80908,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'SANTA TERESA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80909,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'VILCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80910,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'PICHARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80911,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'INKAWASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80912,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'VILLA VIRGEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>80913,
			'departamento'=>'CUSCO',
			'provincia'=>'LA CONVENCIÓN',
			'distrito'=>'VILLA KINTIARINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81000,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'PARURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81001,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'PARURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81002,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'ACCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81003,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'CCAPI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81004,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'COLCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81005,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'HUANOQUITE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81006,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'OMACHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81007,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'PACCARITAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81008,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'PILLPINTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81009,
			'departamento'=>'CUSCO',
			'provincia'=>'PARURO',
			'distrito'=>'YAURISQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81100,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'PAUCARTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81101,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'PAUCARTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81102,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'CAICAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81103,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'CHALLABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81104,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'COLQUEPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81105,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'HUANCARANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81106,
			'departamento'=>'CUSCO',
			'provincia'=>'PAUCARTAMBO',
			'distrito'=>'KOSÑIPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81200,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'QUISPICANCHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81201,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'URCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81202,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'ANDAHUAYLILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81203,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'CAMANTI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81204,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'CCARHUAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81205,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'CCATCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81206,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'CUSIPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81207,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'HUARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81208,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'LUCRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81209,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'MARCAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81210,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'OCONGATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81211,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'OROPESA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81212,
			'departamento'=>'CUSCO',
			'provincia'=>'QUISPICANCHI',
			'distrito'=>'QUIQUIJANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81300,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'URUBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81301,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'URUBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81302,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'CHINCHERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81303,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'HUAYLLABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81304,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'MACHUPICCHU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81305,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'MARAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81306,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'OLLANTAYTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>81307,
			'departamento'=>'CUSCO',
			'provincia'=>'URUBAMBA',
			'distrito'=>'YUCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90000,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUANCAVELICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90100,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUANCAVELICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90101,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUANCAVELICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90102,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'ACOBAMBILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90103,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'ACORIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90104,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'CONAYCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90105,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'CUENCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90106,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUACHOCOLPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90107,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUAYLLAHUARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90108,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'IZCUCHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90109,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'LARIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90110,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'MANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90111,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'MARISCAL CÁCERES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90112,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'MOYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90113,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'NUEVO OCCORO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90114,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'PALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90115,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'PILCHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90116,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'VILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90117,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'YAULI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90118,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'ASCENSIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90119,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUANCAVELICA',
			'distrito'=>'HUANDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90200,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'ACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90201,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'ACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90202,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'ANDABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90203,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'ANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90204,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'CAJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90205,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'MARCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90206,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'PAUCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90207,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'POMACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90208,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ACOBAMBA',
			'distrito'=>'ROSARIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90300,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'ANGARAES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90301,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'LIRCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90302,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'ANCHONGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90303,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'CALLANMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90304,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'CCOCHACCASA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90305,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'CHINCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90306,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'CONGALLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90307,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'HUANCA-HUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90308,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'HUAYLLAY GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90309,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'JULCAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90310,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'SAN ANTONIO DE ANTAPARCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90311,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'SANTO TOMAS DE PATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90312,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'ANGARAES',
			'distrito'=>'SECCLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90400,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'CASTROVIRREYNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90401,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'CASTROVIRREYNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90402,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'ARMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90403,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'AURAHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90404,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'CAPILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90405,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'CHUPAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90406,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'COCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90407,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'HUACHOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90408,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'HUAMATAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90409,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'MOLLEPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90410,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'SAN JUAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90411,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'SANTA ANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90412,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'TANTARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90413,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CASTROVIRREYNA',
			'distrito'=>'TICRAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90500,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'CHURCAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90501,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'CHURCAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90502,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'ANCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90503,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'CHINCHIHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90504,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'EL CARMEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90505,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'LA MERCED'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90506,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'LOCROJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90507,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'PAUCARBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90508,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'SAN MIGUEL DE MAYOCC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90509,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'SAN PEDRO DE CORIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90510,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'PACHAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90511,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'CHURCAMPA',
			'distrito'=>'COSME'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90600,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'HUAYTARÁ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90601,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'HUAYTARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90602,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'AYAVI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90603,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'CÓRDOVA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90604,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'HUAYACUNDO ARMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90605,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'LARAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90606,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'OCOYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90607,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'PILPICHACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90608,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'QUERCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90609,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'QUITO-ARMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90610,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SAN ANTONIO DE CUSICANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90611,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SAN FRANCISCO DE SANGAYAICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90612,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SAN ISIDRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90613,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SANTIAGO DE CHOCORVOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90614,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SANTIAGO DE QUIRAHUARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90615,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'SANTO DOMINGO DE CAPILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90616,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'HUAYTARÁ',
			'distrito'=>'TAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90700,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'TAYACAJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90701,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'PAMPAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90702,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'ACOSTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90703,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'ACRAQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90704,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'AHUAYCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90705,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'COLCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90706,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'DANIEL HERNÁNDEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90707,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'HUACHOCOLPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90709,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'HUARIBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90710,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'ÑAHUIMPUQUIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90711,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'PAZOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90713,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'QUISHUAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90714,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'SALCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90715,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'SALCAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90716,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'SAN MARCOS DE ROCCHAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90717,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'SURCUBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90718,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'TINTAY PUNCU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90719,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'QUICHUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90720,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'ANDAYMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90721,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'ROBLE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>90722,
			'departamento'=>'HUANCAVELICA',
			'provincia'=>'TAYACAJA',
			'distrito'=>'PICHOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100000,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'HUÁNUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100100,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'HUÁNUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100101,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'HUANUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100102,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'AMARILIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100103,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'CHINCHAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100104,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'CHURUBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100105,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'MARGOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100106,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'QUISQUI (KICHKI)'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100107,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'SAN FRANCISCO DE CAYRAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100108,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'SAN PEDRO DE CHAULAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100109,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'SANTA MARÍA DEL VALLE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100110,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'YARUMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100111,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'PILLCO MARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100112,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'YACUS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100113,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUÁNUCO',
			'distrito'=>'SAN PABLO DE PILLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100200,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'AMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100201,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'AMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100202,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'CAYNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100203,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'COLPAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100204,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'CONCHAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100205,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'HUACAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100206,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'SAN FRANCISCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100207,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'SAN RAFAEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100208,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'AMBO',
			'distrito'=>'TOMAY KICHWA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100300,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'DOS DE MAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100301,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'LA UNIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100307,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'CHUQUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100311,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'MARÍAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100313,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'PACHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100316,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'QUIVILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100317,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'RIPAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100321,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'SHUNQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100322,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'SILLAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100323,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'DOS DE MAYO',
			'distrito'=>'YANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100400,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUACAYBAMBA',
			'distrito'=>'HUACAYBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100401,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUACAYBAMBA',
			'distrito'=>'HUACAYBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100402,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUACAYBAMBA',
			'distrito'=>'CANCHABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100403,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUACAYBAMBA',
			'distrito'=>'COCHABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100404,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUACAYBAMBA',
			'distrito'=>'PINRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100500,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'HUAMALÍES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100501,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'LLATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100502,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'ARANCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100503,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'CHAVÍN DE PARIARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100504,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'JACAS GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100505,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'JIRCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100506,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'MIRAFLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100507,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'MONZÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100508,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'PUNCHAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100509,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'PUÑOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100510,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'SINGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100511,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'HUAMALÍES',
			'distrito'=>'TANTAMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100600,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'LEONCIO PRADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100601,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'RUPA-RUPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100602,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'DANIEL ALOMÍA ROBLES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100603,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'HERMÍLIO VALDIZAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100604,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'JOSÉ CRESPO Y CASTILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100605,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'LUYANDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100606,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'MARIANO DAMASO BERAUN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100607,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'PUCAYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100608,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LEONCIO PRADO',
			'distrito'=>'CASTILLO GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100700,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'MARAÑÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100701,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'HUACRACHUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100702,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'CHOLON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100703,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'SAN BUENAVENTURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100704,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'LA MORADA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100705,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'MARAÑÓN',
			'distrito'=>'SANTA ROSA DE ALTO YANAJANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100800,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PACHITEA',
			'distrito'=>'PACHITEA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100801,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PACHITEA',
			'distrito'=>'PANAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100802,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PACHITEA',
			'distrito'=>'CHAGLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100803,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PACHITEA',
			'distrito'=>'MOLINO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100804,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PACHITEA',
			'distrito'=>'UMARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100900,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'PUERTO INCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100901,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'PUERTO INCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100902,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'CODO DEL POZUZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100903,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'HONORIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100904,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'TOURNAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>100905,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'PUERTO INCA',
			'distrito'=>'YUYAPICHIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101000,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'LAURICOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101001,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'JESÚS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101002,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'BAÑOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101003,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'JIVIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101004,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'QUEROPALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101005,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'RONDOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101006,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'SAN FRANCISCO DE ASÍS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101007,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'LAURICOCHA',
			'distrito'=>'SAN MIGUEL DE CAURI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101100,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'YAROWILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101101,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'CHAVINILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101102,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'CAHUAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101103,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'CHACABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101104,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'APARICIO POMARES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101105,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'JACAS CHICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101106,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'OBAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101107,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'PAMPAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>101108,
			'departamento'=>'HUÁNUCO',
			'provincia'=>'YAROWILCA',
			'distrito'=>'CHORAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110000,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'ICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110100,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'ICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110101,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'ICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110102,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'LA TINGUIÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110103,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'LOS AQUIJES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110104,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'OCUCAJE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110105,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'PACHACUTEC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110106,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'PARCONA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110107,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'PUEBLO NUEVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110108,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'SALAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110109,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'SAN JOSÉ DE LOS MOLINOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110110,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'SAN JUAN BAUTISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110111,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'SANTIAGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110112,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'SUBTANJALLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110113,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'TATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110114,
			'departamento'=>'ICA',
			'provincia'=>'ICA',
			'distrito'=>'YAUCA DEL ROSARIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110200,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'CHINCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110201,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'CHINCHA ALTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110202,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'ALTO LARAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110203,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'CHAVIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110204,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'CHINCHA BAJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110205,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'EL CARMEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110206,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'GROCIO PRADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110207,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'PUEBLO NUEVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110208,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'SAN JUAN DE YANAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110209,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'SAN PEDRO DE HUACARPANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110210,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'SUNAMPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110211,
			'departamento'=>'ICA',
			'provincia'=>'CHINCHA',
			'distrito'=>'TAMBO DE MORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110300,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'NASCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110301,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'NASCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110302,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'CHANGUILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110303,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'EL INGENIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110304,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'MARCONA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110305,
			'departamento'=>'ICA',
			'provincia'=>'NASCA',
			'distrito'=>'VISTA ALEGRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110400,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'PALPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110401,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'PALPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110402,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'LLIPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110403,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'RÍO GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110404,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110405,
			'departamento'=>'ICA',
			'provincia'=>'PALPA',
			'distrito'=>'TIBILLO'
			] );


			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110500,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'PISCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110501,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'PISCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110502,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'HUANCANO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110503,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'HUMAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110504,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'INDEPENDENCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110505,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'PARACAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110506,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'SAN ANDRÉS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110507,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'SAN CLEMENTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>110508,
			'departamento'=>'ICA',
			'provincia'=>'PISCO',
			'distrito'=>'TUPAC AMARU INCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120000,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'JUNÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120100,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUANCAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120101,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUANCAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120104,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CARHUACALLANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120105,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CHACAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120106,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CHICCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120107,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CHILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120108,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CHONGOS ALTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120111,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CHUPURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120112,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'COLCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120113,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'CULLHUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120114,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'EL TAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120116,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUACRAPUQUIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120117,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUALHUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120119,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUANCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120120,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUASICANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120121,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'HUAYUCACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120122,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'INGENIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120124,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'PARIAHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120125,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'PILCOMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120126,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'PUCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120127,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'QUICHUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120128,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'QUILCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120129,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SAN AGUSTÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120130,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SAN JERÓNIMO DE TUNAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120132,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SAÑO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120133,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SAPALLANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120134,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SICAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120135,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'SANTO DOMINGO DE ACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120136,
			'departamento'=>'JUNÍN',
			'provincia'=>'HUANCAYO',
			'distrito'=>'VIQUES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120200,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'CONCEPCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120201,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'CONCEPCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120202,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'ACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120203,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'ANDAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120204,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'CHAMBARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120205,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'COCHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120206,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'COMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120207,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'HEROÍNAS TOLEDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120208,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'MANZANARES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120209,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'MARISCAL CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120210,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'MATAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120211,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'MITO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120212,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'NUEVE DE JULIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120213,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'ORCOTUNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120214,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'SAN JOSÉ DE QUERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120215,
			'departamento'=>'JUNÍN',
			'provincia'=>'CONCEPCIÓN',
			'distrito'=>'SANTA ROSA DE OCOPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120300,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'CHANCHAMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120301,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'CHANCHAMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120302,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'PERENE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120303,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'PICHANAQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120304,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'SAN LUIS DE SHUARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120305,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'SAN RAMÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120306,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHANCHAMAYO',
			'distrito'=>'VITOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120400,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'JAUJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120401,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'JAUJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120402,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'ACOLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120403,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'APATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120404,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'ATAURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120405,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'CANCHAYLLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120406,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'CURICACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120407,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'EL MANTARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120408,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'HUAMALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120409,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'HUARIPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120410,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'HUERTAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120411,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'JANJAILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120412,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'JULCÁN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120413,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'LEONOR ORDÓÑEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120414,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'LLOCLLAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120415,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MARCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120416,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MASMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120417,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MASMA CHICCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120418,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MOLINOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120419,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MONOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120420,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MUQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120421,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'MUQUIYAUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120422,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'PACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120423,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'PACCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120424,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'PANCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120425,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'PARCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120426,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'POMACANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120427,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'RICRAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120428,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'SAN LORENZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120429,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'SAN PEDRO DE CHUNAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120430,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'SAUSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120431,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'SINCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120432,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'TUNAN MARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120433,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'YAULI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120434,
			'departamento'=>'JUNÍN',
			'provincia'=>'JAUJA',
			'distrito'=>'YAUYOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120500,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'JUNÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120501,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'JUNIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120502,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'CARHUAMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120503,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'ONDORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120504,
			'departamento'=>'JUNÍN',
			'provincia'=>'JUNÍN',
			'distrito'=>'ULCUMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120600,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'SATIPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120601,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'SATIPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120602,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'COVIRIALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120603,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'LLAYLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120604,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'MAZAMARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120605,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'PAMPA HERMOSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120606,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'PANGOA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120607,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'RÍO NEGRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120608,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'RÍO TAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120609,
			'departamento'=>'JUNÍN',
			'provincia'=>'SATIPO',
			'distrito'=>'VIZCATAN DEL ENE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120700,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'TARMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120701,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'TARMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120702,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'ACOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120703,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'HUARICOLCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120704,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'HUASAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120705,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'LA UNIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120706,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'PALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120707,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'PALCAMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120708,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'SAN PEDRO DE CAJAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120709,
			'departamento'=>'JUNÍN',
			'provincia'=>'TARMA',
			'distrito'=>'TAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120800,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'YAULI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120801,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'LA OROYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120802,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'CHACAPALPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120803,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'HUAY-HUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120804,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'MARCAPOMACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120805,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'MOROCOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120806,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'PACCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120807,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'SANTA BÁRBARA DE CARHUACAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120808,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'SANTA ROSA DE SACCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120809,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'SUITUCANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120810,
			'departamento'=>'JUNÍN',
			'provincia'=>'YAULI',
			'distrito'=>'YAULI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120900,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'CHUPACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120901,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'CHUPACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120902,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'AHUAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120903,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'CHONGOS BAJO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120904,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'HUACHAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120905,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'HUAMANCACA CHICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120906,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'SAN JUAN DE ISCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120907,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'SAN JUAN DE JARPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120908,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'TRES DE DICIEMBRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>120909,
			'departamento'=>'JUNÍN',
			'provincia'=>'CHUPACA',
			'distrito'=>'YANACANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130000,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'LA LIBERTAD',
			'distrito'=>'LA LIBERTAD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130100,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'TRUJILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130101,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'TRUJILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130102,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'EL PORVENIR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130103,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'FLORENCIA DE MORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130104,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'HUANCHACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130105,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'LA ESPERANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130106,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'LAREDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130107,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'MOCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130108,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'POROTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130109,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'SALAVERRY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130110,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'SIMBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130111,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'TRUJILLO',
			'distrito'=>'VICTOR LARCO HERRERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130200,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'ASCOPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130201,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'ASCOPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130202,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'CHICAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130203,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'CHOCOPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130204,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'MAGDALENA DE CAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130205,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'PAIJAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130206,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'RÁZURI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130207,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'SANTIAGO DE CAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130208,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'ASCOPE',
			'distrito'=>'CASA GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130300,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'BOLÍVAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130301,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'BOLÍVAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130302,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'BAMBAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130303,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'CONDORMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130304,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'LONGOTEA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130305,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'UCHUMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130306,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'BOLÍVAR',
			'distrito'=>'UCUNCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130400,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'CHEPÉN',
			'distrito'=>'CHEPÉN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130401,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'CHEPÉN',
			'distrito'=>'CHEPEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130402,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'CHEPÉN',
			'distrito'=>'PACANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130403,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'CHEPÉN',
			'distrito'=>'PUEBLO NUEVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130500,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'JULCÁN',
			'distrito'=>'JULCÁN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130501,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'JULCÁN',
			'distrito'=>'JULCAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130502,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'JULCÁN',
			'distrito'=>'CALAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130503,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'JULCÁN',
			'distrito'=>'CARABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130504,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'JULCÁN',
			'distrito'=>'HUASO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130600,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'OTUZCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130601,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'OTUZCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130602,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'AGALLPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130604,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'CHARAT'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130605,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'HUARANCHAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130606,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'LA CUESTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130608,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'MACHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130610,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'PARANDAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130611,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'SALPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130613,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'SINSICAP'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130614,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'OTUZCO',
			'distrito'=>'USQUIL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130700,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'PACASMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130701,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'SAN PEDRO DE LLOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130702,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'GUADALUPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130703,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'JEQUETEPEQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130704,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'PACASMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130705,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PACASMAYO',
			'distrito'=>'SAN JOSÉ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130800,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'PATAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130801,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'TAYABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130802,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'BULDIBUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130803,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'CHILLIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130804,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'HUANCASPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130805,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'HUAYLILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130806,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'HUAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130807,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'ONGON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130808,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'PARCOY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130809,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'PATAZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130810,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'PIAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130811,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'SANTIAGO DE CHALLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130812,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'TAURIJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130813,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'PATAZ',
			'distrito'=>'URPAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130900,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'SÁNCHEZ CARRIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130901,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'HUAMACHUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130902,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'CHUGAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130903,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'COCHORCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130904,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'CURGOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130905,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'MARCABAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130906,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'SANAGORAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130907,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'SARIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>130908,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SÁNCHEZ CARRIÓN',
			'distrito'=>'SARTIMBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131000,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'SANTIAGO DE CHUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131001,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'SANTIAGO DE CHUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131002,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'ANGASMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131003,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'CACHICADAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131004,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'MOLLEBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131005,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'MOLLEPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131006,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'QUIRUVILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131007,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'SANTA CRUZ DE CHUCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131008,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'SANTIAGO DE CHUCO',
			'distrito'=>'SITABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131100,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'GRAN CHIMÚ',
			'distrito'=>'GRAN CHIMÚ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131101,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'GRAN CHIMÚ',
			'distrito'=>'CASCAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131102,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'GRAN CHIMÚ',
			'distrito'=>'LUCMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131103,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'GRAN CHIMÚ',
			'distrito'=>'MARMOT'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131104,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'GRAN CHIMÚ',
			'distrito'=>'SAYAPULLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131200,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'VIRÚ',
			'distrito'=>'VIRÚ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131201,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'VIRÚ',
			'distrito'=>'VIRU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131202,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'VIRÚ',
			'distrito'=>'CHAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>131203,
			'departamento'=>'LA LIBERTAD',
			'provincia'=>'VIRÚ',
			'distrito'=>'GUADALUPITO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140000,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'LAMBAYEQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140100,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'CHICLAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140101,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'CHICLAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140102,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'CHONGOYAPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140103,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'ETEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140104,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'ETEN PUERTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140105,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'JOSÉ LEONARDO ORTIZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140106,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'LA VICTORIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140107,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'LAGUNAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140108,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'MONSEFU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140109,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'NUEVA ARICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140110,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'OYOTUN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140111,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'PICSI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140112,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'PIMENTEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140113,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'REQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140114,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140115,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'SAÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140116,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'CAYALTI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140117,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'PATAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140118,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'POMALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140119,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'PUCALA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140120,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'CHICLAYO',
			'distrito'=>'TUMAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140200,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'FERREÑAFE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140201,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'FERREÑAFE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140202,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'CAÑARIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140203,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'INCAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140204,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'MANUEL ANTONIO MESONES MURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140205,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'PITIPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140206,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'FERREÑAFE',
			'distrito'=>'PUEBLO NUEVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140300,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'LAMBAYEQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140301,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'LAMBAYEQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140302,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'CHOCHOPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140303,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'ILLIMO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140304,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'JAYANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140305,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'MOCHUMI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140306,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'MORROPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140307,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'MOTUPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140308,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'OLMOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140309,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'PACORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140310,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'SALAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140311,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'SAN JOSÉ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>140312,
			'departamento'=>'LAMBAYEQUE',
			'provincia'=>'LAMBAYEQUE',
			'distrito'=>'TUCUME'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150000,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LIMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150100,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LIMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150101,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LIMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150102,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'ANCÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150103,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'ATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150104,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'BARRANCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150105,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'BREÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150106,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'CARABAYLLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150107,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'CHACLACAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150108,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'CHORRILLOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150109,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'CIENEGUILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150110,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'COMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150111,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'EL AGUSTINO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150112,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'INDEPENDENCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150113,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'JESÚS MARÍA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150114,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LA MOLINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150115,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LA VICTORIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150116,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LINCE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150117,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LOS OLIVOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150118,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LURIGANCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150119,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'LURIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150120,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'MAGDALENA DEL MAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150121,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PUEBLO LIBRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150122,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'MIRAFLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150123,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PACHACAMAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150124,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PUCUSANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150125,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PUENTE PIEDRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150126,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PUNTA HERMOSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150127,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'PUNTA NEGRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150128,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'RÍMAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150129,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN BARTOLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150130,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN BORJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150131,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN ISIDRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150132,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN JUAN DE LURIGANCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150133,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN JUAN DE MIRAFLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150134,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN LUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150135,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN MARTÍN DE PORRES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150136,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SAN MIGUEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150137,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SANTA ANITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150138,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SANTA MARÍA DEL MAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150139,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150140,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SANTIAGO DE SURCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150141,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'SURQUILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150142,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'VILLA EL SALVADOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150143,
			'departamento'=>'LIMA',
			'provincia'=>'LIMA',
			'distrito'=>'VILLA MARÍA DEL TRIUNFO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150200,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'BARRANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150201,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'BARRANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150202,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'PARAMONGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150203,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'PATIVILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150204,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'SUPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150205,
			'departamento'=>'LIMA',
			'provincia'=>'BARRANCA',
			'distrito'=>'SUPE PUERTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150300,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'CAJATAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150301,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'CAJATAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150302,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'COPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150303,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'GORGOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150304,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'HUANCAPON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150305,
			'departamento'=>'LIMA',
			'provincia'=>'CAJATAMBO',
			'distrito'=>'MANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150400,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'CANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150401,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'CANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150402,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'ARAHUAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150403,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'HUAMANTANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150404,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'HUAROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150405,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'LACHAQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150406,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'SAN BUENAVENTURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150407,
			'departamento'=>'LIMA',
			'provincia'=>'CANTA',
			'distrito'=>'SANTA ROSA DE QUIVES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150500,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'CAÑETE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150501,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'SAN VICENTE DE CAÑETE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150502,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'ASIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150503,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'CALANGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150504,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'CERRO AZUL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150505,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'CHILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150506,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'COAYLLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150507,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'IMPERIAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150508,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'LUNAHUANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150509,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'MALA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150510,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'NUEVO IMPERIAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150511,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'PACARAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150512,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'QUILMANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150513,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'SAN ANTONIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150514,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'SAN LUIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150515,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'SANTA CRUZ DE FLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150516,
			'departamento'=>'LIMA',
			'provincia'=>'CAÑETE',
			'distrito'=>'ZÚÑIGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150600,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'HUARAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150601,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'HUARAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150602,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'ATAVILLOS ALTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150603,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'ATAVILLOS BAJO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150604,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'AUCALLAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150605,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'CHANCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150606,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'IHUARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150607,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'LAMPIAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150608,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'PACARAOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150609,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'SAN MIGUEL DE ACOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150610,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'SANTA CRUZ DE ANDAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150611,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'SUMBILCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150612,
			'departamento'=>'LIMA',
			'provincia'=>'HUARAL',
			'distrito'=>'VEINTISIETE DE NOVIEMBRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150700,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'HUAROCHIRÍ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150701,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'MATUCANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150702,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'ANTIOQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150703,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'CALLAHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150704,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'CARAMPOMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150705,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'CHICLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150706,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'CUENCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150707,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'HUACHUPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150708,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'HUANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150709,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'HUAROCHIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150710,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'LAHUAYTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150711,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'LANGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150712,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'LARAOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150713,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'MARIATANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150714,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'RICARDO PALMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150715,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN ANDRÉS DE TUPICOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150716,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN ANTONIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150717,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN BARTOLOMÉ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150718,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN DAMIAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150719,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN JUAN DE IRIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150720,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN JUAN DE TANTARANCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150721,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN LORENZO DE QUINTI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150722,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN MATEO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150723,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN MATEO DE OTAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150724,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN PEDRO DE CASTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150725,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SAN PEDRO DE HUANCAYRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150726,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANGALLAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150727,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANTA CRUZ DE COCACHACRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150728,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANTA EULALIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150729,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANTIAGO DE ANCHUCAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150730,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANTIAGO DE TUNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150731,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SANTO DOMINGO DE LOS OLLEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150732,
			'departamento'=>'LIMA',
			'provincia'=>'HUAROCHIRÍ',
			'distrito'=>'SURCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150800,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'HUAURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150801,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'HUACHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150802,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'AMBAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150803,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'CALETA DE CARQUIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150804,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'CHECRAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150805,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'HUALMAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150806,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'HUAURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150807,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'LEONCIO PRADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150808,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'PACCHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150809,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'SANTA LEONOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150810,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'SANTA MARÍA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150811,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'SAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150812,
			'departamento'=>'LIMA',
			'provincia'=>'HUAURA',
			'distrito'=>'VEGUETA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150900,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'OYÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150901,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'OYON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150902,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'ANDAJES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150903,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'CAUJUL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150904,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'COCHAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150905,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'NAVAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>150906,
			'departamento'=>'LIMA',
			'provincia'=>'OYÓN',
			'distrito'=>'PACHANGARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151000,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'YAUYOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151001,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'YAUYOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151002,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'ALIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151003,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'ALLAUCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151004,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'AYAVIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151005,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'AZÁNGARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151006,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'CACRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151007,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'CARANIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151008,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'CATAHUASI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151009,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'CHOCOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151010,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'COCHAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151011,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'COLONIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151012,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HONGOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151013,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HUAMPARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151014,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HUANCAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151015,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HUANGASCAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151016,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HUANTAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151017,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'HUAÑEC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151018,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'LARAOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151019,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'LINCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151020,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'MADEAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151021,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'MIRAFLORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151022,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'OMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151023,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'PUTINZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151024,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'QUINCHES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151025,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'QUINOCAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151026,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'SAN JOAQUÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151027,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'SAN PEDRO DE PILAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151028,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'TANTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151029,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'TAURIPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151030,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'TOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151031,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'TUPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151032,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'VIÑAC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>151033,
			'departamento'=>'LIMA',
			'provincia'=>'YAUYOS',
			'distrito'=>'VITIS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160000,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'LORETO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160100,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'MAYNAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160101,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'IQUITOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160102,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'ALTO NANAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160103,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'FERNANDO LORES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160104,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'INDIANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160105,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'LAS AMAZONAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160106,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'MAZAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160107,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'NAPO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160108,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'PUNCHANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160110,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'TORRES CAUSANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160112,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'BELÉN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160113,
			'departamento'=>'LORETO',
			'provincia'=>'MAYNAS',
			'distrito'=>'SAN JUAN BAUTISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160200,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'ALTO AMAZONAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160201,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'YURIMAGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160202,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'BALSAPUERTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160205,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'JEBEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160206,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'LAGUNAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160210,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'SANTA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160211,
			'departamento'=>'LORETO',
			'provincia'=>'ALTO AMAZONAS',
			'distrito'=>'TENIENTE CESAR LÓPEZ ROJAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160300,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'LORETO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160301,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'NAUTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160302,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'PARINARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160303,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'TIGRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160304,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'TROMPETEROS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160305,
			'departamento'=>'LORETO',
			'provincia'=>'LORETO',
			'distrito'=>'URARINAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160400,
			'departamento'=>'LORETO',
			'provincia'=>'MARISCAL RAMÓN CASTILLA',
			'distrito'=>'MARISCAL RAMÓN CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160401,
			'departamento'=>'LORETO',
			'provincia'=>'MARISCAL RAMÓN CASTILLA',
			'distrito'=>'RAMÓN CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160402,
			'departamento'=>'LORETO',
			'provincia'=>'MARISCAL RAMÓN CASTILLA',
			'distrito'=>'PEBAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160403,
			'departamento'=>'LORETO',
			'provincia'=>'MARISCAL RAMÓN CASTILLA',
			'distrito'=>'YAVARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160404,
			'departamento'=>'LORETO',
			'provincia'=>'MARISCAL RAMÓN CASTILLA',
			'distrito'=>'SAN PABLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160500,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'REQUENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160501,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'REQUENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160502,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'ALTO TAPICHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160503,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'CAPELO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160504,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'EMILIO SAN MARTÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160505,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'MAQUIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160506,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'PUINAHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160507,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'SAQUENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160508,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'SOPLIN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160509,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'TAPICHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160510,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'JENARO HERRERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160511,
			'departamento'=>'LORETO',
			'provincia'=>'REQUENA',
			'distrito'=>'YAQUERANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160600,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'UCAYALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160601,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'CONTAMANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160602,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'INAHUAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160603,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'PADRE MÁRQUEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160604,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'PAMPA HERMOSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160605,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'SARAYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160606,
			'departamento'=>'LORETO',
			'provincia'=>'UCAYALI',
			'distrito'=>'VARGAS GUERRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160700,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'DATEM DEL MARAÑÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160701,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'BARRANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160702,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'CAHUAPANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160703,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'MANSERICHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160704,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'MORONA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160705,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'PASTAZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160706,
			'departamento'=>'LORETO',
			'provincia'=>'DATEM DEL MARAÑÓN',
			'distrito'=>'ANDOAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160800,
			'departamento'=>'LORETO',
			'provincia'=>'PUTUMAYO',
			'distrito'=>'PUTUMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160801,
			'departamento'=>'LORETO',
			'provincia'=>'PUTUMAYO',
			'distrito'=>'PUTUMAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160802,
			'departamento'=>'LORETO',
			'provincia'=>'PUTUMAYO',
			'distrito'=>'ROSA PANDURO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160803,
			'departamento'=>'LORETO',
			'provincia'=>'PUTUMAYO',
			'distrito'=>'TENIENTE MANUEL CLAVERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>160804,
			'departamento'=>'LORETO',
			'provincia'=>'PUTUMAYO',
			'distrito'=>'YAGUAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170000,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MADRE DE DIOS',
			'distrito'=>'MADRE DE DIOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170100,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAMBOPATA',
			'distrito'=>'TAMBOPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170101,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAMBOPATA',
			'distrito'=>'TAMBOPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170102,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAMBOPATA',
			'distrito'=>'INAMBARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170103,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAMBOPATA',
			'distrito'=>'LAS PIEDRAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170104,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAMBOPATA',
			'distrito'=>'LABERINTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170200,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MANU',
			'distrito'=>'MANU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170201,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MANU',
			'distrito'=>'MANU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170202,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MANU',
			'distrito'=>'FITZCARRALD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170203,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MANU',
			'distrito'=>'MADRE DE DIOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170204,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'MANU',
			'distrito'=>'HUEPETUHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170300,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAHUAMANU',
			'distrito'=>'TAHUAMANU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170301,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAHUAMANU',
			'distrito'=>'IÑAPARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170302,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAHUAMANU',
			'distrito'=>'IBERIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>170303,
			'departamento'=>'MADRE DE DIOS',
			'provincia'=>'TAHUAMANU',
			'distrito'=>'TAHUAMANU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180000,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MOQUEGUA',
			'distrito'=>'MOQUEGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180100,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'MARISCAL NIETO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180101,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'MOQUEGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180102,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'CARUMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180103,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'CUCHUMBAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180104,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'SAMEGUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180105,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'SAN CRISTÓBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180106,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'MARISCAL NIETO',
			'distrito'=>'TORATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180200,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'GENERAL SÁNCHEZ CERRO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180201,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'OMATE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180202,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'CHOJATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180203,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'COALAQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180204,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'ICHUÑA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180205,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'LA CAPILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180206,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'LLOQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180207,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'MATALAQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180208,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'PUQUINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180209,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'QUINISTAQUILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180210,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'UBINAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180211,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'GENERAL SÁNCHEZ CERRO',
			'distrito'=>'YUNGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180300,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'ILO',
			'distrito'=>'ILO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180301,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'ILO',
			'distrito'=>'ILO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180302,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'ILO',
			'distrito'=>'EL ALGARROBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>180303,
			'departamento'=>'MOQUEGUA',
			'provincia'=>'ILO',
			'distrito'=>'PACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190000,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'PASCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190100,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'PASCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190101,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'CHAUPIMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190102,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'HUACHON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190103,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'HUARIACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190104,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'HUAYLLAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190105,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'NINACACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190106,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'PALLANCHACRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190107,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'PAUCARTAMBO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190108,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'SAN FRANCISCO DE ASÍS DE YARUSYACAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190109,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'SIMON BOLÍVAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190110,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'TICLACAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190111,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'TINYAHUARCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190112,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'VICCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190113,
			'departamento'=>'PASCO',
			'provincia'=>'PASCO',
			'distrito'=>'YANACANCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190200,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'DANIEL ALCIDES CARRIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190201,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'YANAHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190202,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'CHACAYAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190203,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'GOYLLARISQUIZGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190204,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'PAUCAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190205,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'SAN PEDRO DE PILLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190206,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'SANTA ANA DE TUSI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190207,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'TAPUC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190208,
			'departamento'=>'PASCO',
			'provincia'=>'DANIEL ALCIDES CARRIÓN',
			'distrito'=>'VILCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190300,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'OXAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190301,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'OXAPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190302,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'CHONTABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190303,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'HUANCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190304,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'PALCAZU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190305,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'POZUZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190306,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'PUERTO BERMÚDEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190307,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'VILLA RICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>190308,
			'departamento'=>'PASCO',
			'provincia'=>'OXAPAMPA',
			'distrito'=>'CONSTITUCIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200000,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'PIURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200100,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'PIURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200101,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'PIURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200104,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'CASTILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200105,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'CATACAOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200107,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'CURA MORI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200108,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'EL TALLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200109,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'LA ARENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200110,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'LA UNIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200111,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'LAS LOMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200114,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'TAMBO GRANDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200115,
			'departamento'=>'PIURA',
			'provincia'=>'PIURA',
			'distrito'=>'VEINTISEIS DE OCTUBRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200200,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'AYABACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200201,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'AYABACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200202,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'FRIAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200203,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'JILILI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200204,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'LAGUNAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200205,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'MONTERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200206,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'PACAIPAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200207,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'PAIMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200208,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'SAPILLICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200209,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'SICCHEZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200210,
			'departamento'=>'PIURA',
			'provincia'=>'AYABACA',
			'distrito'=>'SUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200300,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'HUANCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200301,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'HUANCABAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200302,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'CANCHAQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200303,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'EL CARMEN DE LA FRONTERA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200304,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'HUARMACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200305,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'LALAQUIZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200306,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'SAN MIGUEL DE EL FAIQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200307,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'SONDOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200308,
			'departamento'=>'PIURA',
			'provincia'=>'HUANCABAMBA',
			'distrito'=>'SONDORILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200400,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'MORROPÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200401,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'CHULUCANAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200402,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'BUENOS AIRES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200403,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'CHALACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200404,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'LA MATANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200405,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'MORROPON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200406,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'SALITRAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200407,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'SAN JUAN DE BIGOTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200408,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'SANTA CATALINA DE MOSSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200409,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'SANTO DOMINGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200410,
			'departamento'=>'PIURA',
			'provincia'=>'MORROPÓN',
			'distrito'=>'YAMANGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200500,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'PAITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200501,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'PAITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200502,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'AMOTAPE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200503,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'ARENAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200504,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'COLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200505,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'LA HUACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200506,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'TAMARINDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200507,
			'departamento'=>'PIURA',
			'provincia'=>'PAITA',
			'distrito'=>'VICHAYAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200600,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'SULLANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200601,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'SULLANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200602,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'BELLAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200603,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'IGNACIO ESCUDERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200604,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'LANCONES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200605,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'MARCAVELICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200606,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'MIGUEL CHECA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200607,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'QUERECOTILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200608,
			'departamento'=>'PIURA',
			'provincia'=>'SULLANA',
			'distrito'=>'SALITRAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200700,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'TALARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200701,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'PARIÑAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200702,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'EL ALTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200703,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'LA BREA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200704,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'LOBITOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200705,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'LOS ORGANOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200706,
			'departamento'=>'PIURA',
			'provincia'=>'TALARA',
			'distrito'=>'MANCORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200800,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'SECHURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200801,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'SECHURA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200802,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'BELLAVISTA DE LA UNIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200803,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'BERNAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200804,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'CRISTO NOS VALGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200805,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'VICE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>200806,
			'departamento'=>'PIURA',
			'provincia'=>'SECHURA',
			'distrito'=>'RINCONADA LLICUAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210000,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PUNO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210100,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PUNO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210101,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PUNO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210102,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'ACORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210103,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'AMANTANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210104,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'ATUNCOLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210105,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'CAPACHICA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210106,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'CHUCUITO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210107,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'COATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210108,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'HUATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210109,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'MAÑAZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210110,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PAUCARCOLLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210111,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PICHACANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210112,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'PLATERIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210113,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'SAN ANTONIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210114,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'TIQUILLACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210115,
			'departamento'=>'PUNO',
			'provincia'=>'PUNO',
			'distrito'=>'VILQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210200,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'AZÁNGARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210201,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'AZÁNGARO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210202,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'ACHAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210203,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'ARAPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210204,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'ASILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210205,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'CAMINACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210206,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'CHUPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210207,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'JOSÉ DOMINGO CHOQUEHUANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210208,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'MUÑANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210209,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'POTONI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210210,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'SAMAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210211,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'SAN ANTON'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210212,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'SAN JOSÉ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210213,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'SAN JUAN DE SALINAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210214,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'SANTIAGO DE PUPUJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210215,
			'departamento'=>'PUNO',
			'provincia'=>'AZÁNGARO',
			'distrito'=>'TIRAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210300,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'CARABAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210301,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'MACUSANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210302,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'AJOYANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210303,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'AYAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210304,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'COASA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210305,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'CORANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210306,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'CRUCERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210307,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'ITUATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210308,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'OLLACHEA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210309,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'SAN GABAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210310,
			'departamento'=>'PUNO',
			'provincia'=>'CARABAYA',
			'distrito'=>'USICAYOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210400,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'CHUCUITO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210401,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'JULI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210402,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'DESAGUADERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210403,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'HUACULLANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210404,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'KELLUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210405,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'PISACOMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210406,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'POMATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210407,
			'departamento'=>'PUNO',
			'provincia'=>'CHUCUITO',
			'distrito'=>'ZEPITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210500,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'EL COLLAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210501,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'ILAVE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210502,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'CAPAZO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210503,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'PILCUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210504,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210505,
			'departamento'=>'PUNO',
			'provincia'=>'EL COLLAO',
			'distrito'=>'CONDURIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210600,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'HUANCANÉ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210601,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'HUANCANE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210602,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'COJATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210603,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'HUATASANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210604,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'INCHUPALLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210605,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'PUSI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210606,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'ROSASPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210607,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'TARACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210608,
			'departamento'=>'PUNO',
			'provincia'=>'HUANCANÉ',
			'distrito'=>'VILQUE CHICO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210700,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'LAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210701,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'LAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210702,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'CABANILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210703,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'CALAPUJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210704,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'NICASIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210705,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'OCUVIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210706,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'PALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210707,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'PARATIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210708,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'PUCARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210709,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'SANTA LUCIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210710,
			'departamento'=>'PUNO',
			'provincia'=>'LAMPA',
			'distrito'=>'VILAVILA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210800,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'MELGAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210801,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'AYAVIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210802,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'ANTAUTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210803,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'CUPI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210804,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'LLALLI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210805,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'MACARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210806,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'NUÑOA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210807,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'ORURILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210808,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210809,
			'departamento'=>'PUNO',
			'provincia'=>'MELGAR',
			'distrito'=>'UMACHIRI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210900,
			'departamento'=>'PUNO',
			'provincia'=>'MOHO',
			'distrito'=>'MOHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210901,
			'departamento'=>'PUNO',
			'provincia'=>'MOHO',
			'distrito'=>'MOHO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210902,
			'departamento'=>'PUNO',
			'provincia'=>'MOHO',
			'distrito'=>'CONIMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210903,
			'departamento'=>'PUNO',
			'provincia'=>'MOHO',
			'distrito'=>'HUAYRAPATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>210904,
			'departamento'=>'PUNO',
			'provincia'=>'MOHO',
			'distrito'=>'TILALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211000,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'SAN ANTONIO DE PUTINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211001,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'PUTINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211002,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'ANANEA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211003,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'PEDRO VILCA APAZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211004,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'QUILCAPUNCU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211005,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ANTONIO DE PUTINA',
			'distrito'=>'SINA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211100,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ROMÁN',
			'distrito'=>'SAN ROMÁN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211101,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ROMÁN',
			'distrito'=>'JULIACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211102,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ROMÁN',
			'distrito'=>'CABANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211103,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ROMÁN',
			'distrito'=>'CABANILLAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211104,
			'departamento'=>'PUNO',
			'provincia'=>'SAN ROMÁN',
			'distrito'=>'CARACOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211200,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'SANDIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211201,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'SANDIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211202,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'CUYOCUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211203,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'LIMBANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211204,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'PATAMBUCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211205,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'PHARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211206,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'QUIACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211207,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'SAN JUAN DEL ORO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211208,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'YANAHUAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211209,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'ALTO INAMBARI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211210,
			'departamento'=>'PUNO',
			'provincia'=>'SANDIA',
			'distrito'=>'SAN PEDRO DE PUTINA PUNCO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211300,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'YUNGUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211301,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'YUNGUYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211302,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'ANAPIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211303,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'COPANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211304,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'CUTURAPI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211305,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'OLLARAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211306,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'TINICACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>211307,
			'departamento'=>'PUNO',
			'provincia'=>'YUNGUYO',
			'distrito'=>'UNICACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220000,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'SAN MARTÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220100,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'MOYOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220101,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'MOYOBAMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220102,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'CALZADA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220103,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'HABANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220104,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'JEPELACIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220105,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'SORITOR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220106,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MOYOBAMBA',
			'distrito'=>'YANTALO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220200,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'BELLAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220201,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'BELLAVISTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220202,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'ALTO BIAVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220203,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'BAJO BIAVO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220204,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'HUALLAGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220205,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'SAN PABLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220206,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'BELLAVISTA',
			'distrito'=>'SAN RAFAEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220300,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'EL DORADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220301,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'SAN JOSÉ DE SISA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220302,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'AGUA BLANCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220303,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'SAN MARTÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220304,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'SANTA ROSA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220305,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'EL DORADO',
			'distrito'=>'SHATOJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220400,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'HUALLAGA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220401,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'SAPOSOA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220402,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'ALTO SAPOSOA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220403,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'EL ESLABÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220404,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'PISCOYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220405,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'SACANCHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220406,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'HUALLAGA',
			'distrito'=>'TINGO DE SAPOSOA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220500,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'LAMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220501,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'LAMAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220502,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'ALONSO DE ALVARADO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220503,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'BARRANQUITA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220504,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'CAYNARACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220505,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'CUÑUMBUQUI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220506,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'PINTO RECODO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220507,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'RUMISAPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220508,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'SAN ROQUE DE CUMBAZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220509,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'SHANAO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220510,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'TABALOSOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220511,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'LAMAS',
			'distrito'=>'ZAPATERO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220600,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'MARISCAL CÁCERES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220601,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'JUANJUÍ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220602,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'CAMPANILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220603,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'HUICUNGO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220604,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'PACHIZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220605,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'MARISCAL CÁCERES',
			'distrito'=>'PAJARILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220700,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'PICOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220701,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'PICOTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220702,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'BUENOS AIRES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220703,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'CASPISAPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220704,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'PILLUANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220705,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'PUCACACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220706,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'SAN CRISTÓBAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220707,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'SAN HILARIÓN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220708,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'SHAMBOYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220709,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'TINGO DE PONASA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220710,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'PICOTA',
			'distrito'=>'TRES UNIDOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220800,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'RIOJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220801,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'RIOJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220802,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'AWAJUN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220803,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'ELÍAS SOPLIN VARGAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220804,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'NUEVA CAJAMARCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220805,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'PARDO MIGUEL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220806,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'POSIC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220807,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'SAN FERNANDO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220808,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'YORONGOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220809,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'RIOJA',
			'distrito'=>'YURACYACU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220900,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'SAN MARTÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220901,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'TARAPOTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220902,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'ALBERTO LEVEAU'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220903,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'CACATACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220904,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'CHAZUTA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220905,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'CHIPURANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220906,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'EL PORVENIR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220907,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'HUIMBAYOC'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220908,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'JUAN GUERRA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220909,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'LA BANDA DE SHILCAYO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220910,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'MORALES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220911,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'PAPAPLAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220912,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'SAN ANTONIO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220913,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'SAUCE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>220914,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'SAN MARTÍN',
			'distrito'=>'SHAPAJA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221000,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'TOCACHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221001,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'TOCACHE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221002,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'NUEVO PROGRESO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221003,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'POLVORA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221004,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'SHUNTE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>221005,
			'departamento'=>'SAN MARTÍN',
			'provincia'=>'TOCACHE',
			'distrito'=>'UCHIZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230000,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'TACNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230100,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'TACNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230101,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'TACNA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230102,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'ALTO DE LA ALIANZA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230103,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'CALANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230104,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'CIUDAD NUEVA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230105,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'INCLAN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230106,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'PACHIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230107,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'PALCA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230108,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'POCOLLAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230109,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'SAMA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230110,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'CORONEL GREGORIO ALBARRACÍN LANCHIPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230111,
			'departamento'=>'TACNA',
			'provincia'=>'TACNA',
			'distrito'=>'LA YARADA LOS PALOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230200,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'CANDARAVE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230201,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'CANDARAVE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230202,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'CAIRANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230203,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'CAMILACA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230204,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'CURIBAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230205,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'HUANUARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230206,
			'departamento'=>'TACNA',
			'provincia'=>'CANDARAVE',
			'distrito'=>'QUILAHUANI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230300,
			'departamento'=>'TACNA',
			'provincia'=>'JORGE BASADRE',
			'distrito'=>'JORGE BASADRE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230301,
			'departamento'=>'TACNA',
			'provincia'=>'JORGE BASADRE',
			'distrito'=>'LOCUMBA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230302,
			'departamento'=>'TACNA',
			'provincia'=>'JORGE BASADRE',
			'distrito'=>'ILABAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230303,
			'departamento'=>'TACNA',
			'provincia'=>'JORGE BASADRE',
			'distrito'=>'ITE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230400,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'TARATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230401,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'TARATA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230402,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'HÉROES ALBARRACÍN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230403,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'ESTIQUE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230404,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'ESTIQUE-PAMPA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230405,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'SITAJARA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230406,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'SUSAPAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230407,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'TARUCACHI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>230408,
			'departamento'=>'TACNA',
			'provincia'=>'TARATA',
			'distrito'=>'TICACO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240000,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'TUMBES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240100,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'TUMBES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240101,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'TUMBES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240102,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'CORRALES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240103,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'LA CRUZ'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240104,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'PAMPAS DE HOSPITAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240105,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'SAN JACINTO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240106,
			'departamento'=>'TUMBES',
			'provincia'=>'TUMBES',
			'distrito'=>'SAN JUAN DE LA VIRGEN'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240200,
			'departamento'=>'TUMBES',
			'provincia'=>'CONTRALMIRANTE VILLAR',
			'distrito'=>'CONTRALMIRANTE VILLAR'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240201,
			'departamento'=>'TUMBES',
			'provincia'=>'CONTRALMIRANTE VILLAR',
			'distrito'=>'ZORRITOS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240202,
			'departamento'=>'TUMBES',
			'provincia'=>'CONTRALMIRANTE VILLAR',
			'distrito'=>'CASITAS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240203,
			'departamento'=>'TUMBES',
			'provincia'=>'CONTRALMIRANTE VILLAR',
			'distrito'=>'CANOAS DE PUNTA SAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240300,
			'departamento'=>'TUMBES',
			'provincia'=>'ZARUMILLA',
			'distrito'=>'ZARUMILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240301,
			'departamento'=>'TUMBES',
			'provincia'=>'ZARUMILLA',
			'distrito'=>'ZARUMILLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240302,
			'departamento'=>'TUMBES',
			'provincia'=>'ZARUMILLA',
			'distrito'=>'AGUAS VERDES'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240303,
			'departamento'=>'TUMBES',
			'provincia'=>'ZARUMILLA',
			'distrito'=>'MATAPALO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>240304,
			'departamento'=>'TUMBES',
			'provincia'=>'ZARUMILLA',
			'distrito'=>'PAPAYAL'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250000,
			'departamento'=>'UCAYALI',
			'provincia'=>'UCAYALI',
			'distrito'=>'UCAYALI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250100,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'CORONEL PORTILLO'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250101,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'CALLERIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250102,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'CAMPOVERDE'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250103,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'IPARIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250104,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'MASISEA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250105,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'YARINACOCHA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250106,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'NUEVA REQUENA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250107,
			'departamento'=>'UCAYALI',
			'provincia'=>'CORONEL PORTILLO',
			'distrito'=>'MANANTAY'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250200,
			'departamento'=>'UCAYALI',
			'provincia'=>'ATALAYA',
			'distrito'=>'ATALAYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250201,
			'departamento'=>'UCAYALI',
			'provincia'=>'ATALAYA',
			'distrito'=>'RAYMONDI'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250202,
			'departamento'=>'UCAYALI',
			'provincia'=>'ATALAYA',
			'distrito'=>'SEPAHUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250203,
			'departamento'=>'UCAYALI',
			'provincia'=>'ATALAYA',
			'distrito'=>'TAHUANIA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250204,
			'departamento'=>'UCAYALI',
			'provincia'=>'ATALAYA',
			'distrito'=>'YURUA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250300,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'PADRE ABAD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250301,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'PADRE ABAD'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250302,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'IRAZOLA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250303,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'CURIMANA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250304,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'NESHUYA'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250305,
			'departamento'=>'UCAYALI',
			'provincia'=>'PADRE ABAD',
			'distrito'=>'ALEXANDER VON HUMBOLDT'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250400,
			'departamento'=>'UCAYALI',
			'provincia'=>'PURÚS',
			'distrito'=>'PURÚS'
			] );


						
			DB::table('ubigeo')->insert( [
			'id_ubigeo'=>250401,
			'departamento'=>'UCAYALI',
			'provincia'=>'PURÚS',
			'distrito'=>'PURUS'
			] );




			DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'0',
				'descripcion'=>'DOC.TRIB.NO.DOM.SIN.RUC'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'1',
				'descripcion'=>'Documento Nacional de Identidad'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'4',
				'descripcion'=>'Carnet de extranjería'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'6',
				'descripcion'=>'Registro Unico de Contributentes'
				]);



				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'6',
				'descripcion'=>'Registro Unico de Contributentes'
				]);


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'7',
				'descripcion'=>'Pasaporte'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'A',
				'descripcion'=>'Cédula Diplomática de identidad'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'B',
				'descripcion'=>'DOC.IDENT.PAIS.RESIDENCIA-NO.D'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'C',
				'descripcion'=>'Tax Identification Number - TIN – Doc Trib PP.NN'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'D',
				'descripcion'=>'Identification Number - IN – Doc Trib PP. JJ'
				] );


							
				DB::table('tipo_documento')->insert( [
				'codigo_sunat'=>'E',
				'descripcion'=>'TAM- Tarjeta Andina de Migración'
				]);


				DB::table('tipo_persona')->insert( [
				'tipo'=>'Persona Natural'
				]);

				DB::table('tipo_persona')->insert( [
				'tipo'=>'Persona Juridica'
				]);


				DB::select("UPDATE sys_seb_ubigeo SET id_ubigeo = Concat('0', id_ubigeo)  WHERE id_ubigeo<100000");
    }
}
