<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an animated emoji that displays a random value.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Dice extends TelegramType implements TelegramTypeInterface
{
    /** Emoji on which the dice throw animation is based */
    public string $emoji;

    /**
     * Value of the dice, 1-6 for “”, “” and “” base emoji, 1-5
     * for “” and “” base emoji, 1-64 for “” base emoji
     */
    public int $value;
}
