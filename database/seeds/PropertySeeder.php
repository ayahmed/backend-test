<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = json_decode('[
        {
            "Property Id": "1",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "2",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "3",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "4",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "5",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "6",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "7",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "8",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "9",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "10",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "11",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "12",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "13",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "14",
            "Suburb": "Parramatta",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "15",
            "Suburb": "Ryde",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "16",
            "Suburb": "Ryde",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "17",
            "Suburb": "Ryde",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "18",
            "Suburb": "Ryde",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "19",
            "Suburb": "Ryde",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "20",
            "Suburb": "Castle Hill",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "21",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "22",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "23",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "24",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "25",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "26",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "27",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "28",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "29",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "30",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "31",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "32",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "33",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "34",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "35",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "36",
            "Suburb": "Richmond",
            "State": "NSW",
            "Counrty": "Australia"
        },
        {
            "Property Id": "37",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "38",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "39",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "40",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "41",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "42",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "43",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "44",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "45",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "46",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "47",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "48",
            "Suburb": "Southbank",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "49",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "50",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "51",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "52",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "53",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "54",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "55",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "56",
            "Suburb": "O\'Sullivan Beach",
            "State": "Qld",
            "Counrty": "Australia"
        },
        {
            "Property Id": "57",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "58",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "59",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "60",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "61",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "62",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "63",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "64",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "65",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "66",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "67",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "68",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "69",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "70",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "71",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "72",
            "Suburb": "Geelong",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "73",
            "Suburb": "Fitzroy",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "74",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "75",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "76",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "77",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "78",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "79",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "80",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "81",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "82",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "83",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "84",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "85",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "86",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "87",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "88",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "89",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "90",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "91",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "92",
            "Suburb": "Richmond",
            "State": "Vic",
            "Counrty": "Australia"
        },
        {
            "Property Id": "93",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "94",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "95",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "96",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "97",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "98",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "99",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        },
        {
            "Property Id": "100",
            "Suburb": "Subiaco",
            "State": "WA",
            "Counrty": "Australia"
        }
    ]', true);

        foreach ($properties as $data) {
            DB::table('properties')->insert([
                'guid' =>  Uuid::uuid(),
                'suburb' => $data['Suburb'],
                'state' => $data['State'],
                'country' => $data['Counrty']
            ]);
        }
    }
}
