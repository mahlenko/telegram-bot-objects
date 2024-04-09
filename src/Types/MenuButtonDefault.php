<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MenuButtonDefault extends TelegramType implements TypesInterface
{
    /** Type of the button, must be default */
    public string $type;
}
