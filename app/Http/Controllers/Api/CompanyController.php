<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use HubSpot\Client\Crm\Companies\ApiException;
use HubSpot\Client\Crm\Companies\Model\SimplePublicObject;
use HubSpot\Discovery\Discovery;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CompanyController extends Controller
{
	private const MESSAGE_404 = 'Company with ID "%s" not found';

	public function __construct(private readonly Discovery $hubSpot)
	{
	}

	public function index()
	{
		$data = $this->hubSpot->crm()->companies()->basicApi()->getPage(100);

		return response()->json(['data' => $data]);
	}

	public function store(CompanyRequest $request)
	{
		$company = $this->getCompany($request);

		try {
			$response = $this->hubSpot->crm()->companies()->basicApi()->create($company);
		}catch (ApiException $exception)
		{
			return response()->json(['message' => $exception->getMessage()],$exception->getCode());

		}

		return response()->json(['data' => $response]);
	}

	public function show(string $id)
	{
		try {
			$data = $this->hubSpot->crm()->companies()->basicApi()->getById($id);
			return response()->json(['data' => $data]);
		} catch (ApiException $exception) {
			return response()->json(['message' => sprintf(self::MESSAGE_404, $id)], 404);
		}

	}

	public function update(CompanyRequest $request, string $id)
	{
		$company = $this->getCompany($request);

		try {
			$response = $this->hubSpot->crm()->companies()->basicApi()->update($id,$company);
		}catch (ApiException $exception)
		{
			return response()->json(['message' => $exception->getMessage()],$exception->getCode());

		}

		return response()->json(['data' => $response]);
	}

	private function getCompany(CompanyRequest $request): SimplePublicObject
	{
		$company = new SimplePublicObject();

		$properties = [
			'name'    => $request->input('nombre'),
			'address' => $request->input('dirección'),
		];
		$data = collect($properties)
			->when($request->filled('ciudad'),
				fn (Collection $collection) => $collection->merge(['city' => $request->input('ciudad')
					]
				))
			->when($request->filled('pais'),
				fn (Collection $collection) => $collection->merge(['country' => $request->input('pais')
					]
				));

		$company->setProperties($data->toArray());
		return $company;
	}
}
