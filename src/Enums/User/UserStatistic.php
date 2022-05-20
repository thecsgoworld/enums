<?php

namespace TheCSGOWorld\Enums\User;

final class UserStatistic {
	// items
	public const ITEMS_FOUND = 'items_found_%s'; // %s = quality[ItemQuality], stattrak or knives
	public const CASES_COLLECTED = 'cases_collected';
	public const CASES_SOLD = 'cases_sold';
	public const ITEMS_SOLD_VALUE = 'items_sold_value%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]
	public const ITEMS_SOLD_COUNT = 'items_sold_count%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]

	// main
	public const MONEY_COLLECTED = 'money_collected';
	public const EXPERIENCE_GAINED = 'experience_gained';
	public const MISSIONS_COMPLETED = 'missions_completed';
	public const CASES_OPENED = 'cases_opened';
	public const ITEMS_BOUGHT = 'items_bought';
	public const KEYS_BOUGHT = 'keys_bought';
	public const CONTRACTS_SIGNED = 'contracts_signed';
	public const PRIVATE_RANK_RESETS = 'private_rank_resets';

	// coin flip
	public const COIN_FLIP_PLAYS = 'coin_flip_plays';
	public const COIN_FLIP_WINS = 'coin_flip_wins';

	// case battle
	public const CASE_BATTLE_PLAYS = 'case_battle_plays';
	public const CASE_BATTLE_WINS = 'case_battle_wins';

	// jackpot
	public const JACKPOT_PLAYS = 'jackpot_plays';
	public const JACKPOT_WINS = 'jackpot_wins';
	public const JACKPOT_PROFIT = 'jackpot_profit';
	public const JACKPOT_LOSS = 'jackpot_loss';
}