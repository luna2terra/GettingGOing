
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

/**
 * Response for `change_account_key` transactions.
 *
 * @package Adshares\Ads\Response
 */
class ChangeAccountKeyResponse extends AbstractResponse
{
    /**
     * `true`, if account key was changed, `false` otherwise
     *
     * @var bool
     */
    protected $keyChanged;

    protected function loadData(array $data): void
    {
        parent::loadData($data);

        $this->keyChanged = array_key_exists('result', $data) && ('PKEY changed' === $data['result']);
    }

    /**
     * @return bool `true`, if account key was changed, `false` otherwise
     */
    public function isKeyChanged(): bool
    {
        return $this->keyChanged;
    }
}