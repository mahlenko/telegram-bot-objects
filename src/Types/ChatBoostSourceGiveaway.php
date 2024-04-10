<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatBoostSourceGiveaway
 *
 * The boost was obtained by the creation of a Telegram Premium giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatBoostSourceGiveaway implements TelegramTypeInterface
{
	public function __construct(
		/** Source of the boost, always “giveaway” */
		public ?string $source,
		/** Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet. */
		public ?int $giveaway_message_id,
		/** User that won the prize in the giveaway if any */
		public User $user,
		/** True, if the giveaway was completed, but there was no user to win the prize */
		public true $is_unclaimed,
	) {
	}
}
