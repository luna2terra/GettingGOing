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

class AccountTest extends TestCase
{
    public function testCreateFromRow(): void
    {
        $account = EntityFactory::createAccount($this->getRawData());

        $this->assertEquals('0001-00000000-9B6F', $account->getAddress());
        $this->assertEquals(1, $account->getNode());
        $this->assertEquals('0001', $account->getNodeId());
        $this->assertEquals(4, $account->getMsid());
        $this->assertEquals(new DateTime('@1531394984'), $account->getTime());
        $this->assertEquals('0001-00000003-AB0C', $account->getPairedAddress());
        $this->assertEquals(1, $account->getPairedNode());
        $this->assertEquals('0001', $account->getPairedNodeId());
        $this->assertEquals(0, $account->getStatus());
        $this->assertEquals(new DateTime('@1531394976'), $account->getLocalChange());
        $this->assertEquals(new DateTime('@1531396672'), $account->getRemoteChange());
        $this->assertEquals(1999999999743316130, $account->getBal