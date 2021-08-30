<?php

namespace TheCSGOWorld\Tests\Enums;

use Faker\Generator;
use Orchestra\Testbench\TestCase;
use TheCSGOWorld\Fakers\EnumProvider;

class FakerTest extends TestCase {
	/**
	 * test all methods for the enum faker
	 */
	public function testEnumFaker() {
		$generator = new Generator();
		$generator->addProvider(new EnumProvider($generator));

		$this->assertIsInt($generator->itemCategory);
		$this->assertIsInt($generator->itemExterior);
		$this->assertIsInt($generator->itemQuality);
		$this->assertIsInt($generator->itemType);
		$this->assertIsInt($generator->jackpotType);
		$this->assertIsInt($generator->caseBattleStatus);
		$this->assertIsInt($generator->caseBattleType);
		$this->assertIsInt($generator->coinFlipType);
	}
}