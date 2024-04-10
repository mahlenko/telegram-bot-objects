<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetStickerEmojiList
 *
 * Use this method to change the list of emoji assigned to a regular or custom
 * emoji sticker. The sticker must belong to a sticker set created by the bot.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetStickerEmojiList implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized list of 1-20 emoji associated with the sticker
         * @var array<string>
         */
        public array $emoji_list,
    ) {
    }
}
