
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

namespace Adshares\Ads\Response;

use Adshares\Ads\Entity\EntityFactory;
use Adshares\Ads\Entity\NewAccount;

/**
 * Response for `create_account` transactions.
 *
 * @package Adshares\Ads\Response
 */
class CreateAccountResponse extends TransactionResponse
{
    /**
     * Data of created account
     *
     * @var NewAccount
     */
    protected $newAccount;

    protected function loadData(array $data): void
    {
        parent::loadData($data);

        if (array_key_exists('new_account', $data) && is_array($data['new_account'])) {
            $this->newAccount = EntityFactory::createNewAccount($data['new_account']);
        }
    }

    /**
     * @return NewAccount Data of created account
     */
    public function getNewAccount(): NewAccount
    {
        return $this->newAccount;
    }
}