<?php

/**
 * Copyright (c) 2018-2021 Adshares sp. z o.o.
 *
 * This file is part of ADS PHP Client
 *
 * ADS PHP Client is free software: you can redistribute and/or modify it
 * under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * ADS PHP Client is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ADS PHP Client. If not, see <https://www.gnu.org/licenses/>
 */

namespace Adshares\Ads\Entity;

use Adshares\Ads\Util\AdsConverter;
use DateTimeInterface;
use ReflectionClass;

/**
 * Class Broadcast
 *
 * @package Adshares\Ads\Entity
 */
class Broadcast extends AbstractEntity
{
    /**
     * Sender last message number
     *
     * @var int
     */
    protected $accountMsid;

    /**
     * Sender address
     *
     * @var string
     */
    protected $address;

    /**
     * Block time of broadcast transaction
     *
     * @var DateTimeInterface
     */
    protected $blockTime;

    /**
     * Transaction data as hexadecimal string
     *
     * @var string
     */
    protected $data;

    /**
     * Fee
     *
     * @var int
     */
    protected $fee;

    /**
     * Id
     *
     * @var string
     */
    protected $id;

    /**
     * Sender input hash
     *
     * @var string
     */
    protected $inputHash;

    /**
     * Message
     *
     * @var string
     */
    protected $message;

    /**
     * Sender node ordinal number
     *
     * @var int
     */
    protected $node;

    /**
     * Position of the broadcast transaction in node message
     *
     * @var int
     */
    protected $nodeMpos;

    /**
     * Number of last node message
     *
     * @var int
     */
    protected $nodeMsid;

    /**
     * Sender public key
     *
     * @var string
     */
    protected $publicKey;

    /**
     * Signature
     *
     * 