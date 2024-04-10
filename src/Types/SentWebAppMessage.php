<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * SentWebAppMessage
 *
 * Describes an inline message sent by a Web App on behalf of a user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SentWebAppMessage implements TelegramTypeInterface
{
	public function __construct(
		/** Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. */
		public ?string $inline_message_id,
	) {
	}
}
