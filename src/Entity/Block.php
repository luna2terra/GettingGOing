
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
 * Block from getBlockResponse
 *
 * @package Adshares\Ads\Entity
 */
class Block extends AbstractEntity
{
    /**
     * Dividend
     *
     * @var int
     */
    protected $dividendBalance;

    /**
     * Dividend block flag. It is true if this is the first block in the dividend period, false otherwise
     *
     * @var bool
     */
    protected $dividendPay;

    /**
     * Block id
     *
     * @var string
     */
    protected $id;

    /**
     * Number of messages in block
     *
     * @var int
     */
    protected $messageCount;

    /**
     * Input block hash
     *
     * @var string
     */
    protected $minHash;

    /**
     * Hash of messages
     *
     * @var string
     */
    protected $msgHash;

    /**
     * Number of nodes (includes technical node 0000)
     *
     * @var int
     */
    protected $nodeCount;

    /**
     * Array of nodes
     *
     * @var Node[]
     */
    protected $nodes;

    /**
     * Hash of nodes
     *
     * @var string
     */
    protected $nodHash;

    /**
     * Block hash
     *
     * @var string
     */
    protected $nowHash;

    /**
     * Old block hash
     *
     * @var string
     */
    protected $oldHash;

    /**
     * Block time
     *
     * @var DateTimeInterface
     */
    protected $time;

    /**
     * Hash of vip public keys
     *
     * @var string
     */
    protected $vipHash;

    /**
     * Forking signatures
     *
     * @var int
     */
    protected $voteNo;

    /**
     * Total number of signatures
     *
     * @var int
     */
    protected $voteTotal;

    /**
     * Confirming signatures
     *
     * @var int
     */
    protected $voteYes;

    /**
     * @return int Dividend
     */
    public function getDividendBalance(): int
    {
        return $this->dividendBalance;
    }

    /**
     * @return bool Dividend block flag. It is true if this is the first block in the dividend period, false otherwise
     */
    public function isDividendPay(): bool
    {
        return $this->dividendPay;
    }

    /**
     * @return string Block id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int Number of messages in block
     */
    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    /**
     * @return string Input block hash
     */
    public function getMinHash(): string
    {
        return $this->minHash;
    }

    /**
     * @return string Hash of messages
     */
    public function getMsgHash(): string
    {
        return $this->msgHash;
    }

    /**
     * @return int Number of nodes (includes technical node 0000)
     */
    public function getNodeCount(): int
    {
        return $this->nodeCount;
    }

    /**
     * @return Node[] Array of nodes
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @return string Hash of nodes
     */
    public function getNodHash(): string
    {
        return $this->nodHash;
    }

    /**
     * @return string Block hash
     */
    public function getNowHash(): string
    {