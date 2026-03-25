<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showindex(){
        return view('home');
    }
    public $array = [['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '../img/img1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 600, 'path' => '../img/img2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 700, 'path' => '../img/img3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 800, 'path' => '../img/img4.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 1000, 'path' => '../img/img5.jpg'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 300, 'path' => '../img/img6.jpg'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 100, 'path' => '../img/img7.jpg'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 9000, 'path' => '../img/img8.jpg'],
    ];


    public function showarray(){
        return view('array', ['array'=> $this->array]);
    }
    


    public function mixarray(){
        $shuffled = $this -> array;
        shuffle($shuffled);
        return view('array', ['array'=> $shuffled]);
    }

    public function sortArray()
    {
        $sorted = $this->array;
        usort($sorted, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', ['array' => $sorted]);
    }

    public function filterArray()
    {
        $filtered = array_filter($this->array, function ($item) {
            return $item['price'] > 1000;
        });
        return view('array', ['array' => $filtered]);
    }    
}
