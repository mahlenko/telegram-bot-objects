<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to move a sticker in a set created by the bot to a
 * specific position. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetStickerPositionInSet extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /** New sticker position in the set, zero-based */
    public int $position;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker', 'position'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
