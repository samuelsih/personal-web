@extends('layouts.master')

@section('title', 'About')

@section('content')

<article class="mt-4 text-center mb-4">
    <h1 class="uppercase text-center">About Me</h1>
</article>

<section class="about-section flex justify-center text-left flex-col md:flex-col lg:flex-row">
      <div class="lg:w-1/2">
        <img src="{{ asset('img/pp.png') }}" alt="Me" class="w-full" />
      </div>


    <div class="flex flex-col lg:w-1/2">
        <article class="mt-8">
            <h3 class="font-semibold mb-4">Profile</h3>
            <p class="font-medium leading-6">
              Hard worker and passionate about technology, especially in building good backend applications. Develop personal project with Laravel and MySQL database. I love to work and collaborate with peoples. I always want to improve my skills and try the best i can put with other.
              Just intermezzo, i like monochrome color and also don't like coffee &#9749 (which is rare in my case).
            </p>
          </article>


          <article class="mt-8 w-full">
              <h3 class="font-semibold mb-4">Tools & Techs I Used</h3>

              <div class="flex space-x-5 flex-wrap lg:flex-row">

                @include('components.svg.about.skills')

              </div>
          </article>
    </div>
  </section>

  <section class="mt-16">
    <article>
        <h3 class="font-semibold mb-4 lg:text-center">Why I Choose Back End Development?</h3>
        <p class="font-medium leading-6">
          For 2 semesters, I tried to find out where my desire and passion in informatics, and to find out, I tried all those fields. Starting from the Front End Development, Back End Development, Android Development, Dev Ops, Data Science and many more. When I started trying Back End Development (after trying the Front End Development and Android Development), I started to feel comfortable doing it. Of course I tried other fields after learning Back End but in the end, I decided to stick with Back End Development and take it further + seriously until now.
        </p>
      </article>
  </section>

  <section class="flex flex-col mt-12 space-y-4">
    <h3 class="font-semibold">Education</h3>
    <article class="font-medium flex flex-col space-y-2">
        <h4><i class="fas fa-user-graduate"></i>
            2020 - Present
        </h4>
        <p><i class="fas fa-book"></i>
           <i>Undergraduate of Informatics</i> (GPA 3.60)
        </p>

        <p><i class="fas fa-map-marker-alt"></i>
            Insitut Teknologi Sepuluh Nopember
        </p>

    </article>
</section>

<section class="flex flex-col mt-12 space-y-5 w-full">
  <h3 class="font-semibold">Contact</h3>
  <p class="font-medium leading-6">
    If you have any critics and suggestion on this website, share opinion about technologies etc., Don't hesitate to contact me at :
  </p>

  <article class="text-left flex flex-row space-x-5">
    @include('components.svg.about.contact')
  </article>

</section>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ mix('js/app.js') }}"></script>

@endsection
