<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ChatMember;
use TelegramBotCast\Types\User;

/**
 * ChatMemberBanned
 *
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMemberBanned implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = ChatMember::class;

	public function __construct(
		/** The member's status in the chat, always “kicked” */
		public ?string $status,
		/** Information about the user */
		public ?User $user,
		/** Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever */
		public ?int $until_date,
	) {
	}
}
