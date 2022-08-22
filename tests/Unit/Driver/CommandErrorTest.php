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

use Adshares\Ads\Driver\CommandError;
use PHPUnit\Framework\TestCase;

class CommandErrorTest extends TestCase
{
    /**
     * Id of last defined error.
     */
    private const ERROR_ID_MAX = 5057;

    public function testGetCode(): void
    {
        $errorDescription = 'Can\'t connect to server';
        $this->assertEquals(5028, CommandError::getCodeByMessage($errorDescription));
    }

    public fun