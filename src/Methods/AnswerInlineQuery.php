<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineQueryResult;
use TelegramBotCast\Types\InlineQueryResultsButton;

/**
 * AnswerInlineQuery
 *
 * Use this method to send answers to an inline query. On success, True is
 * returned.No more than 50 results per query are allowed.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class AnswerInlineQuery implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Unique identifier for the answered query */
        public ?string $inline_query_id,
        /**
         * A JSON-serialized array of results for the inline query
         * @var array<InlineQueryResult>
         */
        public ?array $results,
        /**
         * The maximum amount of time in seconds that the result of the inline query may be
         * cached on the server. Defaults to 300.
         */
        public int $cache_time,
        /**
         * Pass True if results may be cached on the server side only for the user that
         * sent the query. By default, results may be returned to any user who sends the
         * same query.
         */
        public bool $is_personal,
        /**
         * Pass the offset that a client should send in the next query with the same text
         * to receive more results. Pass an empty string if there are no more results or if
         * you don't support pagination. Offset length can't exceed 64 bytes.
         */
        public string $next_offset,
        /**
         * A JSON-serialized object describing a button to be shown above inline query
         * results
         */
        public InlineQueryResultsButton $button,
    ) {
    }
}
