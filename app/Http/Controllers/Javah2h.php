<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Javah2h extends Controller
{
    public function DepositSaldo()
    {
        $url = 'https://javah2h.com/api/connect/';

        $header = array(
        'h2h-userid: '.env('JAVAH2H_ID'),
        'h2h-key:' .env('JAVAH2H_KEY'), // lihat hasil autogenerate di member area
        'h2h-secret:' .env('JAVAH2H_SECRET'), // lihat hasil autogenerate di member area
        );

        $data = array(
        'inquiry' => 'D', // konstan
        'bank' => 'bca', // bank tersedia: bca, bni, mandiri, bri, muamalat
        'nominal' => 500000, // jumlah request
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        dd($result);
    }

    public function cekSaldo()
    {
        $url = 'https://javah2h.com/api/connect/';

        $header = array(
            'h2h-userid: '.env('JAVAH2H_ID'),
            'h2h-key:' .env('JAVAH2H_KEY'), // lihat hasil autogenerate di member area
            'h2h-secret:' .env('JAVAH2H_SECRET'), // lihat hasil autogenerate di member area
            );

        $data = array(
        'inquiry' => 'S', // konstan
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        dd($result);
    }

    public function cekHarga()
    {
        $url = 'https://javah2h.com/api/connect/';

        $header = array(
            'h2h-userid: '.env('JAVAH2H_ID'),
            'h2h-key:' .env('JAVAH2H_KEY'), // lihat hasil autogenerate di member area
            'h2h-secret:' .env('JAVAH2H_SECRET'), // lihat hasil autogenerate di member area
        );

        $data = array(
        'inquiry' => 'HARGA', // konstan
        'code' => 'PULSA', // pilihan: pln, pulsa, game
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        dd($result);
    }
}
