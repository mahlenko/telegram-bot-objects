<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object describes the type of a reaction. Currently, it can be one
 * of
 *
 * ReactionTypeEmoji
 * ReactionTypeCustomEmoji
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ReactionType extends TelegramType implements TelegramTypeInterface
{
}
