<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ShippingOption
 *
 * This object represents one shipping option.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ShippingOption implements TelegramTypeInterface
{
    public function __construct(
        /** Shipping option identifier */
        public string $id,
        /** Option title */
        public string $title,
        /**
         * List of price portions
         * @var array<LabeledPrice>
         */
        public array $prices,
    ) {
    }
}
