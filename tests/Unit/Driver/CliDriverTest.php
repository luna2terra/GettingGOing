
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

namespace Adshares\Ads\Tests\Unit\Driver;

use Adshares\Ads\Command\BroadcastCommand;
use Adshares\Ads\Command\GetMeCommand;
use Adshares\Ads\Command\SendOneCommand;
use Adshares\Ads\Driver\CliDriver;
use Adshares\Ads\Driver\CommandError;
use Adshares\Ads\Exception\CommandException;
use PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use Symfony\Component\Process\Exception\ProcessTimedOutException;
use Symfony\Component\Process\Process;

class CliDriverTest extends TestCase
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

    public function testDriverInvalidExitCode(): void
    {
        $driver = $this->createCliDriver($this->createMockProcess(404, ''));
        $command = new GetMeCommand();

        $this->expectException(CommandException::class);
        $driver->executeCommand($command);
    }

    public function testDriverEmptyResponse(): void
    {
        $driver = $this->createCliDriver($this->createMockProcess(0, ''));
        $command = new GetMeCommand();

        $this->expectException(CommandException::class);
        $driver->executeCommand($command);
    }

    public function testDriverJsonResponseError(): void
    {
        $driver = $this->createCliDriver($this->createMockProcess(0, '{'));
        $command = new GetMeCommand();

        $this->expectException(CommandException::class);
        $driver->executeCommand($command);
    }

    public function testDriverResponseWithError(): void
    {
        $driver = $this->createCliDriver($this->createMockProcess(0, '{"error":"Bad user"}'));
        $command = new GetMeCommand();

        $this->expectException(CommandException::class);
        $this->expectExceptionCode(CommandError::BAD_USER);
        $driver->executeCommand($command);
    }

    public function testDriverCommandDefaultArguments(): void
    {
        $driver = $this->getMockBuilder(CliDriver::class)
            ->setMethods(['createProcess'])
            ->getMock();
        $driver
            ->expects($this->once())
            ->method('createProcess')
            ->with(
                $this->callback(
                    function (array $cmd) {
                        return in_array('ads', $cmd)
                            && in_array('--work-dir=~/.ads', $cmd)
                            && in_array('--nice=0', $cmd);
                    }
                )
            )
            ->willReturn($this->createMockProcess(0, '{}'));

        /** @var CliDriver $driver */
        $driver->executeCommand(new GetMeCommand());
    }

    public function testDriverCommandArgumentsFromConstructor(): void
    {
        $driver = $this->getMockBuilder(CliDriver::class)
            ->setConstructorArgs([$this->address, $this->secret, $this->host, $this->port])
            ->setMethods(['createProcess'])
            ->getMock();
        $driver
            ->expects($this->once())
            ->method('createProcess')
            ->with(
                $this->callback(
                    function (array $cmd) {
                        return in_array('--address=' . $this->address, $cmd)
                            && in_array('--secret', $cmd)
                            && in_array('--host=' . $this->host, $cmd)
                            && in_array('--port=' . $this->port, $cmd);
                    }
                )
            )
            ->willReturn($this->createMockProcess(0, '{}'));

        /** @var CliDriver $driver */
        $driver->executeCommand(new GetMeCommand());
    }

    public function testDriverCommandArgumentsFromSetters(): void
    {
        $driver = $this->getMockBuilder(CliDriver::class)
            ->setMethods(['createProcess'])
            ->getMock();

        $driver
            ->expects($this->once())
            ->method('createProcess')
            ->with(
                $this->callback(
                    function (array $cmd) {
                        return in_array('foo', $cmd)
                            && in_array('--work-dir=/tmp/mock', $cmd)
                            && in_array('--nice=0', $cmd)
                            && in_array('--address=0099-00000001-XXXX', $cmd)
                            && in_array('--secret', $cmd)
                            && in_array('--host=127.0.0.1', $cmd)
                            && in_array('--port=9999', $cmd);
                    }
                )
            )
            ->willReturn($this->createMockProcess(0, '{}'));

        /** @var CliDriver $driver */
        $driver->setCommand('foo');
        $driver->setWorkingDir('/tmp/mock');
        $driver->setAddress('0099-00000001-XXXX');
        $driver->setHost('127.0.0.1', 9999);
        $driver->setSecret('XYZ');
        $driver->executeCommand(new GetMeCommand());
    }

    public function testDriverDryRunCommandArgument(): void
    {
        $driver = $this->getMockBuilder(CliDriver::class)
            ->setMethods(['createProcess'])
            ->getMock();
        $driver
            ->expects($this->once())
            ->method('createProcess')
            ->with(
                $this->callback(
                    function (array $cmd) {
                        return in_array('--dry-run=1', $cmd);
                    }
                )
            )
            ->willReturn($this->createMockProcess(0, '{}'));

        $command = new SendOneCommand('0099-00000001-XXXX', 100);
        /** @var CliDriver $driver */
        $driver->executeTransaction($command, true);
    }
