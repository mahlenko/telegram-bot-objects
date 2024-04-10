<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * CloseGeneralForumTopic
 *
 * Use this method to close an open 'General' topic in a forum supergroup chat. The
 * bot must be an administrator in the chat for this to work and must have the
 * can_manage_topics administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class CloseGeneralForumTopic implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         */
        public int|string|null $chat_id,
    ) {
    }
}
