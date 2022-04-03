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

namespace Adshares\Ads\Tests\Unit;

use Adshares\Ads\AdsClient;
use Adshares\Ads\Command\ChangeAccountKeyCommand;
use Adshares\Ads\Command\ChangeNodeKeyCommand;
use Adshares\Ads\Command\CreateAccountCommand;
use Adshares\Ads\Command\CreateNodeCommand;
use Adshares\Ads\Command\SendOneCommand;
use Adshares\Ads\Driver\CliDriver;
use Adshares\Ads\Entity\Broadcast;
use Adshares\Ads\Tests\Unit\Entity\ExtendedAccount;
use DateTime;
use PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use Symfony\Component\Process\Process;

class AdsClientTest extends TestCase
{
    /**
     * @var string
     */
    private $address = '0001-00000000-9B6F';
    /**
     * @var string
     */
    private $secret = 'BB3425F914CA9F661CA6F3B908E07092B5AFB7F2FDAE2E94EDE12C83207CA743';
    /**
     * @var string
     */
    private $host = '10.69.3.43';
    /**
     * @var int
     */
    private $port = 9001;

    /**
     * Public key generated from `a` pass-phrase
     *
     * @var string
     */
    private $publicKey = 'EAE1C8793B5597C4B3F490E76AC31172C439690F8EE14142BB851A61F9A49F0E';
    /**
     * Empty string signed with private key generated from `a` pass-phrase
     *
     * @var string
     */
    private $signature = '1F0571D30661FB1D50BE0D61A0A0E97BAEFF8C030CD0269ADE49438A4AD4CF897367'
    . 'E21B100C694F220D922200B3AB852A377D8857A64C36CB1569