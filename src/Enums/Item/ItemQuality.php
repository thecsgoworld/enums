<?php

namespace TheCSGOWorld\Enums\Item;

final class ItemQuality {
	// all qualities for normal weapon skins
	public const CONSUMER_GRADE = 1;
	public const INDUSTRIAL_GRADE = 2;
	public const MIL_SPEC_GRADE = 3;
	public const RESTRICTED = 4;
	public const CLASSIFIED = 5;
	public const COVERT = 6;

	// all qualities for character skins
	public const DISTINGUISHED = self::MIL_SPEC_GRADE;
	public const EXCEPTIONAL = self::RESTRICTED;
	public const SUPERIOR = self::CLASSIFIED;
	public const MASTER = self::COVERT;

	// all qualities for stickers, pins, graffiti, ...
	public const BASE_GRADE = self::CONSUMER_GRADE;
	public const HIGH_GRADE = self::MIL_SPEC_GRADE;
	public const REMARKABLE = self::RESTRICTED;
	public const EXOTIC = self::CLASSIFIED;

	// qualities for gloves
	public const EXTRAORDINARY = self::COVERT;
}