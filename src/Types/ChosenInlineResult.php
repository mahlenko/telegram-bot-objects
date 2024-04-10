<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChosenInlineResult
 *
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChosenInlineResult implements TelegramTypeInterface
{
	public function __construct(
		/** The unique identifier for the result that was chosen */
		public ?string $result_id,
		/** The user that chose the result */
		public ?User $from,
		/** Sender location, only for bots that require user location */
		public Location $location,
		/** Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message. */
		public string $inline_message_id,
		/** The query that was used to obtain the result */
		public ?string $query,
	) {
	}
}
