<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object represents one shipping option.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ShippingOption extends TelegramType implements PaymentsInterface
{
    /** Shipping option identifier */
    public string $id;

    /** Option title */
    public string $title;

    /**
     * List of price portions
     *
     * @var array<LabeledPrice>
     */
    public array $prices;
}
