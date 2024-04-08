<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change search keywords assigned to a regular or
 * custom emoji sticker. The sticker must belong to a sticker set created
 * by the bot. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetStickerKeywords extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A JSON-serialized list of 0-20 search keywords for the sticker with
     * total length of up to 64 characters
     *
     * @var array<string>
     */
    public ?array $keywords;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker'];
}
