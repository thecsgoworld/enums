<?php

namespace TheCSGOWorld\Enums\User;

final class UserStatistic {
	public const MONEY_COLLECTED = 'money_collected';
	public const CASES_COLLECTED = 'cases_collected';
	public const CASES_OPENED = 'cases_opened';
	public const ITEMS_SOLD_TYPE_VALUE = 'items_sold_value_%d'; // %d = ItemType
	public const ITEMS_SOLD_TYPE_COUNT = 'items_sold_count_%d'; // %d = ItemType
}