<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * EditForumTopic
 *
 * Use this method to edit name and icon of a topic in a forum supergroup chat. The
 * bot must be an administrator in the chat for this to work and must have
 * can_manage_topics administrator rights, unless it is the creator of the topic.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class EditForumTopic implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         */
        public int|string|null $chat_id,
        /** Unique identifier for the target message thread of the forum topic */
        public ?int $message_thread_id,
        /**
         * New topic name, 0-128 characters. If not specified or empty, the current name of
         * the topic will be kept
         */
        public string $name,
        /**
         * New unique identifier of the custom emoji shown as the topic icon. Use
         * getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an
         * empty string to remove the icon. If not specified, the current icon will be kept
         */
        public string $icon_custom_emoji_id,
    ) {
    }
}
