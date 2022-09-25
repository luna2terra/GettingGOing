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
use Adshares\Ads\Entity\Node;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlockTest extends TestCase
{
    public function testCreateFromRow(): void
    {
        $block = EntityFactory::createBlock($this->getRawData());

        $this->assertEquals(12300000000, $block->getDividendBalance());
        $this->assertEquals(true, $block->isDividendPay());
        $this->assertEquals('5B3A1E80', $block->getId());
        $this->assertEquals(27, $block->getMessageCount());
        $this->assertEquals('41FB7933B8BE623E0D8C087E0AAC91F56999AB892ED1DC9B1DCB39D057427639', $block->getMinHash());
        $this->assertEquals('F41152F6FDB5C50697B1BCF8562F35848C7D679CAC8A69883341FF55040B684B', $block->getMsgHash());
        $this->assertEquals(2, $block->getNodeCount());
        $this->assertEquals('DEE608AFF65371FD14AC7118528BAAAF620931B2B261E5964C632B908D1C57EA', $block->getNodHash());
        $this->assertEquals('DDD2F343184A8BFF7FC9DE1704B9956D89B0573D7C27FE1F55D9646470B8B12C', $block->getNowHash());
        $this->assertEquals('91655C4B8EA51E66E81F079A8C520EBB9097