
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

namespace Adshares\Ads\Tests\E2E;

use Adshares\Ads\Command\CreateNodeCommand;
use Adshares\Ads\Util\AdsValidator;
use PHPUnit\Framework\TestCase;

class CreateNodeTest extends TestCase
{
    public function testCreateNode(): void
    {
        $client = new TestAdsClient();

        $command = new CreateNodeCommand();
        $response = $client->runTransaction($command);

        $this->assertEquals($client->getAddress(), $response->getAccount()->getAddress());
        $txid = $response->getTx()->getId();
        $this->assertNotNull($txid);
        if (null != $txid) {
            $this->assertTrue(AdsValidator::isTransactionIdValid($txid), 'Invalid tx.id');
        }
    }
}