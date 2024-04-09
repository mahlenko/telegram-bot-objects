<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\Sticker;

/**
 * Use this method to get information about custom emoji stickers by
 * their identifiers. Returns an Array of <a href="#sticker">Sticker</a>
 * objects.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetCustomEmojiStickers extends TelegramMethod implements StickersInterface
{
    /**
     * A JSON-serialized list of custom emoji identifiers. At most 200 custom
     * emoji identifiers can be specified.
     *
     * @var array<string>
     */
    public array $custom_emoji_ids;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['custom_emoji_ids'];

    /** Response mapping type. */
    public string $response_type = Sticker::class;
}
