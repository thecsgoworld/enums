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

	public const KNIFE = 255; // this is a temporarily variable for case opening, it's not a production value

	// all qualities for stickers, pins, graffiti, ...
	public const BASE_GRADE = self::CONSUMER_GRADE;
	public const HIGH_GRADE = self::MIL_SPEC_GRADE;
	public const REMARKABLE = self::RESTRICTED;
	public const EXOTIC = self::CLASSIFIED;

	// qualities for gloves
	public const EXTRAORDINARY = self::COVERT;
}