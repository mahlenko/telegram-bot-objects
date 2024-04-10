<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultGame
 *
 * Represents a Game.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultGame implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be game */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** Short name of the game */
        public string $game_short_name,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
