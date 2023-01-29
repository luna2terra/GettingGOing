
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
use Adshares\Ads\Entity\Transaction\SendManyTransaction;
use PHPUnit\Framework\TestCase;

class SendManyTransactionWireTest extends TestCase
{
    public function testSendManyWiresFromRaw(): void
    {
        /** @var SendManyTransaction $transaction */
        $transaction = EntityFactory::createTransaction($this->getRawSendMany());

        $wires = $transaction->getWires();
        $wire = $wires[0];
        $this->assertEquals(1, $wire->getTargetNode());
        $this->assertEquals(1, $wire->getTargetUser());
        $this->assertEquals('0001-00000001-8B4E', $wire->getTargetAddress());
        $this->assertEquals(1, $wire->getAmount());

        $wire = $wires[1];
        $this->assertEquals(1, $wire->getTargetNode());
        $this->assertEquals('0001', $wire->getTargetNodeId());
        $this->assertEquals(0, $wire->getTargetUser());
        $this->assertEquals('0001-00000000-9B6F', $wire->getTargetAddress());
        $this->assertEquals(100000000000, $wire->getAmount());
    }

    /**
     * @return array<string, array<int|string, array<int|string, string>|string>|string>
     */
    private function getRawSendMany(): array
    {
        return json_decode(
            '{
            "id": "0001:0000001F:0001",
            "type": "send_many",
            "node": "1",
            "user": "0",
            "sender_address": "0001-00000000-9B6F",
            "msg_id": "5",
            "time": "1532005558",
            "wire_count": "2",
            "sender_fee": "0.00050000000",
            "wires": [
                {
                    "target_node": "1",
                    "target_user": "1",
                    "target_address": "0001-00000001-8B4E",