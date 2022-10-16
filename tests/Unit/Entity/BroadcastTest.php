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

class BroadcastTest extends TestCase
{
    public function testCreateFromRow(): void
    {
        $broadcast = EntityFactory::createBroadcast($this->getRawData());

        $blockTime = new DateTime();
        $blockTime->setTimestamp(1532100320);
        $this->assertEquals($blockTime, $broadcast->getBlockTime());
        $this->assertEquals('0001-00000000-9B6F', $broadcast->getAddress());
        $this->assertEquals(1, $broadcast->getAccountMsid());
        $this->assertEquals(1, $broadcast->getNode());
        $this->assertEquals('0001', $broadcast->getNodeId());
        $time = new DateTime();
        $time->setTimestamp(1532100323);
        $this->assertEquals($time, $broadcast->getTime());
        $this->assertEquals('0301000000000001000000E3FE515B0100', $broadcast->getData());
        $this->assertEquals('FE', $broadcast->getMessage());
        $this->assertEquals(
            '1FB7A83994767C48F19EBB00946A3E9