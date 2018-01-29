<?php

namespace Teknomuslim\CurrencyFormatter\Controllers;

use App\Http\Controllers\Controller;

class CurrencyFormatterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting()
    {
        return view('CurrencyFormatter::greeting');
    }

    /**
     * @param $currency
     * @param $number
     * @return string
     */
    public function format($currency, $number)
    {
        $currency = strtolower($currency);
        switch ($currency) {
            case 'usd':
                $result = 'USD '.number_format($number, 2);
                break;
            default:
                $result = 'IDR '.number_format($number, null, null, '.');
                break;
        }
        $data = [
            'number' => $number,
            'formatted' => $result
        ];
        return view('CurrencyFormatter::currency', compact('data'));
    }
}
