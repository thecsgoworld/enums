<?php

namespace TheCSGOWorld\Providers;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;
use TheCSGOWorld\Fakers\EnumProvider;

class TheCSGOWorldEnumFakerProvider extends ServiceProvider {
	public function register() : void {
		$this->app->extend(Generator::class, function (Generator $generator) {
			$generator->addProvider(new EnumProvider($generator));

			return $generator;
		});
	}
}