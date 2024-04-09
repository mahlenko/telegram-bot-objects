<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an inline button that switches the current user
 * to inline mode in a chosen chat, with an optional default inline
 * query.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SwitchInlineQueryChosenChat extends TelegramType implements TypesInterface
{
    /**
     * Optional. The default inline query to be inserted in the input field.
     * If left empty, only the bot's username will be inserted
     */
    public ?string $query;

    /** Optional. True, if private chats with users can be chosen */
    public ?bool $allow_user_chats;

    /** Optional. True, if private chats with bots can be chosen */
    public ?bool $allow_bot_chats;

    /** Optional. True, if group and supergroup chats can be chosen */
    public ?bool $allow_group_chats;

    /** Optional. True, if channel chats can be chosen */
    public ?bool $allow_channel_chats;
}
