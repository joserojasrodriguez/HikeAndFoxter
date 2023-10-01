<?php

namespace App\Providers;

use GuzzleHttp\Client;
use HubSpot\Discovery\Discovery;
use HubSpot\Factory;
use Illuminate\Support\ServiceProvider;

class HubSpotServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(Discovery::class, function () {


			$client = new Client();

			if ($accessToken = config('hubspot.access_token')) {
				return Factory::createWithAccessToken(
					$accessToken,
					$client,
				);
			}

			return Factory::createWithDeveloperApiKey(
				config('hubspot.developer_key'),
				$client,
			);
		});
	}
}