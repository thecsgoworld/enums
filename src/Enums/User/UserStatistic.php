<?php

namespace TheCSGOWorld\Enums\User;

final class UserStatistic {
	public const MONEY_COLLECTED = 'money_collected';
	public const CASES_COLLECTED = 'cases_collected';
	public const CASES_OPENED = 'cases_opened';
	public const ITEMS_SOLD_VALUE = 'items_sold_value%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]
	public const ITEMS_SOLD_COUNT = 'items_sold_count%s'; // %s (optional) = _quality[ItemQuality] / _type[ItemType]

	public const MISSIONS_COMPLETED = 'missions_completed';
	public const CONTRACTS_FINISHED = 'contracts_finished';
	public const CASE_BATTLE_WINS = 'case_battle_wins';
	public const COIN_FLIP_WINS = 'coin_flip_wins';

	// jackpot
	public const JACKPOT_WINS = 'jackpot_wins';
	public const JACKPOT_PLAYS = 'jackpot_plays';
	public const JACKPOT_PROFIT = 'jackpot_profit';
	public const JACKPOT_LOSS = 'jackpot_loss';
}