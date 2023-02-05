
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

namespace Adshares\Ads\Tests\Unit\Response;

use Adshares\Ads\Entity\Account;
use Adshares\Ads\Entity\Tx;
use Adshares\Ads\Response\GetAccountResponse;
use DateTime;
use PHPUnit\Framework\TestCase;

class GetAccountResponseTest extends TestCase
{
    public function testGetAccountFromRaw(): void
    {
        $response = new GetAccountResponse($this->getRawData());
        $time = new DateTime();
        $time->setTimestamp(1532091008);
        $this->assertEquals($time, $response->getCurrentBlockTime());
        $time->setTimestamp(1532090976);
        $this->assertEquals($time, $response->getPreviousBlockTime());

        $this->assertInstanceOf(Tx::class, $response->getTx());
        $this->assertInstanceOf(Account::class, $response->getAccount());
        $this->assertInstanceOf(Account::class, $response->getNetworkAccount());
    }

    /**
     * @return array<int|string, array<int|string, string>|string>
     */
    private function getRawData(): array
    {
        return json_decode(