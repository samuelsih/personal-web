@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <section
        class="flex flex-grow flex-col justify-center"
        >
        <article class="mb-4 text-center">
            <p class="md:text-base lg:text-lg">Hello</p>
            <p class="md:text-base lg:text-lg">My name is</p>
            <h1 class="text-blue-700 text-5xl my-4 md:text-8xl space tracking-wide">SAMUEL</h1>

        </article>

        <article class="mb-4 text-center">
            <p class="font-semibold text-sm md:text-base lg:text-lg">
                Welcome to my personal portfolio website. This website containts about my projects that i have been made, my experience, etc. So feel free to explore :)
            </p>
            <p class="font-semibold text-sm mt-2 md:text-base md:mt-4 md:text-center lg:text-lg">
                Also, kindly check out my Github and LinkedIn below.
            </p>
        </article>

        <article class="text-center">
            <button class="btn-home px-4 py-3 md:px-6 md:py-4">
                <a href="https://www.github.com/samuelsih" target="_blank" rel="noopener noreferrer"> <i class="fab fa-github"></i> Github</a>
            </button>

            <button class="btn-home px-4 py-3 md:px-6 md:py-4">
                <a href="https://www.linkedin.com/in/samuelsihotang" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            </button>
        </article>
    </section>

@endsection
