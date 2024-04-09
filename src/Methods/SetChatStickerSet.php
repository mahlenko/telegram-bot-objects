<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to set a new group sticker set for a supergroup. The
 * bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Use the field
 * <em>can_set_sticker_set</em> optionally returned in <a
 * href="#getchat">getChat</a> requests to check if the bot can use this
 * method. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetChatStickerSet extends TelegramMethod implements MethodsInterface
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

    /** Response mapping type. */
    public string $response_type = 'bool';
}
