<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pages()
    {
        $response = $this->get('/mulai-test-mbti');
        $response->assertStatus(200);
    }
    public function test_mbti_data_invalid(){
        $response = $this->post('/hasil', ['name' => 'Sally']);
        $response->assertStatus(500);
    }
    public function test_mbti_data_valid(){
        $response = $this->post('/hasil', [
            "_token" => "vEWRp36bjig2CY2aQCAsyUdqSBRrBsX0IYWjT3A9",
            "nama" => "Rofi",
            1 => "P",
            2 => "I",
            3 => "J",
            4 => "T",
            5 => "E",
            6 => "N",
            7 => "I",
            8 => "S",
            9 => "F",
            10 => "E",
            11 => "E",
            12 => "P",
            13 => "N",
            14 => "T",
            15 => "I",
            16 => "N",
            17 => "T",
            18 => "N",
            19 => "P",
            20 => "E",
            21 => "P",
            22 => "S",
            23 => "F",
            24 => "J",
            25 => "N",
            26 => "J",
            27 => "S",
            28 => "I",
            29 => "I",
            30 => "T",
            31 => "E",
            32 => "F",
            33 => "P",
            34 => "N",
            35 => "I",
            36 => "S",
            37 => "F",
            38 => "E",
            39 => "F",
            40 => "P",
            41 => "S",
            42 => "T",
            43 => "S",
            44 => "P",
            45 => "I",
            46 => "N",
            47 => "P",
            48 => "T",
            49 => "F",
            50 => "J",
            51 => "S",
            52 => "I",
            53 => "N",
            54 => "J",
            55 => "F",
            56 => "J",
            57 => "T",
            58 => "F",
            59 => "J",
            60 => "E"
        ]);
        $response->assertStatus(200);
    }
}