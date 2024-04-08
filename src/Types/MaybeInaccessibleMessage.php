<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object describes a message that can be inaccessible to the bot.
 * It can be one of
 *
 * Message
 * InaccessibleMessage
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MaybeInaccessibleMessage extends TelegramType implements TelegramTypeInterface
{
}
