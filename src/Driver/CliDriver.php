
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

namespace Adshares\Ads\Driver;

use Adshares\Ads\Command\CommandInterface;
use Adshares\Ads\Command\TransactionInterface;
use Adshares\Ads\Exception\CommandException;
use Adshares\Ads\Response\RawResponse;
use Adshares\Ads\Response\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\Process\Exception\ProcessTimedOutException;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Process;
use Throwable;

/**
 * CliDriver (Command line driver)
 *
 * CliDriver is driver which uses ads binary to connect ADS blockchain network.
 *
 * @package Adshares\Ads\Driver
 */
class CliDriver implements DriverInterface, LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * response field in which error message is stored
     */
    private const LABEL_ERROR = 'error';

    /**
     * ADS blockchain client app
     *
     * @var string
     */