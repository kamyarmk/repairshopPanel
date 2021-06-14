<?php

namespace App\Http\Controllers\Dashboard\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsConstroller extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        return view('product.list');
    }

    public function add(Request $request)
    {

        return view('product.add');
    }

    public function edit(Request $request)
    {

        return view('product.edit');
    }

    public function details(Request $request)
    {

        return view('product.details');
    }

    public function category(Request $request)
    {

        return view('product.category.list');
    }
    //Categories Add and Edit
        public function categoryAdd(Request $request)
        {

            return view('product.category.add');
        }
        public function categoryEdit(Request $request)
        {

            return view('product.category.add');
        }

    public function tags(Request $request)
    {

        return view('product.tags.list');
    }
    //Tags Add and Edit
        public function tagsAdd(Request $request)
        {

            return view('product.tags.add');
        }
        public function tagsEdit(Request $request)
        {

            return view('product.tags.add');
        }
    
    //Problems Reports
        public function attributes(Request $request)
        {

            return view('product.attributes.list');
        }

        public function attributesAdd(Request $request)
        {

            return view('product.attributes.add');
        }
        public function attributesEdit(Request $request)
        {

            return view('product.attributes.add');
        }
}
