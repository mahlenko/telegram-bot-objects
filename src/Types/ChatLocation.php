<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a location to which a chat is connected.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatLocation extends TelegramType implements TelegramTypeInterface
{
    /**
     * The location to which the supergroup is connected. Can't be a live
     * location.
     */
    public Location $location;

    /** Location address; 1-64 characters, as defined by the chat owner */
    public string $address;
}
