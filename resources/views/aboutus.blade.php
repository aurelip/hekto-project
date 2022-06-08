@extends('layouts.app')
@section('content')
<!--aboutus-->
<div class="w-full h-64 bg-[#F6F5FF] mt-4">
    <h1 class="aureli papers font-bold text-2xl xl:text-4xl pt-20 ml-4 sm:ml-16 xl:ml-44 2xl:ml-[400px]">About us
    </h1>
    <div class="ml-4 sm:ml-16 xl:ml-44 2xl:ml-[400px]">
        <a href="#">Home.</a>
        <a href="#">Pages.</a>
        <a class=" hover:text-pink-600 hover:font-bold" href="#">About us </a>
    </div>
</div>
<x-aboutfile/>
<h1 class="text-center aureli text-2xl font-bold mt-32 ">Our Features</h1>
<x-shopex/>
<h1 class="text-center mt-[133px] text-5xl aureli font-bold ">Our Client Say!</h1>
<x-clientsays/>
@endsection