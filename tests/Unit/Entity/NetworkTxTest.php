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
        $this->assertEquals('0001', $netTx->getNodeId());
        $this->assertEquals(11, $netTx->getNodeMsid());
        $this->assertEquals(1, $netTx->getNodeMpos());
        $this->assertEquals(85, $netTx->getSize());
        $this->assertEquals(7, $netTx->getHashpathSize());
        $this->assertEquals(
            '0801000000000002000000BBC4485B020001000000D5FE451B11A7C42A8E322F40315FA52482A0314A15C5183753019'
            . '946C404FFA088D6300E6D11B9F5B2E39C07D074CE763E3263331B0C80C6C2BF7373BA03EB0B',
            $netTx->getData()
        );

        $hashPath = $netTx->getHashpath();
        $this->assertCount(7, $hashPath);
        foreach ($hashPath as $hash) {
            $this->assertIsString($hash);
        }
    }

    /**
     * @return array<int|string, array<int|string, string>|string>
     */
    private function getRawData(): array
    {
        return json_decode(
            '{
        "id": "0001:0000000B:000