<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputSticker;

/**
 * Use this method to create a new sticker set owned by a user. The bot
 * will be able to edit the sticker set thus created. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class CreateNewStickerSet extends TelegramMethod implements StickersInterface
{
    /** User identifier of created sticker set owner */
    public int $user_id;

    /**
     * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g.,
     * animals). Can contain only English letters, digits and underscores.
     * Must begin with a letter, can't contain consecutive underscores and
     * must end in "_by_<bot_username>". <bot_username> is case insensitive.
     * 1-64 characters.
     */
    public string $name;

    /** Sticker set title, 1-64 characters */
    public string $title;

    /**
     * A JSON-serialized list of 1-50 initial stickers to be added to the
     * sticker set
     *
     * @var array<InputSticker>
     */
    public array $stickers;

    /**
     * Type of stickers in the set, pass “regular”, “mask”, or
     * “custom_emoji”. By default, a regular sticker set is created.
     */
    public ?string $sticker_type;

    /**
     * Pass True if stickers in the sticker set must be repainted to the
     * color of text when used in messages, the accent color if used as emoji
     * status, white on chat photos, or another appropriate color based on
     * context; for custom emoji sticker sets only
     */
    public ?bool $needs_repainting;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'name', 'title', 'stickers'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
