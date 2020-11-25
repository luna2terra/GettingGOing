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

namespace Adshares\Ads;

use Adshares\Ads\Command\AbstractTransactionCommand;
use Adshares\Ads\Command\ChangeAccountKeyCommand;
use Adshares\Ads\Command\ChangeNodeKeyCommand;
use Adshares\Ads\Command\CreateAccountCommand;
use Adshares\Ads\Command\GetAccountCommand;
use Adshares\Ads\Command\GetAccountsCommand;
use Adshares\Ads\Command\GetBlockCommand;
use Adshares\Ads\Command\GetBlockIdsCommand;
use Adshares\Ads\Command\GetBroadcastCommand;
use Adshares\Ads\Command\GetLogCommand;
use Adshares\Ads\Command\GetMeCommand;
use Adshares\Ads\Command\GetMessageCommand;
use Adshares\Ads\Command\GetMessageIdsCommand;
use Adshares\Ads\Command\GetTransactionCommand;
use Adshares\Ads\Driver\DriverInterface;
use Adshares\Ads\Entity\EntityFactory;
use Adshares\Ads\Exception\CommandException;
use Adshares\Ads\Response\ChangeAccountKeyResponse;
use Adshares\Ads\Response\ChangeNodeKeyResponse;
use Adshares\Ads\Response\CreateAccountResponse;
use Adshares\Ads\Response\GetAccountResponse;
use Adshares\Ads\Response\GetAccountsResponse;
use Adshares\Ads\Response\GetBlockResponse;
use Adshares\Ads\Response\GetBlockIdsResponse;
use Adshares\Ads\Response\GetBroadcastResponse;
use Adshares\Ads\Response\GetLogResponse;
use Adshares\Ads\Response\GetMessageIdsResponse;
use Adshares\Ads\Response\GetMessageResponse;
use Adshares\Ads\Response\GetTransactionResponse;
use Adshares\Ads\Response\TransactionResponse;
use DateTimeInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Wrapper class used to interact with ADS wallet client.
 */
class AdsClient implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * @var DriverInterface
     */
    protected $driver;

    /**
     * AdsClient constructor.
     *
     * @param DriverInterface      $driver
     * @param LoggerInterface|null $logger
     */
    public function __construct(DriverInterface $driver, LoggerInterface $logger = null)
    {
        $this->driver = $driver;
        if (null === $logger) {
            $logger = new NullLogger();
        }
        $this->logger = $logger;
    }

    /**
     * Sets response entities map.
     *
     * @param string[] $map
     */
    public static function setEntityMap(array $map): void
    {
        EntityFactory::setEntityMap($map);
    }

    /**
     * Fills last account hash and message id in request. Function needs to be called before transaction.
     * Otherwise above parameters should be passed explicitly.
     *
     * @param AbstractTransactionCommand $transaction
     *
     * @param bool                       $force       force set msid and hash
     *
     * @throws CommandException
     */
    private function prepareTransaction(AbstractTransactionCommand $transaction, bool $force = false): void
    {
        if (!$force && (null !== $transaction->getLastMsid()) && (null !== $transaction->getLastHash())) {
            return;
        }

        $sender = $transaction->getSender();
        if (null !== $sender) {
            $resp = $this->getAccount($sender);
        } else {
            $resp = $this->getMe();
        }
        $transaction->setLastMsid($resp->getAccount()->getMsid());
        $transaction->setLastHash($resp