<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\BotCommand;
use TelegramBotCast\Types\BotCommandScope;

/**
 * GetMyCommands
 *
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetMyCommands implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = [BotCommand::class];

	public function __construct(
		/** A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault. */
		public BotCommandScope $scope,
		/** A two-letter ISO 639-1 language code or an empty string */
		public string $language_code,
	) {
	}
}
