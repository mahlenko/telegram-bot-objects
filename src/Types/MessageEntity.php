<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageEntity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageEntity implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers) */
		public ?string $type,
		/** Offset in UTF-16 code units to the start of the entity */
		public ?int $offset,
		/** Length of the entity in UTF-16 code units */
		public ?int $length,
		/** For “text_link” only, URL that will be opened after user taps on the text */
		public string $url,
		/** For “text_mention” only, the mentioned user */
		public User $user,
		/** For “pre” only, the programming language of the entity text */
		public string $language,
		/** For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker */
		public string $custom_emoji_id,
	) {
	}
}
