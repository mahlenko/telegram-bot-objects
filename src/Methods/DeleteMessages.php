<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * DeleteMessages
 *
 * Use this method to delete multiple messages simultaneously. If some of the
 * specified messages can't be found, they are skipped. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class DeleteMessages implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         */
        public int|string $chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. See
         * deleteMessage for limitations on which messages can be deleted
         * @var array<int>
         */
        public array $message_ids,
    ) {
    }
}
