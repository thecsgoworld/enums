<?php

namespace TheCSGOWorld\Enums\User;

class NotificationType
{
	// jackpot notifications
	public const JACKPOT_START_SOON = 'jackpot_start_soon';
	public const JACKPOT_START = 'jackpot_start';
	public const JACKPOT_WIN = 'jackpot_win';
	public const JACKPOT_LOSE = 'jackpot_lose';

	// case battle notifications
	public const CASE_BATTLE_STARTED = 'case_battle_started';
	public const CASE_BATTLE_ROUND_FINISHED = 'case_battle_round_finished';
	public const CASE_BATTLE_FINISHED = 'case_battle_finished';
}