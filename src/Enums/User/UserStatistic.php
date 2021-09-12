<?php

namespace TheCSGOWorld\Enums\User;

final class UserStatistic {
	public const MONEY_COLLECTED = 'money_collected';
	public const CASES_COLLECTED = 'cases_collected';
	public const CASES_OPENED = 'cases_opened';
	public const ITEMS_SOLD_VALUE = 'items_sold_value%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]
	public const ITEMS_SOLD_COUNT = 'items_sold_count%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]
}