<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * LeaveChat
 *
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class LeaveChat implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername) */
		public int|string|null $chat_id,
	) {
	}
}
