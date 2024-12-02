<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proquip</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="shortcut icon" href="{{ asset('frontend-assets/images/proquip-logo-native.webp') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('frontend-assets/css/main.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- Link Swiper's CSS (pastikan URL ini dapat diakses dengan benar) -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Script Swiper.js -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



  {{-- font awesome  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/brands.min.css"
    integrity="sha512-7rXIvd/xj1FnI2zKQjjXzDFxC4twqBByp8yxOgEQJs4C/aNzNyoQsOO7VxH0RgYNhbAYLJLwzqslaP50KTTHIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css"
    integrity="sha512-lauN4D/0AgFUGvmMR+knQnbOADyD/XuQ8VF18I8Ll0+TLvsujshyxvU+uzogmQbSq6qJd5jnUdYtK8ShxXMlSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/regular.min.css"
    integrity="sha512-mWnSnCSy+/uyx3fBqLP9Qyq3fDnIolDxqjN/8kqv5Z6Lw3T02XC+X6MqHHbIwtdwT2K/KFstAT/a1EYrSuOTMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/solid.min.css"
    integrity="sha512-bdqdas3Yr82pkTg5i0X1gcAT3tBXz/8H3J1ec7RyEKAvr/YiSCJNV2dnkukmL8CicjKb9rxmd+ILK8Kg2o2wvQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/svg-with-js.min.css"
    integrity="sha512-XYIwN/aDB71F+RFC2MtQ5igxu1J4KBoaEHFv3eRRCv4I7o6mucnZvjQJWFxnqDKxmjytALj1F6DE7oje0dkvtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/v4-font-face.min.css"
    integrity="sha512-ZbMvKtQAJzj5OBDXIJeDg7ltDOp+qnyyv7hBkdIDGfOdyrfQ07k39ZaQP3lDBEkxsPa9iH/7xXvm+NOSdfApOg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/v4-shims.min.css"
    integrity="sha512-SGMh2Ruuz66CxB/INs1kNyNsrmPOE0K5YUNuCtYsizgpWGlsE4rJhNSCDyyE9WEvTlf8b7/ieAP35IjZfM/O9w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/v5-font-face.min.css"
    integrity="sha512-EVGA1gELEgnprfIgKAk0j1wsvlVxbcarSvodKCWUUfpHu9BOpESunfh30zn32J9/JXgrGQ5taTYLptnWEv3ZjQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- end font awesome  --}}

  <style>
    .tinggi {
      z-index: 999 !important;
    }
  </style>

  @livewireStyles
</head>

<body>

  <div class="fixed w-full !z-999 tinggi">
    <!-- header -->
    <header class="py-4 shadow-sm bg-white z-10" id="header">
      <div class="container flex items-center justify-between">
        <a href="index.html" class="bg-red-700 m-3 rounded-[5px]">
          <img src="{{ asset('frontend-assets/images/proquip-logo-native.webp') }}" alt="Logo" class="w-32">
        </a>

        <div class="w-full max-w-xl relative flex">
          <x-input>
            <x-slot name="append">
              <x-button class="h-full" icon="magnifying-glass" rounded="rounded-r-md" primary flat />
            </x-slot>
          </x-input>
        </div>

        <div class="flex items-center space-x-4">
          <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
              <i class="fa-regular fa-heart"></i>
            </div>
            <div class="text-xs leading-3">Wishlist</div>
            <div
              class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
              8</div>
          </a>
          <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
              <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
            <div
              class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
              2</div>
          </a>
          <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
              <i class="fa-regular fa-user"></i>
            </div>
            <div class="text-xs leading-3">Account</div>
          </a>
        </div>
      </div>
    </header>
    <!-- ./header -->

    <!-- navbar -->
    <nav class=" bg-gray-800 ">
      <div class="container flex">
        <div class="px-8 py-4 bg-primary md:flex items-center cursor-pointer relative group">
          <span class="text-white">
            <i class="fa-solid fa-bars"></i>
          </span>
          <span class="capitalize ml-2 text-white">All Categories</span>

          <!-- Main dropdown -->
          <div
            class="absolute w-96 left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">

            <!-- AIR COMPRESSOR -->
            <div class="relative group">
              <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="{{ asset('frontend-assets/images/icons/sofa.svg') }}" alt="sofa"
                  class="w-5 h-5 object-contain">
                <span class="ml-6 text-gray-600 text-sm">AIR COMPRESSOR</span>
              </a>

              <!-- Sub-menu for AIR COMPRESSOR -->
              <div
                class="absolute left-full top-0 mt-0.5 w-48 bg-white shadow-md py-2 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 1</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 2</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 3</span>
                </a>
              </div>
            </div>

            <!-- BACKPACK SPRAYER -->
            <div class="relative group">
              <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="{{ asset('frontend-assets/images/icons/terrace.svg') }}" alt="terrace"
                  class="w-5 h-5 object-contain">
                <span class="ml-6 text-gray-600 text-sm">BACKPACK SPRAYER</span>
              </a>

              <!-- Sub-menu for BACKPACK SPRAYER -->
              <div
                class="absolute left-full top-0 mt-0.5 w-48 bg-white shadow-md py-2 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 4</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 5</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                  <img src="{{ asset('frontend-assets/images/icons/small-icon.svg') }}" alt="small icon"
                    class="w-4 h-4 object-contain">
                  <span class="ml-6 text-gray-600 text-sm">Sub-Item 6</span>
                </a>
              </div>
            </div>

            <!-- Other menu items -->
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
              <img src="{{ asset('frontend-assets/images/icons/bed.svg') }}" alt="bed"
                class="w-5 h-5 object-contain">
              <span class="ml-6 text-gray-600 text-sm">BRUSH CUTTER</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
              <img src="{{ asset('frontend-assets/images/icons/office.svg') }}" alt="office"
                class="w-5 h-5 object-contain">
              <span class="ml-6 text-gray-600 text-sm">CHAINSAW</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
              <img src="{{ asset('frontend-assets/images/icons/outdoor-cafe.svg') }}" alt="outdoor"
                class="w-5 h-5 object-contain">
              <span class="ml-6 text-gray-600 text-sm">DIGITAL SCALE</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
              <img src="{{ asset('frontend-assets/images/icons/bed-2.svg') }}" alt="Mattress"
                class="w-5 h-5 object-contain">
              <span class="ml-6 text-gray-600 text-sm">MATTRESS</span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- ./navbar -->
  </div>

  <div class="relative pt-48 ">

    @include('slider-swiper')

    <div class="mx-auto w-full bg-white py-24">
      <h1
        class=" z-10 w-full lg:w-1/2 h-16 text-center px-8 lg:px-16 py-4 text-white font-semibold text-2xl lg:text-4xl capitalize bg-red-700 rounded-md shadow-lg">
        Best Seller
      </h1>
    </div>


    <div class="mx-auto w-full bg-white">
      <div class="bg-cover bg-no-repeat bg-center h-auto bg-fixed" style="">
        <div class="container">


          <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4  gap-4 ">

            <!-- Mini Card 1 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 2 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

            </div>

            <!-- Mini Card 3 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

            </div>

            <!-- Mini Card 4 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

            <!-- Mini Card 5 -->
            <div class="bg-red-600 shadow-lg rounded-lg ">
              <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>


  <div class=" w-full bg-white py-24">
    <h1
      class=" z-10 w-full lg:w-1/2 h-16 text-center px-8 lg:px-16 py-4 text-white font-semibold text-2xl lg:text-4xl capitalize bg-red-700 rounded-md shadow-lg">
      Best Seller 1
    </h1>
  </div>


  <!-- Grid Layout -->
  <div class="container">



    <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-2 gap-4 py-6">

      <!-- Mini Card 1 -->
      <div class="bg-red-600 shadow-lg rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

      </div>

      <!-- Mini Card 2 -->
      <div class="bg-red-600 shadow-lg rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

      </div>

      <!-- Mini Card 3 -->
      <div class="bg-red-600 shadow-lg rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

      </div>

      <!-- Mini Card 4 -->
      <div class="bg-red-600 shadow-lg rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

      </div>

      <!-- Mini Card 5 -->
      <div class="bg-red-600 shadow-lg rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Card Image" class=" w-full object-cover">

      </div>

    </div>
  </div>



  <!-- categories -->

  <div class="container py-16 " id="category">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6" id="shop-by-category">shop by category</h2>
    <div class="grid grid-cols-3 gap-3">
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-1.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Bedroom</a>
      </div>
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-2.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Mattrass</a>
      </div>
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-3.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Outdoor
        </a>
      </div>
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-4.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Sofa</a>
      </div>
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-5.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Living
          Room</a>
      </div>
      <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('frontend-assets/images/category/category-6.jpg') }}" alt="category 1" class="w-full">
        <a href="#"
          class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Kitchen</a>
      </div>
    </div>
  </div>
  <!-- ./categories -->



  <!-- new arrival -->
  <div class="w-full  bg-cover bg-no-repeat bg-center h-[100vh] bg-fixed"
    style="background-image: url('{{ asset('frontend-assets/bg-proquip.webp') }};" id="new-arrival">

    <div class="container pb-16">
      <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded overflow-hidden group">
          <div class="relative">
            <img src="{{ asset('frontend-assets/images/products/product1.jpg') }}" alt="product 1" class="w-full">
            <div
              class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                      justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="add to wishlist">
                <i class="fa-solid fa-heart"></i>
              </a>
            </div>
          </div>
          <div class="pt-4 pb-3 px-4">
            <a href="#">
              <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
                Chair</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
              <p class="text-xl text-primary font-semibold">Rp45.00</p>
              <p class="text-sm text-gray-400 line-through">Rp55.90</p>
            </div>
            <div class="flex items-center">
              <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
          </div>
          <a href="#"
            class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
            to cart</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
          <div class="relative">
            <img src="{{ asset('frontend-assets/images/products/product4.jpg') }}" alt="product 1" class="w-full">
            <div
              class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                      justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="add to wishlist">
                <i class="fa-solid fa-heart"></i>
              </a>
            </div>
          </div>
          <div class="pt-4 pb-3 px-4">
            <a href="#">
              <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
                King Size</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
              <p class="text-xl text-primary font-semibold">Rp45.00</p>
              <p class="text-sm text-gray-400 line-through">Rp55.90</p>
            </div>
            <div class="flex items-center">
              <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
          </div>
          <a href="#"
            class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
            to cart</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
          <div class="relative">
            <img src="{{ asset('frontend-assets/images/products/product2.jpg') }}" alt="product 1" class="w-full">
            <div
              class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                      justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="add to wishlist">
                <i class="fa-solid fa-heart"></i>
              </a>
            </div>
          </div>
          <div class="pt-4 pb-3 px-4">
            <a href="#">
              <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                Couple Sofa</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
              <p class="text-xl text-primary font-semibold">Rp45.00</p>
              <p class="text-sm text-gray-400 line-through">Rp55.90</p>
            </div>
            <div class="flex items-center">
              <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
          </div>
          <a href="#"
            class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
            to cart</a>
        </div>
        <div class="bg-white shadow rounded overflow-hidden group">
          <div class="relative">
            <img src="{{ asset('frontend-assets/images/products/product3.jpg') }}" alt="product 1" class="w-full">
            <div
              class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                      justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <a href="#"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="add to wishlist">
                <i class="fa-solid fa-heart"></i>
              </a>
            </div>
          </div>
          <div class="pt-4 pb-3 px-4">
            <a href="#">
              <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                Mattrass X</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
              <p class="text-xl text-primary font-semibold">Rp45.00</p>
              <p class="text-sm text-gray-400 line-through">Rp55.90</p>
            </div>
            <div class="flex items-center">
              <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
          </div>
          <a href="#"
            class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
            to cart</a>
        </div>
      </div>
    </div>

  </div>
  <!-- ./new arrival -->

  <!-- ads -->
  <div class="container pb-16">
    <a href="#">
      <img src="{{ asset('frontend-assets/images/offer.jpg') }}" alt="ads" class="w-full">
    </a>
  </div>
  <!-- ./ads -->

  <!-- product -->
  <div class="container pb-16">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">recomended for you</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product1.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
              Chair</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product4.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
              King Size</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product2.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
              Couple Sofa</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product3.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
              Mattrass X</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product1.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer
              Chair</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product4.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Bed
              King Size</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product2.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
              Couple Sofa</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
          <img src="{{ asset('frontend-assets/images/products/product3.jpg') }}" alt="product 1" class="w-full">
          <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="view product">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="#"
              class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
              title="add to wishlist">
              <i class="fa-solid fa-heart"></i>
            </a>
          </div>
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
              Mattrass X</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp45.00</p>
            <p class="text-sm text-gray-400 line-through">Rp55.90</p>
          </div>
          <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(150)</div>
          </div>
        </div>
        <a href="#"
          class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
          to cart</a>
      </div>
    </div>
  </div>
  <!-- ./product -->

  <!-- footer -->
  <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grid-cols-1 ">
      <div class="col-span-1 space-y-4">
        <img src="{{ asset('frontend-assets/images/logo.svg') }}" alt="logo" class="w-30">
        <div class="mr-2">
          <p class="text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
          </p>
        </div>
        <div class="flex space-x-5">
          <a href="#" class="text-gray-400 hover:text-gray-500"><i
              class="fa-brands fa-facebook-square"></i></a>
          <a href="#" class="text-gray-400 hover:text-gray-500"><i
              class="fa-brands fa-instagram-square"></i></a>
          <a href="#" class="text-gray-400 hover:text-gray-500"><i class="fa-brands fa-twitter-square"></i></a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <i class="fa-brands fa-github-square"></i>
          </a>
        </div>
      </div>

      <div class="col-span-2 grid grid-cols-2 gap-4">
        <div class="grid grid-cols-2 gap-4 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
            <div class="mt-4 space-y-4">
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
            </div>
          </div>

          <div>
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
            <div class="mt-4 space-y-4">
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
              <!-- <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a> -->
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
          <div>
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
            <div class="mt-4 space-y-4">
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
            </div>
          </div>

          <div>
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
            <div class="mt-4 space-y-4">
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
              <!-- <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a> -->
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
              <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ./footer -->

  <!-- copyright -->
  <div class="bg-gray-800 py-4">
    <div class="container flex items-center justify-between">
      <p class="text-white">&copy; PROQUIP - All Right Reserved</p>
      <div>
        <img src="{{ asset('frontend-assets/images/methods.png') }}" alt="methods" class="h-5">
      </div>
    </div>
  </div>
  <!-- ./copyright -->


  <!-- navbar menu sticky-->
  <div id="menu-sticky"
    class="fixed z-[9999] mt-[12%] sm:block top-0 w-12  bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-100 group-hover:opacity-100 transition duration-300 hidden">
    <a href="#shop-by-category"
      class="flex items-center px-4 py-3 hover:bg-gray-100 transition duration-500 ease-in-out transform hover:opacity-80">
      <img src="{{ asset('frontend-assets/images/icons/sofa.svg') }}" alt="sofa" class="w-8 h-8 object-contain">
    </a>
    <a href="#new-arrival"
      class="flex items-center px-4 py-3 hover:bg-gray-100 transition duration-500 ease-in-out transform hover:opacity-80">
      <img src="{{ asset('frontend-assets/images/icons/terrace.svg') }}" alt="terrace"
        class="w-8 h-8 object-contain">
    </a>a
    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 transition">
      <img src="{{ asset('frontend-assets/images/icons/bed.svg') }}" alt="bed" class="w-8 h-8 object-contain">
    </a>
    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 transition">
      <img src="{{ asset('frontend-assets/images/icons/office.svg') }}" alt="office"
        class="w-8 h-8 object-contain">
    </a>
    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 transition">
      <img src="{{ asset('frontend-assets/images/icons/outdoor-cafe.svg') }}" alt="outdoor"
        class="w-8 h-8 object-contain">
    </a>
    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 transition">
      <img src="{{ asset('frontend-assets/images/icons/bed-2.svg') }}" alt="Mattress"
        class="w-8 h-8 object-contain">
    </a>
  </div>



  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      const scrollPosition = window.scrollY; // Posisi scroll saat ini

      // Menambahkan kelas 'sticky' jika scroll sudah melewati navbar
      if (scrollPosition >= navbar.offsetTop) {
        navbar.classList.add('sticky');
      } else {
        navbar.classList.remove('sticky');
      }
    });
  </script>



  {{-- <script>
    window.addEventListener('scroll', function() {
      const banner = document.getElementById('best-seller');
      const header = document.getElementById('header');
      const scrollPosition = window.scrollY; 

      const topPosition = scrollPosition * 1;
      const headerHeight = header.offsetHeight;

      if (scrollPosition >= 250) {
        banner.classList.remove('animate__fadeOut');
        banner.classList.add('animate__fadeIn', 'duration-500', 'ease-out', 'top-[100px]');
        banner.classList.remove('relative');
        banner.classList.add('absolute');

        banner.style.top = `${topPosition}px`; 
      } else {
        banner.classList.remove('animate__fadeIn');
        banner.classList.add('animate__fadeOut', 'animate__animated');
        banner.classList.add('relative');

        banner.style.top = '0px';
      }
    });
  </script> --}}



  {{-- font awesome  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
    integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/brands.min.js"
    integrity="sha512-DVS2SDsNMrQQMlbdcnmPtMdtOeqas4WRl06II/v/iMBRda50NUHHiI8z5Kv3WFu6OCCZYyObCXa9oSHcR4bz4g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/conflict-detection.min.js"
    integrity="sha512-kX9Qd2zXjOjm2Ch/yHog1mTDeXaZBsuT4QSv8JhzN66k/66HvYGlhP9jVkTNb9pRSjIa+Ph4fhhmVIVeOaiNgQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js"
    integrity="sha512-wb6S3DSfVBkb+hSBITIgbDGVQP+2h6cHRCSGjWXHqbyehs8kLtjgaIwp/vvZJNxX0NaVxhTGUetfD11t/vD2bw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/regular.min.js"
    integrity="sha512-TjMd9u2haGIV8ZYBQDPyGJfei5Gc2U7iw1lnCu1Z2DHlTcirZ8c6nEvSixFDc3rRNQfSptbS7rF1m7bLf8wxbg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/solid.min.js"
    integrity="sha512-Sd8lB5/Iw6CXTvliRyItUHBOvviZ9JfSNaZ9tVb74VTbWTfAKncBVx4VlzEroZOuXtH/BD84rKAV5mdZJXP/aA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/v4-shims.min.js"
    integrity="sha512-T2pk94x1bkMAO9y5NzvtA0wQUt9ddhz1NWlWLLV/Tu51fB/g0Sd6I5sCax5DR2/rgZ4fqRaCH4dS8P5dt9rvmg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- end font awesome  --}}


  <script>
    var swiper = new Swiper('.swiper', {
      loop: true, // To loop the slides infinitely
      autoplay: {
        delay: 2500, // Delay in milliseconds between slides (e.g., 2500ms = 2.5 seconds)
        disableOnInteraction: false, // Allows autoplay to continue after user interaction
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true, // Allow clicking on pagination
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  </script>

  @livewireScripts
</body>

</html>
