<?php


namespace App\Services;


use Illuminate\Support\Str;

class PriceToStringService
{
    public function turnUp ($collection)
    {
        if (isset($collection->price)) {
            $price = strval($collection->price);
            $length = strlen($price);
            $first = '';
            $second = '';
            if ($length >= 5)  {
                $first = Str::substr($price, 0, 2);
                $second = Str::substr($price, 2, 3);
            }
            else if ($length == 4) {
                $first = Str::substr($price, 0, 1);
                $second = Str::substr($price, 1, 3);
            }
            else $first = $price;

            $collection->str_price = $first . ' ' . $second;

        } else {
            foreach ($collection as $product) {
                $price = strval($product->price);
                $length = strlen($price);
                $first = '';
                $second = '';
                if ($length >= 5)  {
                    $first = Str::substr($price, 0, 2);
                    $second = Str::substr($price, 2, 3);
                }
                else if ($length == 4) {
                    $first = Str::substr($price, 0, 1);
                    $second = Str::substr($price, 1, 3);
                }
                else $first = $price;

                $product['str_price'] = $first . ' ' . $second;
            }
        }
        return $collection;
    }
}
