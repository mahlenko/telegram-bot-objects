<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object describes the origin of a message. It can be one of
 *
 * MessageOriginUser
 * MessageOriginHiddenUser
 * MessageOriginChat
 * MessageOriginChannel
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageOrigin extends TelegramType implements TypesInterface
{
}
