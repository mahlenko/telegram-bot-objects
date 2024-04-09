<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the list of emoji assigned to a regular or
 * custom emoji sticker. The sticker must belong to a sticker set created
 * by the bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetStickerEmojiList extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A JSON-serialized list of 1-20 emoji associated with the sticker
     *
     * @var array<string>
     */
    public array $emoji_list;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker', 'emoji_list'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
