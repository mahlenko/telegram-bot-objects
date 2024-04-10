<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\BotName;

/**
 * GetMyName
 *
 * Use this method to get the current bot name for the given user language. Returns BotName on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetMyName implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = BotName::class;

    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public string $language_code,
    ) {
    }
}
