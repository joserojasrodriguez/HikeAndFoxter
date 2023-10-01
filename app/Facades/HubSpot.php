<?php

namespace App\Facades;

use HubSpot\Discovery\Discovery;
use Illuminate\Support\Facades\Facade;

class HubSpot extends Facade
{
	protected static function getFacadeAccessor(): string
	{
		return Discovery::class;
	}
}