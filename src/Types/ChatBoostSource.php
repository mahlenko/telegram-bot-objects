<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object describes the source of a chat boost. It can be one of
 *
 * ChatBoostSourcePremium
 * ChatBoostSourceGiftCode
 * ChatBoostSourceGiveaway
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoostSource extends TelegramType implements TelegramTypeInterface
{
}
