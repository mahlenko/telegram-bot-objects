<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a sticker.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class Sticker extends TelegramType implements StickersInterface
{
    /**
     * Identifier for this file, which can be used to download or reuse the
     * file
     */
    public string $file_id;

    /**
     * Unique identifier for this file, which is supposed to be the same over
     * time and for different bots. Can't be used to download or reuse the
     * file.
     */
    public string $file_unique_id;

    /**
     * Type of the sticker, currently one of “regular”, “mask”,
     * “custom_emoji”. The type of the sticker is independent from its
     * format, which is determined by the fields is_animated and is_video.
     */
    public string $type;

    /** Sticker width */
    public int $width;

    /** Sticker height */
    public int $height;

    /** True, if the sticker is animated */
    public bool $is_animated;

    /** True, if the sticker is a video sticker */
    public bool $is_video;

    /** Optional. Sticker thumbnail in the .WEBP or .JPG format */
    public ?PhotoSize $thumbnail;

    /** Optional. Emoji associated with the sticker */
    public ?string $emoji;

    /** Optional. Name of the sticker set to which the sticker belongs */
    public ?string $set_name;

    /**
     * Optional. For premium regular stickers, premium animation for the
     * sticker
     */
    public ?File $premium_animation;

    /**
     * Optional. For mask stickers, the position where the mask should be
     * placed
     */
    public ?MaskPosition $mask_position;

    /**
     * Optional. For custom emoji stickers, unique identifier of the custom
     * emoji
     */
    public ?string $custom_emoji_id;

    /**
     * Optional. True, if the sticker must be repainted to a text color in
     * messages, the color of the Telegram Premium badge in emoji status,
     * white color on chat photos, or another appropriate color in other
     * places
     */
    public ?bool $needs_repainting;

    /** Optional. File size in bytes */
    public ?int $file_size;
}
