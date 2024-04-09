<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ForumTopic;

/**
 * Use this method to create a topic in a forum supergroup chat. The bot
 * must be an administrator in the chat for this to work and must have
 * the <em>can_manage_topics</em> administrator rights. Returns
 * information about the created topic as a <a
 * href="#forumtopic">ForumTopic</a> object.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class CreateForumTopic extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Topic name, 1-128 characters */
    public string $name;

    /**
     * Color of the topic icon in RGB format. Currently, must be one of
     * 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192
     * (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     */
    public ?int $icon_color;

    /**
     * Unique identifier of the custom emoji shown as the topic icon. Use
     * getForumTopicIconStickers to get all allowed custom emoji identifiers.
     */
    public ?string $icon_custom_emoji_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'name'];

    /** Response mapping type. */
    public string $response_type = ForumTopic::class;
}
