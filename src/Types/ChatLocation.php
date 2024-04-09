<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a location to which a chat is connected.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatLocation extends TelegramType implements TypesInterface
{
    /**
     * The location to which the supergroup is connected. Can't be a live
     * location.
     */
    public Location $location;

    /** Location address; 1-64 characters, as defined by the chat owner */
    public string $address;
}
