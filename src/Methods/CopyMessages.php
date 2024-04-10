<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\MessageId;

/**
 * CopyMessages
 *
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of MessageId of the sent messages is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class CopyMessages implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = [MessageId::class];

	public function __construct(
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public int $message_thread_id,
		/** Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername) */
		public int|string|null $from_chat_id,
		/**
		 * A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
		 * @var array<int>
		 */
		public ?array $message_ids,
		/** Sends the messages silently. Users will receive a notification with no sound. */
		public bool $disable_notification,
		/** Protects the contents of the sent messages from forwarding and saving */
		public bool $protect_content,
		/** Pass True to copy the messages without their captions */
		public bool $remove_caption,
	) {
	}
}
