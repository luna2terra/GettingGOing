
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
                "node": "1",
                "id": "0",
                "msid": "4",
                "time": "1536734271",
                "date": "2018-09-12 06:37:51",
                "status": "0",
                "paired_node": "0",
                "paired_id": "0",
                "local_change": "1536734240",
                "remote_change": "1536734208",
                "balance": "19999999.99681894976",
                "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                "hash": "F88B31EEB3ABEC09D55EC5891DDF3D8A5326DBD6CDFDF687117C0A7581D7260C"
            }
        }';
    }

    public static function getAccount(): string
    {
        return '{
            "current_block_time": "1532415264",
            "previous_block_time": "1532415232",
            "tx": {
                "data": "1001000000000001000000000027CD565B",
                "signature": "BB196BECB8DD8E6759E7FDFC1A738307F1CE1A052066EE612ADCAC633BE759A685941544B0'
            . '9BF4EA28185DEB60ABEBB24A4C5170226834ACE5E978C45DD75609",
                "time": "1532415271"
            },
            "account": {
                "address": "0001-00000000-9B6F",
                "node": "1",
                "id": "0",
                "msid": "3",
                "time": "1532415270",
                "date": "2018-07-24 08:54:30",
                "status": "0",
                "paired_node": "1",
                "paired_id": "0",
                "local_change": "1532415264",
                "remote_change": "1532415232",
                "balance": "19999699.84935875759",
                "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                "hash": "8592795CE4EE7AAEEC7BA0EBCB4E5B83DF0151B009363FECB99EB39B62549343"
            },
            "network_account": {
                "address": "0001-00000000-9B6F",
                "node": "1",
                "id": "0",
                "msid": "2",
                "time": "1532415268",
                "date": "2018-07-24 08:54:28",
                "status": "0",
                "paired_node": "0",
                "paired_id": "0",
                "local_change": "1532415264",
                "remote_change": "1532415232",
                "balance": "19999899.94935875759",
                "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                "hash": "3A94A2410419BCE77E40206ADA6E6DFBD55117BC3D137EF4EF3AD9058BADEFF3",
                "checksum": "true"
            }
        }';
    }

    public static function getAccounts(): string
    {
        return '{
            "current_block_time": "1532422144",
            "previous_block_time": "1532422112",
            "tx": {
                "data": "180100000000000AE8565BE0E7565B0100",
                "signature": "3F7F802C52449775234D6FCA015D9AEB9E270F1D27BC1A091CCF9659FE52B7C81C8B99E04F46D53F9D8'
            . '5135F929F3498A7AEEBFEF87FAA3DA91D1E412F94EB06",
                "time": "1532422154",
                "account_msid": "0",
                "account_hashin": "FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF",
                "account_hashout": "E6DE11BBE1A5E7E10E8D10C01C2B5F83DB6AF1C2D0A22A0B38F1F0B5EA034365",
                "deduct": "0.00000000000",
                "fee": "0.00000000000"
            },
            "accounts": [{
                    "address": "0001-00000000-9B6F",
                    "node": "1",
                    "id": "0",
                    "msid": "4",
                    "time": "1532415271",
                    "date": "2018-07-24 08:54:31",
                    "status": "0",
                    "paired_node": "0",
                    "paired_id": "0",
                    "local_change": "1532415264",
                    "remote_change": "1532422080",
                    "balance": "19999699.87509796942",
                    "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                    "hash": "04D526CB20CCE3003B8A2103C5401ABBCAA3F42D03C2392629B6CF923F66323B"
                }, {
                    "address": "0001-00000001-8B4E",
                    "node": "1",
                    "id": "1",
                    "msid": "1",
                    "time": "1532414432",
                    "date": "2018-07-24 08:40:32",
                    "status": "0",
                    "paired_node": "1",
                    "paired_id": "1",
                    "local_change": "1532414432",
                    "remote_change": "1532421984",
                    "balance": "50199.98821000000",
                    "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                    "hash": "4528E7563589895DE3F18F0A28C8EDC159C76EAFE9ACC876A107EBFD534E48D0"
                }, {
                    "address": "0001-00000002-BB2D",
                    "node": "1",
                    "id": "2",
                    "msid": "1",
                    "time": "1532414432",
                    "date": "2018-07-24 08:40:32",
                    "status": "0",
                    "paired_node": "1",
                    "paired_id": "2",
                    "local_change": "1532414432",
                    "remote_change": "1532421984",
                    "balance": "8305.98820000000",
                    "public_key": "A9C0D972D8AAB73805EC4A28291E052E3B5FAFE0ADC9D724917054E5E2690363",
                    "hash": "F3816C5C21B6E7C163894621D8B4FEA0C6053C4CE5F7A4B70516745987AAAF49"
                }
            ]
        }';
    }

    public static function getBlock(): string
    {
        return '{
            "current_block_time": "1532421440",
            "previous_block_time": "1532421408",
            "tx": {
                "data": "1701000000000020E5565B4DE5565B",
                "signature": "076872033889584BFB8FBB7C05FDD36604111DCABDF3BC46CC89337D08B0563D521767B'
            . '61B60467E39371F60A857815E38947D5F9DED98A412F037813FA5E60E",
                "time": "1532421453"
            },
            "block_time_hex": "5B56E520",
            "block_time": "1532421408",
            "block_prev": "5B56E500",
            "block_next": "5B56E540",
            "block": {
                "id": "5B56E520",
                "time": "1532421408",
                "message_count": "4",
                "oldhash": "EFAA216F39750FE47ABABA66AB9168C7DBB727F202C2B45A5C85516211BC5DDB",
                "minhash": "8E466BA9FC2DDDDFA6C70365E59414C00769C77178BF9744AFCDC0AFFFFEE41E",
                "msghash": "EEF5F90F44C2C2F8B7A8A274FF32CE71F3455BAB4EB6DD97FFB5EBF62B06D006",
                "nodhash": "A55EF15FA68BECCAAF9CCC11DFDD7DD27A42148B5A76BB003F199578C1DD4E90",
                "viphash": "2A4831F1459C42E2CCF5C4E202C3301F94C381B6FB253DFED21DD015180D9507",
                "nowhash": "FD214FC008CDEE51A921CFB133D8A9FF8B503107BEC73B736E0225F6073B033C",
                "vote_yes": "0",
                "vote_no": "0",
                "vote_total": "3",
                "node_count": "4",
                "dividend_balance": "0.00000000000",
                "dividend_pay": "false",
                "nodes": [{
                        "id": "0000",
                        "public_key": "0000000000000000000000000000000000000000000000000000000000000000",
                        "hash": "0000000000000000000000000000000000000000000000000000000000000000",
                        "message_hash": "5611343B65A0A3A08C59F6923DDC9CC4BB3B7DE0A12CE4107B503A39B250A280",
                        "msid": "0",
                        "mtim": "1532414432",
                        "balance": "0.00000000000",
                        "status": "0",
                        "account_count": "0",
                        "port": "0",
                        "ipv4": "0.0.0.0"
                    }, {
                        "id": "0001",
                        "public_key": "73A5C92FA5142599B1C9863B43E026AFEFA6B57AEE8D189241C7F50C90BA5122",
                        "hash": "6241B452CAA725F45057B8D45A2DF37FC994ADF669F5F7E37976A90BA33E1A2E",
                        "message_hash": "CF97D2EF6B9A67D39F0F96A934E81B9B9F9E1F3990F8D7246B355387EB0DB775",
                        "msid": "106",
                        "mtim": "1532421414",
                        "balance": "20058205.85390889333",
                        "status": "6",
                        "account_count": "3",
                        "port": "8001",
                        "ipv4": "172.16.222.101"
                    }, {
                        "id": "0002",
                        "public_key": "FC4CA38301AC2080ADA2BC08C4A94405E546B659BD2EB559C1520A55586336CD",
                        "hash": "EF89516D2998E1C3646A07A1BB77E5E8C1C97EF973C12FE2F59568738B44CF31",
                        "message_hash": "943029F6A0ED646174D971278409D998D6853AA5C779736851F575339BDD4B06",
                        "msid": "611",
                        "mtim": "1532421420",
                        "balance": "10699999.98252993070",
                        "status": "2",
                        "account_count": "2",
                        "port": "8002",
                        "ipv4": "172.16.222.101"
                    }, {
                        "id": "0003",
                        "public_key": "5138AA57FAF5F7F2E67BDCA14F3CC377CD4C681B3F8B5A41DDDD590BD36C3125",
                        "hash": "BB7BC80A87C4E5A30F8AD318B598D943765E4D03D7406E61F5D8B4B5701B459A",
                        "message_hash": "15CAAFF4027F8BDB018F989F2753B87DEA2C05E84AA688E379E7864960E79794",
                        "msid": "98",
                        "mtim": "1532421414",
                        "balance": "7999999.99119369209",
                        "status": "2",
                        "account_count": "1",
                        "port": "8003",
                        "ipv4": "172.16.222.101"
                    }
                ]
            }
        }';
    }

    public static function getBlockIds(): string
    {
        return '{
            "current_block_time": "1532421536",
            "previous_block_time": "1532421504",
            "tx": {
                "data": "13010000000000ABE5565B0000000000000000",
                "signature": "825147B1F0A799D935A15384BC905E3274ACE906FDCB2999713273FB2BAF63CCD28694076EEF23E'
            . 'E09A7C766950C72C67DB1BF815A484C9372432DD889D6FE0B",
                "time": "1532421547"
            },
            "updated_blocks": "5",
            "blocks": ["5B56C9E0", "5B56CA00", "5B56CA20", "5B56CA40", "5B56CA60"]
        }';
    }

    public static function getBroadcast(): string
    {