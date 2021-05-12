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

use DateTimeInterface;

/**
 * NetworkTx from getTransaction.
 *
 * @package Adshares\Ads\Entity
 */
class NetworkTx extends AbstractEntity
{
    /**
     * Block id
     *
     * @var string
     */
    protected $blockId;

    /**
     * Block time
     *
     * @var DateTimeInterface
     */
    protected $blockTime;

    /**
     * Hash path to block hash, array of string
     *
     * @var string[]
     */
    protected $hashpath;

    /**
     * Number of hashes in hash path (path to block hash)
     *
     * @var int
     */
    protected $hashpathSize;

    /**
     * Transaction data as hexadecimal string
     *
     * @var string
     */
    protected $data;

    /**
     * Transaction id
     *
     * @var string
     */
    protected $id;

    /**
     * Node ordinal number
     *
     * @var int
     */
    protected $node;

    /**
     * Number of last node message
     *
     * @var int
     */
    protected $nodeMsid;

    /**
     * Transaction position in node message
     *
     * @var int
     */
    protected $nodeMpos;

    /**
     * Size of the transaction data
     *
     * @var int
     */
    protected $size;

    /**
     * @return string Block id
     */
    public function getBlockId(): string
    {
        return $this->blockId;
    }

    /**
     * @return DateTimeInterface Block time
     */
    public function getBlockTime(): DateTimeInterface
    {
        return $this->blockTime;
    }

    /**
     * @return string[