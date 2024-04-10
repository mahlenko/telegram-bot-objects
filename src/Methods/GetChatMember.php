<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ChatMember;

/**
 * GetChatMember
 *
 * Use this method to get information about a member of a chat. The method is only
 * guaranteed to work for other users if the bot is an administrator in the chat.
 * Returns a ChatMember object on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetChatMember implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = ChatMember::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format @channelusername)
         */
        public int|string|null $chat_id,
        /** Unique identifier of the target user */
        public ?int $user_id,
    ) {
    }
}
