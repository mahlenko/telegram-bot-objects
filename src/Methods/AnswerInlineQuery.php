<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineQueryResult;
use TelegramBot\Types\InlineQueryResultsButton;

/**
 * Use this method to send answers to an inline query. On success,
 * <em>True</em> is returned.<br>No more than <strong>50</strong> results
 * per query are allowed.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class AnswerInlineQuery extends TelegramMethod implements InlineModeInterface
{
    /** Unique identifier for the answered query */
    public string $inline_query_id;

    /**
     * A JSON-serialized array of results for the inline query
     *
     * @var array<InlineQueryResult>
     */
    public array $results;

    /**
     * The maximum amount of time in seconds that the result of the inline
     * query may be cached on the server. Defaults to 300.
     */
    public ?int $cache_time;

    /**
     * Pass True if results may be cached on the server side only for the
     * user that sent the query. By default, results may be returned to any
     * user who sends the same query.
     */
    public ?bool $is_personal;

    /**
     * Pass the offset that a client should send in the next query with the
     * same text to receive more results. Pass an empty string if there are
     * no more results or if you don't support pagination. Offset length
     * can't exceed 64 bytes.
     */
    public ?string $next_offset;

    /**
     * A JSON-serialized object describing a button to be shown above inline
     * query results
     */
    public ?InlineQueryResultsButton $button;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['inline_query_id', 'results'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}
