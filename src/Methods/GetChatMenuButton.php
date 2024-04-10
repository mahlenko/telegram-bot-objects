<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\MenuButton;

/**
 * GetChatMenuButton
 *
 * Use this method to get the current value of the bot's menu button in a private
 * chat, or the default menu button. Returns MenuButton on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetChatMenuButton implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = MenuButton::class;

    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's
         * menu button will be returned
         */
        public ?int $chat_id,
    ) {
    }
}
