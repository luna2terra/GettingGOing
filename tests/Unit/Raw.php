
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

class Raw
{
    public static function changeAccountKey(): string
    {
        return '{
            "current_block_time": "1536737856",
            "previous_block_time": "1536737824",
            "tx": {
                "data": "090100000000000800000052C2985BEAE1C8793B5597C4B3F490E76AC'
            . '31172C439690F8EE14142BB851A61F9A49F0E",
                "signature": "20B8F34EA2DE4472B78A3B7648A91AC6E2572F70F9A69B332E452B5413F6D24DBE47F3E'
            . '7B298A0574CE0E011493AE6DA8905B7FDEB78D690A449F66385C0010E",
                "time": "1536737874",
                "account_msid": "8",
                "account_hashin": "24BEBF3057AF4737D08038A35BF32401011487756A505E8CA6A297FD8938B722",
                "account_hashout": "92872A9291190C993C526B96D620F08DE4A8B4792BEFF035D9483DBB44D36EA9",
                "deduct": "0.00010000000",
                "fee": "0.00010000000",
                "node_msid": "78",
                "node_mpos": "1",
                "id": "0001:0000004E:0001"
            },
            "result": "PKEY changed"
        }';
    }

    public static function changeNodeKey(): string
    {
        return '{
            "current_block_time": "1536744768",
            "previous_block_time": "1536744736",
            "tx": {
                "data": "0A0100000000000500000059DD985B0000EAE1C8793B5597C'
            . '4B3F490E76AC31172C439690F8EE14142BB851A61F9A49F0E",
                "signature": "6841E3C967CC1E91BB887F1C0510CB44B6646783670D3CEE8EC4BD563B1DC1868582DF7085F9AB247DD2'
            . '36C2C2FEF5140080680AD1285C940900E2A407D1AD02",
                "time": "1536744793",
                "account_msid": "5",
                "account_hashin": "A248D98C61011E9EB80443CE34CDC7DC5621DB209905D567F18F7FFCD1E20725",
                "account_hashout": "A0E0EF9676AD51CAACFF1621BF28677B154F25A52B6B3CB60B2110F63F6F3D86",
                "deduct": "0.10000000000",
                "fee": "0.10000000000",
                "node_msid": "27",
                "node_mpos": "1",
                "id": "0001:0000001B:0001"
            },
            "result": "Node key changed",
            "account": {
                "address": "0001-00000000-9B6F",
                "node": "1",
                "id": "0",
                "msid": "6",
                "time": "1536744793",
                "date": "2018-09-12 09:33:13",
                "status": "0",
                "paired_node": "0",
                "paired_id": "0",
                "local_change": "1536744768",
                "remote_change": "1536744736",
                "balance": "19999999.65734114180",
                "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                "hash": "A0E0EF9676AD51CAACFF1621BF28677B154F25A52B6B3CB60B2110F63F6F3D86"
            }
        }';
    }

    public static function createAccount(): string
    {
        return '{
            "current_block_time": "1536668480",
            "previous_block_time": "1536668448",
            "tx": {
                "data": "060200000000000300000042B3975B020000000000A9C0D972D8AAB73805EC4A28291E05'
            . '2E3B5FAFE0ADC9D724917054E5E2690363",
                "signature": "3FEC4E367A87B615FFDE40CA992D4676E271970881E0C676E5C08E9D2C7F9A7B495'
            . 'D2A0A92BCAAAED5DCFE8D79A69F8BC01008BE6F832D3FC04D5192A13BB90F",
                "time": "1536668482",
                "account_msid": "3",
                "account_hashin": "CDE7C5D0D243D60500BDD32A8FC2A9EA7E9F7631B6CCFE77C26521A323087665",
                "account_hashout": "CE4622401C53A8CE0F9C22A7B590C288EDD50869C10381FA50CD8737BD7FD345",
                "deduct": "0.00120000000",
                "fee": "0.00100000000",
                "node_msid": "882",
                "node_mpos": "2",
                "id": "0002:00000372:0002"
            },
            "account": {
                "address": "0002-00000000-75BD",
                "node": "2",
                "id": "0",
                "msid": "4",
                "time": "1536668482",
                "date": "2018-09-11 14:21:22",
                "status": "0",
                "paired_node": "0",
                "paired_id": "0",
                "local_change": "1536668480",
                "remote_change": "1536668416",
                "balance": "9999999.98762190920",
                "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                "hash": "CE4622401C53A8CE0F9C22A7B590C288EDD50869C10381FA50CD8737BD7FD345"
            },
            "new_account": {
                "address": "0002-00000004-3539",
                "node": "2",
                "id": "4"
            }
        }';
    }

    public static function createNode(): string
    {
        return '{
            "current_block_time": "1536734240",
            "previous_block_time": "1536734208",
            "tx": {
                "data": "07010000000000030000003FB4985B",
                "signature": "0ACC5DF6B9079667AB48B0DD529CD6B8154CC190997060ADA6CCA8F7AB99CE63CAC51E8210EDDB6'
            . '41F8927566A3F0B4FAD2153BB61FAB9D16C2F40D3390E5108",
                "time": "1536734271",
                "account_msid": "3",
                "account_hashin": "35CABB3B28BA322AE62063024917293549FD6D42BF7ADCC933584F1585025D97",
                "account_hashout": "F88B31EEB3ABEC09D55EC5891DDF3D8A5326DBD6CDFDF687117C0A7581D7260C",
                "deduct": "1001.00000000000",
                "fee": "1000.00000000000",
                "node_msid": "21",
                "node_mpos": "1",
                "id": "0001:00000015:0001"
            },
            "account": {
                "address": "0001-00000000-9B6F",