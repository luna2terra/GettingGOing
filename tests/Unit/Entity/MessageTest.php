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

class MessageTest extends TestCase
{
    public function testCreateFromRow(): void
    {
        $message = EntityFactory::createMessage($this->getRawData());

        $this->assertEquals('5B4F1D60', $message->getBlockId());
        $this->assertEquals('0002:00000449', $message->getId());
        $this->assertEquals('0002', $message->getNodeId());
        $time = new DateTime();
        $time->setTimestamp(1531911542);
        $this->assertEquals($time, $message->getTime());
        $this->assertEquals(85, $message->getLength());
        $this->assertEquals(
            '0A5D977BB5B6998E65CA04F180C9837E8CA418E5B8DD1BB29EBFD9BB6B86812F',
          