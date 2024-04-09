<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an <a
 * href="/bots/features#inline-keyboards">inline keyboard</a> that
 * appears right next to the message it belongs to.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InlineKeyboardMarkup extends TelegramType implements TypesInterface
{
    /**
     * Array of button rows, each represented by an Array of
     * InlineKeyboardButton objects
     *
     * @var array<array>
     */
    public array $inline_keyboard;
}
