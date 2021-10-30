@extends('layouts.master')

@section('title', 'Dummy Coffee')

@section('content')

<article class="mt-4 text-center mb-4">
    <h1 class="uppercase text-center">Dummy Coffee</h1>
</article>

<main class="flex flex-col space-y-5 w-full mt-6">
    <article class="tracking-wide leading-normal space-y-5">
        <h2>Description</h3>
        <p class="font-semibold">This is my first project with PHP, and also transition from non relational databases to relational databases. I built this website with native / vanilla PHP. I also try bootstrap framework which is speed up my frontend view.</p>


        <p class="font-semibold">I learn so many things with this project. I learn authentication in vanilla PHP, learn about how to integrate XAMPP along with PHP, and how to send mail.</p>

        <p class="font-semibold">Mailing is the hardest for me from this project. When i find how to send mail using PHP, it recommends me <a href="https://github.com/PHPMailer/PHPMailer" class="text-text-secondary" target="_blank" rel="noopener noreferrer">PHPMailer</a>. So i find on youtube how to use PHPMailer. When i try it, so many errors and bugs happened to me. I spent so many times googling, find youtube videos, and of course stackoverflow. But i didn't get the answer. So i had to read the docs manually, and re-code my project from the beginning.
        </p>

        <p>At that point, i realize that if i can't find the answer of my errors, or i don't know the keyword to find it on Google, it is better to read the docs. </p>

        <div class="flex flex-col space-y-5">
            <p class="font-semibold">Built with:</p>

            <div class="flex flex-row space-x-5">
                <!-- PHP -->
                <a href="https://www.php.net/" target="_blank" rel="noopener noreferrer">
                    <div>
                        <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                            <path d="M9.349 13.609h-1.261l-0.687 3.531h1.12c0.739 0 1.291-0.14 1.656-0.421 0.359-0.276 0.604-0.745 0.729-1.396 0.124-0.625 0.067-1.068-0.161-1.328-0.235-0.255-0.699-0.385-1.396-0.385zM16 7.584c-8.839 0-16 3.771-16 8.416s7.161 8.416 16 8.416c8.839 0 16-3.771 16-8.416s-7.161-8.416-16-8.416zM11.651 17.521c-0.344 0.333-0.765 0.583-1.219 0.733-0.448 0.141-1.020 0.219-1.713 0.219h-1.579l-0.432 2.24h-1.839l1.641-8.432h3.531c1.063 0 1.839 0.276 2.328 0.833 0.485 0.557 0.636 1.339 0.437 2.339-0.072 0.396-0.213 0.776-0.405 1.131-0.193 0.337-0.437 0.651-0.751 0.937zM17.021 18.473l0.724-3.733c0.083-0.423 0.052-0.713-0.095-0.871-0.14-0.151-0.448-0.229-0.916-0.229h-1.453l-0.937 4.833h-1.828l1.64-8.437h1.823l-0.437 2.245h1.625c1.027 0 1.729 0.177 2.115 0.531 0.391 0.36 0.505 0.937 0.355 1.735l-0.767 3.927zM27.145 15.453c-0.072 0.396-0.208 0.776-0.405 1.131-0.188 0.337-0.437 0.651-0.745 0.937-0.349 0.328-0.765 0.583-1.224 0.733-0.448 0.141-1.021 0.219-1.713 0.219h-1.573l-0.437 2.24h-1.839l1.641-8.432h3.531c1.063 0 1.839 0.276 2.328 0.839 0.485 0.552 0.636 1.333 0.437 2.333zM23.688 13.609h-1.256l-0.687 3.531h1.115c0.744 0 1.296-0.14 1.656-0.421 0.364-0.276 0.609-0.745 0.735-1.396 0.124-0.625 0.067-1.068-0.168-1.328-0.228-0.255-0.697-0.385-1.395-0.385z"/>
                          </svg>

                    </div>
                </a>


                <!-- MySQL -->
                <a href="https://www.mysql.com/" target="_blank" rel="noopener noreferrer">
                    <div>
                        <svg class="icons" width="50" height="50" viewBox="0 0 182 123" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                            <path d="M123.793 12.4672C122.91 12.4672 122.321 12.5861 121.727 12.7332V12.8238H121.818C122.231 13.5878 122.91 14.182 123.436 14.8894C123.849 15.6874 124.2 16.508 124.585 17.306L124.704 17.1871C125.411 16.6835 125.768 15.8911 125.768 14.68C125.473 14.3235 125.411 13.9443 125.151 13.6161C124.857 13.1124 124.206 12.8521 123.793 12.4672ZM43.5317 112.032H36.5481C36.3366 100.916 35.6588 89.8142 34.5164 78.7552H34.4598L23.8202 112.032H18.4834L7.92875 78.7552H7.8382C7.01797 89.8305 6.52727 100.928 6.36677 112.032H0C0.344746 98.0772 1.37789 84.1477 3.09566 70.2945H11.7601L21.8394 100.951H21.896L32.0659 70.2945H40.3172C42.1452 85.5068 43.2374 99.4175 43.56 112.032H43.5317ZM73.8319 81.234C71.0022 96.6784 67.2274 107.912 62.6037 114.896C58.9478 120.289 54.9693 123 50.6342 123C49.4854 123 48.0705 122.643 46.3614 121.936V118.224C47.216 118.342 48.1894 118.427 49.2816 118.427C51.3133 118.427 52.9376 117.839 54.177 116.746C55.6484 115.388 56.3898 113.86 56.3898 112.179C56.3898 111.002 55.8295 108.642 54.6523 105.049L47.0179 81.234H53.8883L59.3722 99.0383C60.6116 103.107 61.1436 105.909 60.9059 107.527C63.9393 99.508 66.0333 90.7247 67.2161 81.234H73.8319ZM166.855 112.032H146.99V70.2945H153.68V106.905H166.855V112.032ZM141.801 113.04L134.138 109.265C134.817 108.704 135.462 108.088 136.056 107.38C139.328 103.577 140.952 97.8895 140.952 90.4022C140.952 76.5764 135.53 69.6833 124.681 69.6833C119.373 69.6833 115.219 71.4207 112.242 74.9295C108.999 78.7609 107.347 84.4202 107.347 91.8792C107.347 99.2194 108.79 104.584 111.682 108.031C114.336 111.098 118.314 112.66 123.651 112.66C125.626 112.66 127.454 112.423 129.107 111.925L139.101 117.759L141.84 113.045L141.801 113.04ZM116.956 103.662C115.247 100.951 114.421 96.5878 114.421 90.5719C114.421 80.0512 117.607 74.805 124.002 74.805C127.335 74.805 129.809 76.0727 131.37 78.5798C133.051 81.3189 133.906 85.6257 133.906 91.5793C133.906 102.162 130.691 107.499 124.325 107.499C120.963 107.499 118.518 106.231 116.928 103.724L116.956 103.662ZM104.455 100.481C104.455 104.019 103.159 106.939 100.533 109.174C97.9407 111.444 94.4885 112.592 90.0968 112.592C85.9995 112.592 82.0775 111.296 78.2179 108.699L80.0175 105.105C83.3169 106.758 86.2938 107.584 89.0103 107.584C91.5173 107.584 93.4925 107.024 94.9073 105.931C96.3221 104.811 97.1767 103.249 97.1767 101.274C97.1767 98.795 95.4393 96.6727 92.2814 94.907C89.3611 93.2884 83.498 89.9551 83.498 89.9551C80.3118 87.6291 78.7499 85.1503 78.7499 81.0529C78.7499 77.663 79.927 74.9521 82.2869 72.8865C84.6752 70.7642 87.7086 69.7342 91.4834 69.7342C95.2389 69.7016 98.9205 70.7785 102.066 72.8299L100.448 76.4236C97.9191 75.31 95.1914 74.719 92.4285 74.6861C90.278 74.6861 88.6254 75.2181 87.4766 76.2481C86.3277 77.2781 85.6203 78.5741 85.6203 80.1983C85.6203 82.6771 87.3917 84.7994 90.6288 86.6217C93.6056 88.2403 99.5876 91.6642 99.5876 91.6642C102.859 93.9619 104.483 96.4407 104.483 100.476L104.455 100.481ZM175.23 56.2989C171.19 56.2084 168.066 56.6215 165.445 57.742C164.71 58.0363 163.499 58.0363 163.38 58.9814C163.793 59.3946 163.85 60.0454 164.206 60.6C164.823 61.6017 165.859 62.96 166.832 63.6674C167.896 64.4936 168.954 65.3199 170.046 66.0273C172.022 67.2384 174.234 67.9458 176.176 69.1513C177.268 69.8587 178.388 70.7699 179.475 71.5112C180.035 71.8961 180.386 72.5752 181.094 72.8072V72.6601C180.737 72.2187 180.652 71.5678 180.296 71.0415C179.792 70.5378 179.294 70.0964 178.79 69.5984C177.314 67.6389 175.545 65.9189 173.544 64.4993C171.925 63.407 168.388 61.8734 167.737 60.0171L167.647 59.8983C168.739 59.8077 170.035 59.3946 171.093 59.1003C172.803 58.6589 174.393 58.7437 176.164 58.3023C176.977 58.0914 177.783 57.8555 178.581 57.5949V57.1535C177.67 56.2423 176.991 55.0029 176.045 54.1484C173.441 51.8695 170.661 49.7993 167.732 47.957C166.142 46.927 164.138 46.2762 162.457 45.4216C161.869 45.1273 160.839 44.9802 160.51 44.4765C159.599 43.356 159.067 41.9128 158.417 40.5829C156.936 37.7057 155.56 34.776 154.291 31.7996C153.38 29.8245 152.848 27.8777 151.727 26.0497C146.538 17.4701 140.878 12.2861 132.214 7.18707C130.357 6.12311 128.116 5.68168 125.756 5.1214C124.489 5.06481 123.249 4.97426 121.982 4.91767C121.155 4.56113 120.363 3.62168 119.656 3.14629C116.769 1.31832 109.339 -2.60361 107.245 2.58601C105.886 5.88542 109.248 9.09992 110.431 10.7525C111.285 11.9296 112.378 13.2313 112.995 14.5272C113.351 15.4101 113.436 16.3269 113.793 17.2381C114.591 19.4509 115.355 21.924 116.418 23.9897C116.979 25.0536 117.567 26.1685 118.275 27.1136C118.688 27.6739 119.395 27.9116 119.542 28.8228C118.835 29.8528 118.778 31.3581 118.394 32.5975C116.566 38.3135 117.273 45.3594 119.837 49.5756C120.663 50.8433 122.576 53.6164 125.145 52.5524C127.415 51.6413 126.917 48.7776 127.562 46.2422C127.709 45.6254 127.618 45.2405 127.918 44.8274V44.9462C128.654 46.3611 129.361 47.7193 130.012 49.1342C131.546 51.613 134.285 54.1766 136.554 55.8858C137.766 56.7969 138.705 58.3646 140.21 58.9192V58.772H140.092C139.769 58.3306 139.356 58.1212 138.943 57.7703C137.987 56.8236 137.1 55.8099 136.288 54.7369C134.195 51.9072 132.31 48.7833 130.657 45.5688C129.861 43.9805 129.134 42.3585 128.479 40.7074C128.184 40.1188 128.184 39.202 127.681 38.9077C126.917 40 125.796 40.9394 125.264 42.326C124.291 44.4765 124.2 47.1591 123.821 49.9321C123.645 49.9887 123.73 49.9321 123.645 50.051C122.027 49.6378 121.467 47.9853 120.872 46.5705C119.339 42.9768 119.101 37.2269 120.403 33.1012C120.759 32.0373 122.259 28.7096 121.67 27.7079C121.348 26.7345 120.346 26.1742 119.814 25.4102C119.135 24.4651 118.456 23.2596 117.986 22.1957C116.775 19.366 116.186 16.242 114.862 13.4124C114.274 12.1164 113.21 10.7581 112.355 9.55267C111.382 8.19443 110.323 7.22668 109.582 5.63075C109.316 5.07047 108.965 4.15931 109.378 3.56508C109.469 3.15195 109.673 3.00481 110.086 2.88596C110.736 2.32568 112.621 3.0331 113.272 3.35569C115.128 4.0914 116.69 4.79882 118.252 5.86278C118.96 6.36646 119.724 7.30591 120.64 7.5719H121.704C123.323 7.92844 125.123 7.66245 126.628 8.13218C129.31 8.98674 131.727 10.2261 133.906 11.5787C140.569 15.856 145.988 21.8134 149.616 28.8511C150.233 29.9999 150.499 31.0639 151.059 32.2693C152.089 34.7764 153.419 37.2778 154.478 39.6661C155.536 42.0543 156.543 44.4709 158.071 46.446C158.835 47.5099 161.846 48.0646 163.227 48.5965C164.229 49.0663 165.791 49.4794 166.674 50.0114C168.411 51.0753 170.12 52.2808 171.744 53.4579C172.571 54.0182 175.078 55.2859 175.225 56.2876L175.23 56.2989Z"/>
                            </svg>
                    </div>
                </a>


                <!-- Bootstrap -->
                <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer">
                    <div>
                        <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                            <path d="M26.667 0h-21.333c-2.943 0.010-5.323 2.391-5.333 5.333v21.333c0 2.932 2.401 5.333 5.333 5.333h21.333c2.932 0 5.333-2.401 5.333-5.333v-21.333c0-2.932-2.401-5.333-5.333-5.333zM23.75 22.474c-0.266 0.641-0.688 1.208-1.229 1.646-0.563 0.453-1.271 0.828-2.146 1.094-0.87 0.271-1.906 0.406-3.109 0.406h-8.573v-18.667h9.068c1.677 0 3.021 0.375 4.026 1.146 1.016 0.771 1.516 1.927 1.516 3.479 0 0.943-0.229 1.745-0.688 2.411s-1.12 1.182-1.974 1.542v0.063c1.141 0.24 2.021 0.781 2.599 1.62s0.88 1.901 0.88 3.182c0 0.719-0.141 1.401-0.401 2.036l0.031 0.036zM20.047 17.875c-0.542-0.5-1.313-0.745-2.302-0.745h-5.766v5.823h5.781c0.984 0 1.76-0.255 2.307-0.771s0.823-1.25 0.823-2.188c-0.010-0.922-0.276-1.635-0.823-2.12h-0.026zM19.25 14.109c0.526-0.448 0.786-1.089 0.786-1.927 0-0.938-0.234-1.604-0.708-1.984-0.469-0.38-1.146-0.578-2.036-0.578h-5.333v5.151h5.333c0.776 0 1.443-0.229 1.953-0.661z"/>
                          </svg>
                    </div>
                </a>

            </div>

        </div>

        <p>Click <a href="https://youtu.be/qzae1VeWfoA" target="_blank" rel="noopener noreferrer">Here</a> to Watch Demo</p>
    </article>


</main>




@endsection
