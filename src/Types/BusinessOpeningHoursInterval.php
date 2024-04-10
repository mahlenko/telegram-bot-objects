<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BusinessOpeningHoursInterval
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BusinessOpeningHoursInterval implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The minute's sequence number in a week, starting on Monday, marking the start of
         * the time interval during which the business is open; 0 - 7 * 24 * 60
         */
        public int $opening_minute,
        /**
         * The minute's sequence number in a week, starting on Monday, marking the end of
         * the time interval during which the business is open; 0 - 8 * 24 * 60
         */
        public int $closing_minute,
    ) {
    }
}
