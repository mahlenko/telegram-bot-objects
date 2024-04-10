<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * SharedUser
 *
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUser button.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SharedUser implements TelegramTypeInterface
{
	public function __construct(
		/** Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means. */
		public int $user_id,
		/** First name of the user, if the name was requested by the bot */
		public ?string $first_name,
		/** Last name of the user, if the name was requested by the bot */
		public ?string $last_name,
		/** Username of the user, if the username was requested by the bot */
		public ?string $username,
		/**
		 * Available sizes of the chat photo, if the photo was requested by the bot
		 * @var array<PhotoSize>
		 */
		public ?array $photo,
	) {
	}
}
