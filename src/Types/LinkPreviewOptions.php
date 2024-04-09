<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes the options used for link preview generation.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class LinkPreviewOptions extends TelegramType implements TypesInterface
{
    /** Optional. True, if the link preview is disabled */
    public ?bool $is_disabled;

    /**
     * Optional. URL to use for the link preview. If empty, then the first
     * URL found in the message text will be used
     */
    public ?string $url;

    /**
     * Optional. True, if the media in the link preview is supposed to be
     * shrunk; ignored if the URL isn't explicitly specified or media size
     * change isn't supported for the preview
     */
    public ?bool $prefer_small_media;

    /**
     * Optional. True, if the media in the link preview is supposed to be
     * enlarged; ignored if the URL isn't explicitly specified or media size
     * change isn't supported for the preview
     */
    public ?bool $prefer_large_media;

    /**
     * Optional. True, if the link preview must be shown above the message
     * text; otherwise, the link preview will be shown below the message text
     */
    public ?bool $show_above_text;
}
