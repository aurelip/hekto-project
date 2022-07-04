@extends('layouts.app')
@section('content')
<title>Home Page</title>
<x-swiper/>
<h1 class=" aureli papers text-4xl mt-12 font-bold text-center ">Featured Products</h1>
<x-featurescard/>
<h1 class=" aureli papers text-4xl mt-12 font-bold text-center ">Latest Products</h1>
<x-list/>
<x-latestproductsII/>
<h1 class="aureli papers text-4xl mt-20 font-bold text-center ">What Shopex Offer!</h1>
<x-shopex/>
<x-uniquebg/>
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Trending Products</h1>
<x-trendingproducts/>
<x-trending2/>
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Discount Items</h1>
<div>
    <ul class="mt-6 text-center sm:flex justify-center gap-12 papers ">
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Wood Chair</a>
        </li>
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Plastic Chair</a>
        </li>
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Sofa Colletion</a>
        </li>
    </ul>
</div>
<x-discountitems/>
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Top Categories</h1>
<x-swiper3/>
<x-newslater/>
<img class="mx-auto mt-20 " src="img\image1174.png " alt=" ">
<h1 class="aureli papers lg:text-4xl mt-12 font-bold text-center ">Latest Blog</h1>
<div>
<x-blogcard/>
</div>
@endsection