<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use HubSpot\Discovery\Discovery;
use Illuminate\Http\Request;

class ExportCompanyController extends Controller
{
	private  $allowerdProperties = ['name','address','country','city'];
	public function __construct(private readonly Discovery $hubSpot)
	{
	}

	public function __invoke(Request $request)
	{
		$data = $this->hubSpot->crm()->companies()->basicApi()->getPage(100, null,$this->allowerdProperties);

		$csvFileName = 'companies_export.csv';

		$headers = array (
			"Content-type"        => "text/csv",
			"Content-Disposition" => "attachment; filename=$csvFileName",
			"Pragma"              => "no-cache",
			"Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
			"Expires"             => "0"
		);




		$handle = fopen('php://output', 'w');

		fputcsv($handle, array ('ID', 'NOMBRE', 'DIRECCIÓN','PAÍS','CIUDAD'));

foreach ($data->getResults() as $company) {
			fputcsv($handle, [
				$company->getId(),
				$company->getProperties()['name'],
				$company->getProperties()['address'],
				$company->getProperties()['country'],
				$company->getProperties()['city'],
			]);
		}

		fclose($handle);

		return response()->make('', 200, $headers);
	}
}
