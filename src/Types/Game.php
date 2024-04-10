<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Game
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Game implements TelegramTypeInterface
{
	public function __construct(
		/** Title of the game */
		public ?string $title,
		/** Description of the game */
		public ?string $description,
		/**
		 * Photo that will be displayed in the game message in chats.
		 * @var array<PhotoSize>
		 */
		public ?array $photo,
		/** Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters. */
		public string $text,
		/**
		 * Special entities that appear in text, such as usernames, URLs, bot commands, etc.
		 * @var array<MessageEntity>
		 */
		public array $text_entities,
		/** Animation that will be displayed in the game message in chats. Upload via BotFather */
		public Animation $animation,
	) {
	}
}
