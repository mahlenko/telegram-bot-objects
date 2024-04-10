<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatMemberMember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMemberMember implements TelegramTypeInterface
{
	public function __construct(
		/** The member's status in the chat, always “member” */
		public ?string $status,
		/** Information about the user */
		public ?User $user,
	) {
	}
}
