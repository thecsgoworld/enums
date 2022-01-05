<?php

namespace TheCSGOWorld\Enums\User;

final class FriendStatus {
	public const REQUESTER_ACCEPTED = 1 << 0;
	public const REQUESTER_BLOCKED = 1 << 1;
	public const REQUESTER_IGNORED = 1 << 2;

	public const RECIPIENT_ACCEPTED = 1 << 3;
	public const RECIPIENT_BLOCKED = 1 << 4;
	public const RECIPIENT_IGNORED = 1 << 5;
}