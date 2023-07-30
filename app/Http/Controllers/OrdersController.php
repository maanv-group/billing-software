<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function cart(){
        $data['page'] = [
            'products'=>json_encode([
                [
                    'name'=>"Product Name",
                    'image'=>"Product Image",
                    'price'=>"50",
                    'quantity'=>"10",
                    'stock'=>"70",
                ],
                [
                    'name'=>"Product Name",
                    'image'=>"Product Image",
                    'price'=>"70",
                    'quantity'=>"10",
                    'stock'=>"50",
                ],
                [
                    'name'=>"Product Name",
                    'image'=>"Product Image",
                    'price'=>"40",
                    'quantity'=>"3",
                    'stock'=>"30",
                ],
                [
                    'name'=>"Product Name",
                    'image'=>"Product Image",
                    'price'=>"140",
                    'quantity'=>"1",
                    'stock'=>"10",
                ],
            ])
        ];
        return view('pages.cart', $data);
    }
}
