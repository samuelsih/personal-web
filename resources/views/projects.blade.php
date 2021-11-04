@extends('layouts.master')

@section('title', 'Projects')

@section('content')

<article class="mt-4 text-center mb-8">
    <h1 class="uppercase text-center">Projects</h1>
    <h4 class="mt-4">This is some projects that i have made.</h4>
</article>

<section class="flex flex-col justify-evenly md:flex-row md:content-center m-auto md:mx-4 md:-my-1">
    <div class="bg-gray-200 shadow-md rounded-lg max-w-xs mb-5 md: mx-4 project__container">
        <img src="{{ asset('img/shop-app.png') }}" alt="Shop App" class="rounded-t-lg">

        <div class="p-5 text-gray-800">
          <h5 class="font-bold text-xl tracking-tight mb-2">Shop App</h5>
          <div class="flex flex-col justify-evenly">
            <p class="font-normal text-gray-900 mb-3 text-sm"> Create e-commerce website with Laravel.</p>
            <a href="{{ route('projects.shopApp') }}" class="font-normal">Find more <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
    </div>

    <div class="bg-gray-200 shadow-md rounded-lg max-w-xs mb-5 md: mx-4 project__container">
      <img src="{{ asset('img/dummy-coffee.png') }}" alt="Find Dosen" class="rounded-t-lg">

      <div class="p-5 text-gray-800">
        <h5 class="font-bold text-xl tracking-tight mb-2">Dummy Coffee</h5>
        <p class="font-normal text-gray-900 mb-3 text-sm">First project with vanilla PHP. Build coffee website from beginning.</p>
        <a href="{{ route('projects.dummyCoffee') }}" class="font-normal">Find more <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="bg-gray-200 shadow-md rounded-lg max-w-xs mb-5 md: mx-4 project__container">
        <img src="{{ asset('img/cari-dosen.png') }}" alt="Find Dosen" class="rounded-t-lg">

        <div class="p-5 text-gray-800">
          <h5 class="font-bold text-xl tracking-tight mb-2">Find Dosen</h5>
          <div class="flex flex-col justify-evenly">
            <p class="font-normal text-gray-900 mb-3 text-sm"> Build to help find lecturer by his/her initial name.</p>
            <a href="{{ route('projects.findDosen') }}" class="font-normal">Find more <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
    </div>


</section>

@endsection
