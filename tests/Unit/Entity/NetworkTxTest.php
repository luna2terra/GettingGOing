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

namespace Adshares\Ads\Tests\Unit\Entity;

use Adshares\Ads\Entity\EntityFactory;
use DateTime;
use PHPUnit\Framework\TestCase;

class NetworkTxTest extends TestCase
{
    public function testCreateFromRow(): void
    {
        $netTx = EntityFactory::createNetworkTx($this->getRawData());

        $this->assertEquals('0001:0000000B:0001', $netTx->getId());
        $this->assertEquals('AABBCCDD', $netTx->getBlockId());
        $blockTime = new DateTime();
        $blockTime->setTimestamp(1531495616);
        $this->assertEquals($blockTime, $netTx->getBlockTime());
        $this->assertEquals('1', $netTx->getNode());
        $this->assertEquals('0001', $net