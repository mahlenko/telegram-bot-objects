<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MaskPosition;

/**
 * Use this method to change the mask position of a mask sticker. The
 * sticker must belong to a sticker set that was created by the bot.
 * Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetStickerMaskPosition extends TelegramMethod implements StickersInterface
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
}
