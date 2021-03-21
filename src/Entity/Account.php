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
 * Class Account
 *
 * @package Adshares\Ads\Entity
 */
class Account extends AbstractEntity
{
    /**
     * Account address
     *
     * @var string
     */
    protected $address;

    /**
     * Balance
     *
     * @var int
     */
    protected $balance;

    /**
     * Hash
     *
     * @var string
     */
    protected $hash;

    /**
     * Block time of an outgoing transaction request
     *
     * @var DateTimeInterface
     */
    protected $localChange;

    /**
     * Number of last message
     *
     * @var int
     */
    protected $msid;

    /**
     * Node ordinal number
     *
     * @var int
     */
    protected $node;

    /**
     * Paired account address
     *
     * @var null|string
     */
    protected $pairedAddress;

    /**
     * Paired node ordinal number
     *
     * @var int
     */
    protected $pairedNode;

    /**
     * Public key
     *
     * @var string
     */
    protected $publicKey;

    /**
     * Block time of an incoming transaction from a remote host
     *
     * @var DateTimeInterface
     */
    protected $remoteChange;

    /**
     * Status
     *
     * @var int
     */
    protected $status;

    /**
     * Time of last transaction
     *
     * @var DateTimeInterface
     */
    