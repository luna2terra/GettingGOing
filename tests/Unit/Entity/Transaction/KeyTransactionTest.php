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

namespace Adshares\Ads\Tests\Unit\Entity\Transaction;

use Adshares\Ads\Entity\EntityFactory;
use Adshares\Ads\Entity\Transaction\KeyTransaction;
use DateTime;
use PHPUnit\Framework\TestCase;

class KeyTransactionTest extends TestCase
{
    public function testAccountCreatedFromRaw(): void
    {
        /** @var KeyTransaction $transaction */
        $transaction = EntityFactory::createTransaction($this->getRawAccountCreated());

        $this->assertEquals('0002:0000000A:0001', $transaction->getId());
        $this->assertEquals('account_created', $transaction->getType());
        $this->assertEquals(2, $transaction->getNode());
        $this->assertEquals(2, $transaction->getUser());
        $this->assertEquals(0, $transaction->getMsgId());
        $this->assertEquals('0002-00000002-55FF', $transaction->getSenderAddress());
        $date = new DateTime();
        $date->setTimestamp(1531493862);
        $this->assertEquals($date, $transaction->getTime());
        $this->assertEquals('0001-00000000-9B6F', $transaction->getTargetAddress());
        $this->assertEquals(1, $transaction->getTargetNode());
        $this->assertEquals('0001', $transaction->getTargetNodeId());
        $this->assertEquals(0, $transaction->getTargetUser());
        $this->assertEquals(
            'A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363',
            $transaction->getPublicKey()
        );
        $this->assertEquals(53, $transaction->getSize());
    }

    public function testChangeAccountKeyFromRaw(): void
    {
        /** @var KeyTransaction $transaction */
        $transaction = EntityFactory::createTransaction($this->getRawChangeAccountKey());

        $this->assertEquals('0001:00000009:0001', $transaction->getId());
        $this->assertEquals('change_account_key', $transaction->getType());
        $this->assertEquals(1, $transaction->getNode());
        $this->assertEquals(0, $transaction->getUser());
        $this->assertEquals(5, $transaction->getMsgId());
        $this->assertEquals('0001-00000000-9B6F', $transaction->getSenderAddress());
        $date = new DateTime();
        $date->setTimestamp(1531498103);
        $this->assertEquals($date, $transaction->getTime());
        $this->assertNull($transaction->getTargetAddress());
        $this->assertNull($transaction->getTargetNode());
        $this->assertNull($transaction->getTargetNodeId());
        $this->assertEquals(
            'EAE1C8793B5597C4B3F490E76AC31172C439690F8EE14142BB851A61F9A49F0E',
            $transaction->getPublicKey()
        );
        $this->assertEquals(
            '01411FAC10DE65000000008100000000000000B04EEF0100000000B04EEF0100'
            . '000000200000000000000020000000000000000000000000000000626C6F636B',
            $transaction->getPublicKeySignature()
        );
        $this->assertEquals(
            '65870B267C50ABE43A63FE7294768C400DB050D455BCEC3E44C64B07F0F18392'
            . '348E7614A088DCC21327BC0A0F009A6A12CCFC070297E8E035C2DA9DA9449303',
            $transaction->getSignature()
        );
        $this->assertEquals(111, $transaction->getSize());
    }

    public function testChangeNodeKeyFromRaw(): void
    {
        /** @var KeyTransaction $transaction */
        $transaction = EntityFactory::createTransaction($this->getRawChangeNodeKey());

        $this->assertEquals('0001:00000003:0001', $transaction->getId());
        $this->assertEquals('change_node_key', $transaction->getType());
        $this->assertEquals(1, $transaction->getNode());
        $this->assertEquals(0, $transaction->getUser());
        $this->assertEquals(1, $transaction->getMsgId());
        $this->assertEquals('0001-00000000-9B6