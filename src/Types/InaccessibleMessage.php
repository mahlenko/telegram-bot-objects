<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InaccessibleMessage
 *
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InaccessibleMessage implements TelegramTypeInterface
{
	public function __construct(
		/** Chat the message belonged to */
		public ?Chat $chat,
		/** Unique message identifier inside the chat */
		public ?int $message_id,
		/** Always 0. The field can be used to differentiate regular and inaccessible messages. */
		public ?int $date,
	) {
	}
}
