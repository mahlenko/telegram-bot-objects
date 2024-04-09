<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MaskPosition;

/**
 * Use this method to change the <a href="#maskposition">mask
 * position</a> of a mask sticker. The sticker must belong to a sticker
 * set that was created by the bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetStickerMaskPosition extends TelegramMethod implements StickersInterface
{
    /** File identifier of the sticker */
    public string $sticker;

    /**
     * A JSON-serialized object with the position where the mask should be
     * placed on faces. Omit the parameter to remove the mask position.
     */
    public ?MaskPosition $mask_position;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['sticker'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
