
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

/**
 * Class CommandError has definition of all known errors.
 *
 * @package Adshares\Ads\Driver
 */
class CommandError
{
    /**
     * This error is assigned, when error could not be recognized.
     */
    public const UNKNOWN_ERROR = 5000;
    public const NONE = 5001;
    public const BAD_PATH = 5002;
    public const BAD_USER = 5003;
    public const BANK_NOT_FOUND = 5004;
    public const USER_NOT_FOUND = 5005;
    public const BANK_INCORRECT = 5006;
    public const UNDO_NOT_FOUND = 5007;
    public const GET_USER_FAIL = 5008;
    public const GET_GLOBAL_USER_FAIL = 5009;
    public const LOW_BALANCE = 5010;
    public const READ_ONLY_MODE = 5011;
    public const BAD_MSG_ID = 5012;
    public const CREATE_ACCOUNT_BAD_TIMING = 5013;
    public const CREATE_ACCOUNT_FAIL = 5014;
    public const MESSAGE_SUBMIT_FAIL = 5015;
    public const WRONG_SIGNATURE = 5016;
    public const DUPLICATED_TARGET = 5017;
    public const AMOUNT_BELOW_ZERO = 5018;
    public const USER_BAD_TARGET = 5019;
    public const NODE_BAD_TARGET = 5020;
    public const TIME_IN_FUTURE = 5021;
    /**
     * For getBroadcast: Broadcast not ready. Need to wait and retry.
     */
    public const BROADCAST_NOT_READY = 5022;
    /**
     * Legacy error. This error is inactive, because field 'broadcastCount' was introduced in getBroadcast response.
     *
     * Original description:
     * For getBroadcast: No messages. Need to check next block.
     */
    public const NO_BROADCAST_FILE = 5023;
    /**
     * For getMessageIds: No message list. Need to retry after short delay.
     */
    public const NO_MESSAGE_LIST_FILE = 5024;
    public const INCORRECT_TRANSACTION = 5025;
    public const MATCH_SECRET_KEY_NOT_FOUND = 5026;
    public const SET_KEY_REMOTE_BANK_FAIL = 5027;
    public const CONNECT_SERVER_ERROR = 5028;
    public const GET_BLOCK_INFO_UNAVAILABLE = 5029;
    /**
     * For getBlocks: This error means that some of the signatures for block are collected, but not all.
     * Node waits for missing blocks. Need to retry after short delay.
     */
    public const GET_SIGNATURE_UNAVAILABLE = 5030;
    public const INCORRECT_TYPE = 5031;
    public const BAD_LENGTH = 5032;
    public const GET_LOG_FAILED = 5033;
    public const HIGH_TIME_DIFFERENCE = 5034;
    public const PKEY_DIFFERS = 5035;
    public const PKEY_NOT_CHANGED = 5036;
    public const HASH_MISMATCH = 5037;
    public const GOT_EMPTY_BLOCK = 5038;
    public const FAILED_TO_LOAD_HASH = 5039;
    public const CANT_OPEN_FILE = 5040;
    public const CANT_CREATE_DIRECTORY = 5041;
    public const FAIL_TO_PROVIDE_TXN_INFO = 5042;
    public const FAIL_TO_READ_TXN_INFO = 5043;
    public const FAIL_TO_GET_HASH_TREE = 5044;
    public const AUTHORIZATION_ERROR = 5045;
    public const STATUS_SUBMIT_FAIL = 5046;
    public const LOCK_USER_FAILED = 5047;
    public const NO_NODE_STATUS_CHANGE_AUTH = 5048;
    public const ACCOUNT_STATUS_ON_REMOTE_NODE = 5049;
    public const COMMAND_PARSE_ERROR = 5050;
    public const BROADCAST_MAX_LENGTH = 5051;
    public const FEE_BELOW_ZERO = 5052;
    public const FAILED_TO_READ_BLOCK_START = 5053;
    public const FAILED_TO_READ_BLOCK_AT_START = 5054;
    /**
     * For getBlocks: Parameter 'from' is before genesis or there are no blocks in defined period.
     */
    public const NO_BLOCK_IN_SPECIFIED_RANGE = 5055;
    public const COULD_NOT_READ_CORRECT_VIP_KEYS = 5056;
    /**
     * Legacy error. This error is inactive, because field 'updatedBlocks' was introduced in getBlocks response.
     *
     * Original description:
     * For getBlocks: No new blocks. All blocks were downloaded at this moment.
     */
    public const NO_NEW_BLOCKS = 5057;