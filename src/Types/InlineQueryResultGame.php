<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a <a href="#games">Game</a>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InlineQueryResultGame extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be game */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** Short name of the game */
    public string $game_short_name;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;
}
