<?php

use App\Facades\HubSpot;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	$data = '{
  "data": [
    {
      "nombre": "TechZara",
      "pais": "España",
      "ciudad": "Madrid",
      "dirección": "Calle Falsa 123",
      "CIF": "A12345678"
    },
    {
      "nombre": "InnovaSoft",
      "pais": "Francia",
      "ciudad": "París",
      "dirección": "Avenida Siempre Viva 456",
      "CIF": "B87654321"
    },
    {
      "nombre": "Soluciones Futuras",
      "pais": "Alemania",
      "ciudad": "Berlín",
      "dirección": "Plaza Central 789",
      "CIF": "C11223344"
    },
    {
      "nombre": "MegaDev",
      "pais": "Reino Unido",
      "ciudad": "Londres",
      "dirección": "Calle Nueva 101",
      "CIF": "D44332211"
    },
    {
      "nombre": "CiberNext",
      "pais": "Italia",
      "ciudad": "Roma",
      "dirección": "Boulevard del Parque 202",
      "CIF": "E99887766"
    },
    {
      "nombre": "Sistemas Virtuales",
      "pais": "Portugal",
      "ciudad": "Lisboa",
      "dirección": "Camino Antiguo 303",
      "CIF": "F66778899"
    },
    {
      "nombre": "Red Innovate",
      "pais": "Bélgica",
      "ciudad": "Bruselas",
      "dirección": "Ruta Moderna 404",
      "CIF": "G55667788"
    },
    {
      "nombre": "Quantum Leap",
      "pais": "Países Bajos",
      "ciudad": "Ámsterdam",
      "dirección": "Paseo Marítimo 505",
      "CIF": "H44556677"
    },
    {
      "nombre": "Digital Sphere",
      "pais": "Polonia",
      "ciudad": "Varsovia",
      "dirección": "Avenida del Sol 606",
      "CIF": "I33445566"
    },
    {
      "nombre": "SkyNet Solutions",
      "pais": "Austria",
      "ciudad": "Viena",
      "dirección": "Callejón Oscuro 707",
      "CIF": "J22334455"
    },
    {
      "nombre": "AlphaTech",
      "pais": "Suecia",
      "ciudad": "Estocolmo",
      "dirección": "Vía Láctea 808",
      "CIF": "K11223344"
    },
    {
      "nombre": "Beta Systems",
      "pais": "Noruega",
      "ciudad": "Oslo",
      "dirección": "Camino Real 909",
      "CIF": "L99112233"
    },
    {
      "nombre": "Gamma Digital",
      "pais": "Dinamarca",
      "ciudad": "Copenhague",
      "dirección": "Bulevar de los Sueños 1010",
      "CIF": "M88112233"
    },
    {
      "nombre": "Delta Dev",
      "pais": "Finlandia",
      "ciudad": "Helsinki",
      "dirección": "Ronda del Sur 1111",
      "CIF": "N77112233"
    },
    {
      "nombre": "Epsilon Innovate",
      "pais": "Grecia",
      "ciudad": "Atenas",
      "dirección": "Calle del Norte 1212",
      "CIF": "O66112233"
    },
    {
      "nombre": "ZetaSoft",
      "pais": "Turquía",
      "ciudad": "Estambul",
      "dirección": "Avenida del Este 1313",
      "CIF": "P55112233"
    },
    {
      "nombre": "Eta Systems",
      "pais": "Rusia",
      "ciudad": "Moscú",
      "dirección": "Paseo del Oeste 1414",
      "CIF": "Q44112233"
    },
    {
      "nombre": "Theta Tech",
      "pais": "China",
      "ciudad": "Pekín",
      "dirección": "Camino del Centro 1515",
      "CIF": "R33112233"
    },
    {
      "nombre": "Iota Solutions",
      "pais": "Japón",
      "ciudad": "Tokio",
      "dirección": "Ruta de la Luz 1616",
      "CIF": "S22112233"
    },
    {
      "nombre": "Kappa Develop",
      "pais": "Corea del Sur",
      "ciudad": "Seúl",
      "dirección": "Bulevar del Mar 1717",
      "CIF": "T11112233"
    },
    {
      "nombre": "Lambda Create",
      "pais": "India",
      "ciudad": "Nueva Delhi",
      "dirección": "Calle de la Montaña 1818",
      "CIF": "U99112222"
    },
    {
      "nombre": "Mu Digital",
      "pais": "Australia",
      "ciudad": "Sídney",
      "dirección": "Avenida de la Luna 1919",
      "CIF": "V88112222"
    },
    {
      "nombre": "Nu Innovate",
      "pais": "Nueva Zelanda",
      "ciudad": "Wellington",
      "dirección": "Paseo del Viento 2020",
      "CIF": "W77112222"
    },
    {
      "nombre": "Xi Systems",
      "pais": "Canadá",
      "ciudad": "Toronto",
      "dirección": "Camino del Río 2121",
      "CIF": "X66112222"
    },
    {
      "nombre": "Omicron Develop",
      "pais": "Estados Unidos",
      "ciudad": "Nueva York",
      "dirección": "Ruta de la Estrella 2222",
      "CIF": "Y55112222"
    },
    {
      "nombre": "Pi Tech",
      "pais": "México",
      "ciudad": "Ciudad de México",
      "dirección": "Bulevar del Cielo 2323",
      "CIF": "Z44112222"
    },
    {
      "nombre": "Rho Solutions",
      "pais": "Brasil",
      "ciudad": "São Paulo",
      "dirección": "Calle de la Tierra 2424",
      "CIF": "AA33112222"
    },
    {
      "nombre": "Sigma Create",
      "pais": "Argentina",
      "ciudad": "Buenos Aires",
      "dirección": "Avenida del Mar 2525",
      "CIF": "BB22112222"
    },
    {
      "nombre": "Tau Digital",
      "pais": "Chile",
      "ciudad": "Santiago",
      "dirección": "Paseo de la Nube 2626",
      "CIF": "CC11112222"
    },
    {
      "nombre": "Upsilon Innovate",
      "pais": "Perú",
      "ciudad": "Lima",
      "dirección": "Camino del Sol 2727",
      "CIF": "DD99112211"
    },
    {
      "nombre": "Phi Systems",
      "pais": "Colombia",
      "ciudad": "Bogotá",
      "dirección": "Ruta de la Lluvia 2828",
      "CIF": "EE88112211"
    },
    {
      "nombre": "Chi Develop",
      "pais": "Venezuela",
      "ciudad": "Caracas",
      "dirección": "Bulevar del Día 2929",
      "CIF": "FF77112211"
    },
    {
      "nombre": "Psi Tech",
      "pais": "Uruguay",
      "ciudad": "Montevideo",
      "dirección": "Calle de la Noche 3030",
      "CIF": "GG66112211"
    },
    {
      "nombre": "Omega Solutions",
      "pais": "Paraguay",
      "ciudad": "Asunción",
      "dirección": "Avenida de la Mañana 3131",
      "CIF": "HH55112211"
    },
    {
      "nombre": "AlphaTwo Create",
      "pais": "Bolivia",
      "ciudad": "La Paz",
      "dirección": "Paseo de la Tarde 3232",
      "CIF": "II44112211"
    },
    {
      "nombre": "BetaTwo Digital",
      "pais": "Ecuador",
      "ciudad": "Quito",
      "dirección": "Camino de la Madrugada 3333",
      "CIF": "JJ33112211"
    }
  ]
}';

	$json = json_decode($data);
	foreach ($json->data as $key => $row) {
		if ($key !== 0) {
			$company = new \HubSpot\Client\Crm\Companies\Model\SimplePublicObject();

			$company->setProperties([
				'name'    => $row->nombre,
				'city'    => $row->ciudad,
				'country' => $row->pais,
				'address' => $row->dirección,
				//'cif' =>  'A12345678'
			]);

			$response = HubSpot::crm()->companies()->basicApi()->create($company);

		}
	}

	dd('oks');
	return view('welcome');
});
