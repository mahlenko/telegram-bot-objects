<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about a chat that was shared with the
 * bot using a KeyboardButtonRequestChat button.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatShared extends TelegramType implements TelegramTypeInterface
{
    /** Identifier of the request */
    public int $request_id;

    /**
     * Identifier of the shared chat. This number may have more than 32
     * significant bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52
     * significant bits, so a 64-bit integer or double-precision float type
     * are safe for storing this identifier. The bot may not have access to
     * the chat and could be unable to use this identifier, unless the chat
     * is already known to the bot by some other means.
     */
    public int $chat_id;

    /** Optional. Title of the chat, if the title was requested by the bot. */
    public ?string $title;

    /**
     * Optional. Username of the chat, if the username was requested by the
     * bot and available.
     */
    public ?string $username;

    /**
     * Optional. Available sizes of the chat photo, if the photo was
     * requested by the bot
     *
     * @var array<PhotoSize>
     */
    public ?array $photo;
}
