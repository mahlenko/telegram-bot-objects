<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to set a new group sticker set for a supergroup. The
 * bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Use the field
 * can_set_sticker_set optionally returned in getChat requests to check
 * if the bot can use this method. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetChatStickerSet extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Name of the sticker set to be set as the group sticker set */
    public string $sticker_set_name;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'sticker_set_name'];
}
