<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;

class PropertyAnalyticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $propertyAnalytics = json_decode('[
        {
            "property_id": "1",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "2",
            "anaytic_type_id": "1",
            "value": "21"
        },
        {
            "property_id": "3",
            "anaytic_type_id": "1",
            "value": "29"
        },
        {
            "property_id": "4",
            "anaytic_type_id": "1",
            "value": "16"
        },
        {
            "property_id": "5",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "6",
            "anaytic_type_id": "1",
            "value": "15"
        },
        {
            "property_id": "7",
            "anaytic_type_id": "1",
            "value": "21"
        },
        {
            "property_id": "8",
            "anaytic_type_id": "1",
            "value": "10"
        },
        {
            "property_id": "9",
            "anaytic_type_id": "1",
            "value": "14"
        },
        {
            "property_id": "10",
            "anaytic_type_id": "1",
            "value": "24"
        },
        {
            "property_id": "11",
            "anaytic_type_id": "1",
            "value": "26"
        },
        {
            "property_id": "12",
            "anaytic_type_id": "1",
            "value": "12"
        },
        {
            "property_id": "13",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "14",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "15",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "16",
            "anaytic_type_id": "1",
            "value": "10"
        },
        {
            "property_id": "17",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "18",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "19",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "20",
            "anaytic_type_id": "1",
            "value": "28"
        },
        {
            "property_id": "21",
            "anaytic_type_id": "1",
            "value": "11"
        },
        {
            "property_id": "22",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "23",
            "anaytic_type_id": "1",
            "value": "30"
        },
        {
            "property_id": "24",
            "anaytic_type_id": "1",
            "value": "11"
        },
        {
            "property_id": "25",
            "anaytic_type_id": "1",
            "value": "35"
        },
        {
            "property_id": "26",
            "anaytic_type_id": "1",
            "value": "11"
        },
        {
            "property_id": "27",
            "anaytic_type_id": "1",
            "value": "37"
        },
        {
            "property_id": "28",
            "anaytic_type_id": "1",
            "value": "13"
        },
        {
            "property_id": "29",
            "anaytic_type_id": "1",
            "value": "38"
        },
        {
            "property_id": "30",
            "anaytic_type_id": "1",
            "value": "29"
        },
        {
            "property_id": "31",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "32",
            "anaytic_type_id": "1",
            "value": "28"
        },
        {
            "property_id": "33",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "34",
            "anaytic_type_id": "1",
            "value": "11"
        },
        {
            "property_id": "35",
            "anaytic_type_id": "1",
            "value": "12"
        },
        {
            "property_id": "36",
            "anaytic_type_id": "1",
            "value": "20"
        },
        {
            "property_id": "37",
            "anaytic_type_id": "1",
            "value": "39"
        },
        {
            "property_id": "38",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "39",
            "anaytic_type_id": "1",
            "value": "35"
        },
        {
            "property_id": "40",
            "anaytic_type_id": "1",
            "value": "28"
        },
        {
            "property_id": "41",
            "anaytic_type_id": "1",
            "value": "31"
        },
        {
            "property_id": "42",
            "anaytic_type_id": "1",
            "value": "19"
        },
        {
            "property_id": "43",
            "anaytic_type_id": "1",
            "value": "13"
        },
        {
            "property_id": "44",
            "anaytic_type_id": "1",
            "value": "25"
        },
        {
            "property_id": "45",
            "anaytic_type_id": "1",
            "value": "39"
        },
        {
            "property_id": "46",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "47",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "48",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "49",
            "anaytic_type_id": "1",
            "value": "27"
        },
        {
            "property_id": "50",
            "anaytic_type_id": "1",
            "value": "25"
        },
        {
            "property_id": "51",
            "anaytic_type_id": "1",
            "value": "39"
        },
        {
            "property_id": "52",
            "anaytic_type_id": "1",
            "value": "20"
        },
        {
            "property_id": "53",
            "anaytic_type_id": "1",
            "value": "23"
        },
        {
            "property_id": "54",
            "anaytic_type_id": "1",
            "value": "15"
        },
        {
            "property_id": "55",
            "anaytic_type_id": "1",
            "value": "39"
        },
        {
            "property_id": "56",
            "anaytic_type_id": "1",
            "value": "27"
        },
        {
            "property_id": "57",
            "anaytic_type_id": "1",
            "value": "36"
        },
        {
            "property_id": "58",
            "anaytic_type_id": "1",
            "value": "31"
        },
        {
            "property_id": "59",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "60",
            "anaytic_type_id": "1",
            "value": "33"
        },
        {
            "property_id": "61",
            "anaytic_type_id": "1",
            "value": "14"
        },
        {
            "property_id": "62",
            "anaytic_type_id": "1",
            "value": "13"
        },
        {
            "property_id": "63",
            "anaytic_type_id": "1",
            "value": "26"
        },
        {
            "property_id": "64",
            "anaytic_type_id": "1",
            "value": "10"
        },
        {
            "property_id": "65",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "66",
            "anaytic_type_id": "1",
            "value": "23"
        },
        {
            "property_id": "67",
            "anaytic_type_id": "1",
            "value": "16"
        },
        {
            "property_id": "68",
            "anaytic_type_id": "1",
            "value": "18"
        },
        {
            "property_id": "69",
            "anaytic_type_id": "1",
            "value": "15"
        },
        {
            "property_id": "70",
            "anaytic_type_id": "1",
            "value": "18"
        },
        {
            "property_id": "71",
            "anaytic_type_id": "1",
            "value": "18"
        },
        {
            "property_id": "72",
            "anaytic_type_id": "1",
            "value": "23"
        },
        {
            "property_id": "73",
            "anaytic_type_id": "1",
            "value": "36"
        },
        {
            "property_id": "74",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "75",
            "anaytic_type_id": "1",
            "value": "23"
        },
        {
            "property_id": "76",
            "anaytic_type_id": "1",
            "value": "29"
        },
        {
            "property_id": "77",
            "anaytic_type_id": "1",
            "value": "32"
        },
        {
            "property_id": "78",
            "anaytic_type_id": "1",
            "value": "33"
        },
        {
            "property_id": "79",
            "anaytic_type_id": "1",
            "value": "36"
        },
        {
            "property_id": "80",
            "anaytic_type_id": "1",
            "value": "37"
        },
        {
            "property_id": "81",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "82",
            "anaytic_type_id": "1",
            "value": "12"
        },
        {
            "property_id": "83",
            "anaytic_type_id": "1",
            "value": "16"
        },
        {
            "property_id": "84",
            "anaytic_type_id": "1",
            "value": "9"
        },
        {
            "property_id": "85",
            "anaytic_type_id": "1",
            "value": "9"
        },
        {
            "property_id": "86",
            "anaytic_type_id": "1",
            "value": "20"
        },
        {
            "property_id": "87",
            "anaytic_type_id": "1",
            "value": "14"
        },
        {
            "property_id": "88",
            "anaytic_type_id": "1",
            "value": "15"
        },
        {
            "property_id": "89",
            "anaytic_type_id": "1",
            "value": "17"
        },
        {
            "property_id": "90",
            "anaytic_type_id": "1",
            "value": "15"
        },
        {
            "property_id": "91",
            "anaytic_type_id": "1",
            "value": "10"
        },
        {
            "property_id": "92",
            "anaytic_type_id": "1",
            "value": "22"
        },
        {
            "property_id": "93",
            "anaytic_type_id": "1",
            "value": "21"
        },
        {
            "property_id": "94",
            "anaytic_type_id": "1",
            "value": "16"
        },
        {
            "property_id": "95",
            "anaytic_type_id": "1",
            "value": "11"
        },
        {
            "property_id": "96",
            "anaytic_type_id": "1",
            "value": "33"
        },
        {
            "property_id": "97",
            "anaytic_type_id": "1",
            "value": "36"
        },
        {
            "property_id": "98",
            "anaytic_type_id": "1",
            "value": "34"
        },
        {
            "property_id": "99",
            "anaytic_type_id": "1",
            "value": "13"
        },
        {
            "property_id": "100",
            "anaytic_type_id": "1",
            "value": "33"
        },
        {
            "property_id": "2",
            "anaytic_type_id": "2",
            "value": "340"
        },
        {
            "property_id": "3",
            "anaytic_type_id": "2",
            "value": "823"
        },
        {
            "property_id": "4",
            "anaytic_type_id": "2",
            "value": "821"
        },
        {
            "property_id": "6",
            "anaytic_type_id": "2",
            "value": "1095"
        },
        {
            "property_id": "8",
            "anaytic_type_id": "2",
            "value": "1101"
        },
        {
            "property_id": "9",
            "anaytic_type_id": "2",
            "value": "970"
        },
        {
            "property_id": "10",
            "anaytic_type_id": "2",
            "value": "1049"
        },
        {
            "property_id": "12",
            "anaytic_type_id": "2",
            "value": "184"
        },
        {
            "property_id": "14",
            "anaytic_type_id": "2",
            "value": "192"
        },
        {
            "property_id": "15",
            "anaytic_type_id": "2",
            "value": "939"
        },
        {
            "property_id": "16",
            "anaytic_type_id": "2",
            "value": "745"
        },
        {
            "property_id": "18",
            "anaytic_type_id": "2",
            "value": "749"
        },
        {
            "property_id": "20",
            "anaytic_type_id": "2",
            "value": "428"
        },
        {
            "property_id": "21",
            "anaytic_type_id": "2",
            "value": "277"
        },
        {
            "property_id": "22",
            "anaytic_type_id": "2",
            "value": "1103"
        },
        {
            "property_id": "24",
            "anaytic_type_id": "2",
            "value": "544"
        },
        {
            "property_id": "26",
            "anaytic_type_id": "2",
            "value": "778"
        },
        {
            "property_id": "27",
            "anaytic_type_id": "2",
            "value": "234"
        },
        {
            "property_id": "28",
            "anaytic_type_id": "2",
            "value": "395"
        },
        {
            "property_id": "30",
            "anaytic_type_id": "2",
            "value": "784"
        },
        {
            "property_id": "32",
            "anaytic_type_id": "2",
            "value": "247"
        },
        {
            "property_id": "33",
            "anaytic_type_id": "2",
            "value": "959"
        },
        {
            "property_id": "34",
            "anaytic_type_id": "2",
            "value": "738"
        },
        {
            "property_id": "36",
            "anaytic_type_id": "2",
            "value": "559"
        },
        {
            "property_id": "38",
            "anaytic_type_id": "2",
            "value": "599"
        },
        {
            "property_id": "39",
            "anaytic_type_id": "2",
            "value": "383"
        },
        {
            "property_id": "40",
            "anaytic_type_id": "2",
            "value": "282"
        },
        {
            "property_id": "42",
            "anaytic_type_id": "2",
            "value": "309"
        },
        {
            "property_id": "44",
            "anaytic_type_id": "2",
            "value": "410"
        },
        {
            "property_id": "45",
            "anaytic_type_id": "2",
            "value": "190"
        },
        {
            "property_id": "46",
            "anaytic_type_id": "2",
            "value": "594"
        },
        {
            "property_id": "48",
            "anaytic_type_id": "2",
            "value": "228"
        },
        {
            "property_id": "50",
            "anaytic_type_id": "2",
            "value": "284"
        },
        {
            "property_id": "51",
            "anaytic_type_id": "2",
            "value": "758"
        },
        {
            "property_id": "52",
            "anaytic_type_id": "2",
            "value": "503"
        },
        {
            "property_id": "54",
            "anaytic_type_id": "2",
            "value": "672"
        },
        {
            "property_id": "56",
            "anaytic_type_id": "2",
            "value": "714"
        },
        {
            "property_id": "57",
            "anaytic_type_id": "2",
            "value": "896"
        },
        {
            "property_id": "58",
            "anaytic_type_id": "2",
            "value": "801"
        },
        {
            "property_id": "60",
            "anaytic_type_id": "2",
            "value": "1067"
        },
        {
            "property_id": "62",
            "anaytic_type_id": "2",
            "value": "1016"
        },
        {
            "property_id": "63",
            "anaytic_type_id": "2",
            "value": "918"
        },
        {
            "property_id": "64",
            "anaytic_type_id": "2",
            "value": "535"
        },
        {
            "property_id": "66",
            "anaytic_type_id": "2",
            "value": "970"
        },
        {
            "property_id": "68",
            "anaytic_type_id": "2",
            "value": "1004"
        },
        {
            "property_id": "69",
            "anaytic_type_id": "2",
            "value": "238"
        },
        {
            "property_id": "70",
            "anaytic_type_id": "2",
            "value": "296"
        },
        {
            "property_id": "72",
            "anaytic_type_id": "2",
            "value": "663"
        },
        {
            "property_id": "74",
            "anaytic_type_id": "2",
            "value": "1034"
        },
        {
            "property_id": "75",
            "anaytic_type_id": "2",
            "value": "318"
        },
        {
            "property_id": "76",
            "anaytic_type_id": "2",
            "value": "301"
        },
        {
            "property_id": "78",
            "anaytic_type_id": "2",
            "value": "779"
        },
        {
            "property_id": "80",
            "anaytic_type_id": "2",
            "value": "225"
        },
        {
            "property_id": "81",
            "anaytic_type_id": "2",
            "value": "839"
        },
        {
            "property_id": "82",
            "anaytic_type_id": "2",
            "value": "349"
        },
        {
            "property_id": "84",
            "anaytic_type_id": "2",
            "value": "567"
        },
        {
            "property_id": "86",
            "anaytic_type_id": "2",
            "value": "430"
        },
        {
            "property_id": "87",
            "anaytic_type_id": "2",
            "value": "626"
        },
        {
            "property_id": "88",
            "anaytic_type_id": "2",
            "value": "812"
        },
        {
            "property_id": "90",
            "anaytic_type_id": "2",
            "value": "960"
        },
        {
            "property_id": "92",
            "anaytic_type_id": "2",
            "value": "815"
        },
        {
            "property_id": "93",
            "anaytic_type_id": "2",
            "value": "1078"
        },
        {
            "property_id": "94",
            "anaytic_type_id": "2",
            "value": "605"
        },
        {
            "property_id": "96",
            "anaytic_type_id": "2",
            "value": "313"
        },
        {
            "property_id": "98",
            "anaytic_type_id": "2",
            "value": "716"
        },
        {
            "property_id": "99",
            "anaytic_type_id": "2",
            "value": "426"
        },
        {
            "property_id": "100",
            "anaytic_type_id": "2",
            "value": "577"
        },
        {
            "property_id": "2",
            "anaytic_type_id": "3",
            "value": "1.270018421"
        },
        {
            "property_id": "4",
            "anaytic_type_id": "3",
            "value": "3.025543904"
        },
        {
            "property_id": "6",
            "anaytic_type_id": "3",
            "value": "2.636676918"
        },
        {
            "property_id": "8",
            "anaytic_type_id": "3",
            "value": "3.346387614"
        },
        {
            "property_id": "10",
            "anaytic_type_id": "3",
            "value": "2.859468744"
        },
        {
            "property_id": "12",
            "anaytic_type_id": "3",
            "value": "1.074558188"
        },
        {
            "property_id": "14",
            "anaytic_type_id": "3",
            "value": "2.932338841"
        },
        {
            "property_id": "16",
            "anaytic_type_id": "3",
            "value": "2.087584363"
        },
        {
            "property_id": "18",
            "anaytic_type_id": "3",
            "value": "3.408517083"
        },
        {
            "property_id": "20",
            "anaytic_type_id": "3",
            "value": "0.861759136"
        },
        {
            "property_id": "22",
            "anaytic_type_id": "3",
            "value": "1.541525117"
        },
        {
            "property_id": "24",
            "anaytic_type_id": "3",
            "value": "3.298127054"
        },
        {
            "property_id": "26",
            "anaytic_type_id": "3",
            "value": "1.226399995"
        },
        {
            "property_id": "28",
            "anaytic_type_id": "3",
            "value": "1.865379565"
        },
        {
            "property_id": "30",
            "anaytic_type_id": "3",
            "value": "3.17141275"
        },
        {
            "property_id": "32",
            "anaytic_type_id": "3",
            "value": "2.035047004"
        },
        {
            "property_id": "34",
            "anaytic_type_id": "3",
            "value": "2.099784624"
        },
        {
            "property_id": "36",
            "anaytic_type_id": "3",
            "value": "1.943599425"
        },
        {
            "property_id": "38",
            "anaytic_type_id": "3",
            "value": "0.719948632"
        },
        {
            "property_id": "40",
            "anaytic_type_id": "3",
            "value": "2.553391324"
        },
        {
            "property_id": "42",
            "anaytic_type_id": "3",
            "value": "1.745140874"
        },
        {
            "property_id": "44",
            "anaytic_type_id": "3",
            "value": "2.523771201"
        },
        {
            "property_id": "46",
            "anaytic_type_id": "3",
            "value": "3.332058016"
        },
        {
            "property_id": "48",
            "anaytic_type_id": "3",
            "value": "1.814933014"
        },
        {
            "property_id": "50",
            "anaytic_type_id": "3",
            "value": "2.354128602"
        },
        {
            "property_id": "52",
            "anaytic_type_id": "3",
            "value": "1.294755944"
        },
        {
            "property_id": "54",
            "anaytic_type_id": "3",
            "value": "2.008035782"
        },
        {
            "property_id": "56",
            "anaytic_type_id": "3",
            "value": "1.991816459"
        },
        {
            "property_id": "58",
            "anaytic_type_id": "3",
            "value": "1.387187018"
        },
        {
            "property_id": "60",
            "anaytic_type_id": "3",
            "value": "3.412101376"
        },
        {
            "property_id": "62",
            "anaytic_type_id": "3",
            "value": "2.101437554"
        },
        {
            "property_id": "64",
            "anaytic_type_id": "3",
            "value": "1.697792144"
        },
        {
            "property_id": "66",
            "anaytic_type_id": "3",
            "value": "1.07272037"
        },
        {
            "property_id": "68",
            "anaytic_type_id": "3",
            "value": "1.896460345"
        },
        {
            "property_id": "70",
            "anaytic_type_id": "3",
            "value": "1.59923758"
        },
        {
            "property_id": "72",
            "anaytic_type_id": "3",
            "value": "2.247411824"
        },
        {
            "property_id": "74",
            "anaytic_type_id": "3",
            "value": "1.851653347"
        },
        {
            "property_id": "76",
            "anaytic_type_id": "3",
            "value": "2.290435341"
        },
        {
            "property_id": "78",
            "anaytic_type_id": "3",
            "value": "3.172783542"
        },
        {
            "property_id": "80",
            "anaytic_type_id": "3",
            "value": "1.530131423"
        },
        {
            "property_id": "82",
            "anaytic_type_id": "3",
            "value": "2.036501373"
        },
        {
            "property_id": "84",
            "anaytic_type_id": "3",
            "value": "0.628650031"
        },
        {
            "property_id": "86",
            "anaytic_type_id": "3",
            "value": "0.96190324"
        },
        {
            "property_id": "88",
            "anaytic_type_id": "3",
            "value": "2.706834686"
        },
        {
            "property_id": "90",
            "anaytic_type_id": "3",
            "value": "0.74096035"
        },
        {
            "property_id": "92",
            "anaytic_type_id": "3",
            "value": "0.722688918"
        },
        {
            "property_id": "94",
            "anaytic_type_id": "3",
            "value": "1.343687917"
        },
        {
            "property_id": "96",
            "anaytic_type_id": "3",
            "value": "2.435514536"
        },
        {
            "property_id": "98",
            "anaytic_type_id": "3",
            "value": "2.579194234"
        },
        {
            "property_id": "100",
            "anaytic_type_id": "3",
            "value": "2.509769933"
        }
    ]', true);

        foreach ($propertyAnalytics as $data) {
            DB::table('property_analytics')->insert([
                'property_id' =>  $data['property_id'],
                'analytic_type_id' => $data['anaytic_type_id'],
                'value' => $data['value']
            ]);
        }
    }
}
