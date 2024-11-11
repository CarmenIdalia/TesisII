<?php

namespace App\Enums;

enum OrderType: string
{
    case Mesa = 'Mesas';
    case ParaLlevar = 'ParaLlevar';
    case Delivery = 'Delivery';
}
