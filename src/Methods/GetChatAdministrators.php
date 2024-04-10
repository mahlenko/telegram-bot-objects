<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ChatMember;

/**
 * GetChatAdministrators
 *
 * Use this method to get a list of administrators in a chat, which aren't bots.
 * Returns an Array of ChatMember objects.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetChatAdministrators implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = [ChatMember::class];

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format @channelusername)
         */
        public int|string|null $chat_id,
    ) {
    }
}
