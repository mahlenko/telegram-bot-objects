<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to delete a sticker from a set created by the bot.
 * Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class DeleteStickerFromSet extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
