<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to set the title of a created sticker set. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetStickerSetTitle extends TelegramMethod implements StickersInterface
{
    /** Sticker set name */
    public string $name;

    /** Sticker set title, 1-64 characters */
    public string $title;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name', 'title'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
