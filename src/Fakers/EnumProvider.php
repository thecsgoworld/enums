<?php

namespace TheCSGOWorld\Fakers;

use Faker\Provider\Base;
use ReflectionClass;
use ReflectionException;
use TheCSGOWorld\Enums\CaseBattle\CaseBattleStatus;
use TheCSGOWorld\Enums\CaseBattle\CaseBattleType;
use TheCSGOWorld\Enums\Item\ItemCategory;
use TheCSGOWorld\Enums\Item\ItemExterior;
use TheCSGOWorld\Enums\Item\ItemQuality;
use TheCSGOWorld\Enums\Item\ItemType;
use TheCSGOWorld\Enums\Jackpot\JackpotType;

class EnumProvider extends Base {
	protected function getConstants(string $className) : array {
		static $constants = [];
		if ( !isset($constants[$className]) ) {
			try {
				$reflection = new ReflectionClass($className);
				$constants[$className] = $reflection->getConstants();
			} catch ( ReflectionException $e ) {
				$constants[$className] = [];
			}
		}

		return $constants[$className];
	}

	public function itemCategory() : int {
		return static::randomElement($this->getConstants(ItemCategory::class));
	}

	public function itemExterior() : int {
		return static::randomElement($this->getConstants(ItemExterior::class));
	}

	public function itemQuality() : int {
		return static::randomElement($this->getConstants(ItemQuality::class));
	}

	public function itemType() : int {
		return static::randomElement($this->getConstants(ItemType::class));
	}

	public function jackpotType() : int {
		return static::randomElement($this->getConstants(JackpotType::class));
	}

	public function caseBattleStatus() : int {
		return static::randomElement($this->getConstants(CaseBattleStatus::class));
	}

	public function caseBattleType() : int {
		return static::randomElement($this->getConstants(CaseBattleType::class));
	}

	public function coinFlipType() : int {
		return static::randomElement($this->getConstants(CaseBattleType::class));
	}
}