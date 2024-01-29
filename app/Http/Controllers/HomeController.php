<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $categories = ['Ethnic Wear', 'Casual wear',  'Western wear', 'Sportswear', 'Kids wear', 'Office wear', 'Sleep wear','Beauty & Makeup',  'Men wear', 'Active wear','Women wear'];
        $brands = ['Mango', 'ZARA', 'H&M', "Levi's",'Gucci',  'Guess', 'Forever 21'];
        return view('home', [
            'categories' => $categories, 'brands' => $brands
        ]);
    }

    public function products(){

    }
}