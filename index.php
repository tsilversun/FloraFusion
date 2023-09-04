<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <title>Home</title>
</head>
<body>

  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="index.html" class="flex items-center">
        <img src="img/plant.jpeg" class="h-8 mr-3" alt="plant logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">FloraFusion Market</span>
    </a>
    <div class="flex md:order-2">
      <a href="login.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log in</button></a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#section1" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#section2" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Product</a>
        </li>
        <li>
          <a href="#section3" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Reviews</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<!-- section 1 -->
<section id="section1" class="bg-green-300 py-8">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
    <div class="mt-10 ml-6">
      <h2 class="text-4xl font-bold mb-4 text-center text-green-800 mt-10">FloraFusion Market</h2>
      <p class="text-green-800 text-center mt-10 ml-6 mr-6">
        Welcome to our plant online marketplace, where nature's wonders are just a click away. 
        Embark on a botanical adventure, transform your living spaces into tranquil havens, 
        and revel in the beauty and serenity that plants effortlessly bestow. Let the 
        enchantment begin!
      </p>
      <div class="flex justify-center mt-10">
      <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 mb-10 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
        Order now
      </button>
    </div>
    </div>
    <div class="md:text-right mb-10 ml-6">
      <img src="img/plant.jpeg" alt="plant" class="rounded-lg h-64 mt-10 mb-10 ml-6">
    </div>
  </div>
  </section>
<!-- section 2 -->
  <section id="section2" class="bg-white py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-4">Featured Products</h2>
      <div class="max-w-5xl mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <!-- Product 1 -->
            <div class="bg-white rounded shadow-md overflow-hidden">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="img/plant.jpeg" alt="Plant Product" class="object-cover w-full h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Snake Plant</h3>
                    <p class="text-gray-600">Easy to care for indoor plant.</p>
                    <div class="mt-2">
                        <span class="text-blue-500 font-semibold">199</span>
                        <span class="text-gray-500 ml-2 line-through">199</span>
                    </div>
                   
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M9 2c-1.67 0-3 1.33-3 3 0 1.17.69 2.17 1.69 2.69L15 12v2H6c-1.1 0-2 .9-2 2v3c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-3c0-1.1-.9-2-2-2h-9v-2l8.31-4.19c.21-.11.42-.26.59-.43.37-.37.59-.87.59-1.41 0-1.1-.9-2-2-2H9zm0 2h6c.55 0 1 .45 1 1 0 .28-.11.52-.29.71L9 9.46V4zm8 13H7v2h10v-2zm0-5H7v2h10v-2zm-6-3h2v2h-2V9z"/>
                            </svg>
                        </button>
                        <button class="text-gray-500 hover:text-red-500">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M12 21.35L9.39 18.73C4.95 14.29 2 11.4 2 8.5 2 6.5 3.5 5 5.5 5c1.63 0 3.18 1.07 4.5 2.55C12.32 6.07 13.87 5 15.5 5 17.5 5 19 6.5 19 8.5c0 2.9-2.95 5.79-7.39 10.23L12 21.35z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- product 2-->
            <div class="bg-white rounded shadow-md overflow-hidden">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="img/plant.jpeg" alt="Plant Product" class="object-cover w-full h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Snake Plant</h3>
                    <p class="text-gray-600">Easy to care for indoor plant.</p>
                    <div class="mt-2">
                        <span class="text-blue-500 font-semibold">199</span>
                        <span class="text-gray-500 ml-2 line-through">199</span>
                    </div>
                   <div class="mt-4 flex space-x-2"> <button class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600"> <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"> <path d="M9 2c-1.67 0-3 1.33-3 3 0 1.17.69 2.17 1.69 2.69L15 12v2H6c-1.1 0-2 .9-2 2v3c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-3c0-1.1-.9-2-2-2h-9v-2l8.31-4.19c.21-.11.42-.26.59-.43.37-.37.59-.87.59-1.41 0-1.1-.9-2-2-2H9zm0 2h6c.55 0 1 .45 1 1 0 .28-.11.52-.29.71L9 9.46V4zm8 13H7v2h10v-2zm0-5H7v2h10v-2zm-6-3h2v2h-2V9z"/> </svg> </button> <button class="text-gray-500 hover:text-red-500"> <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"> <path d="M12 21.35L9.39 18.73C4.95 14.29 2 11.4 2 8.5 2 6.5 3.5 5 5.5 5c1.63 0 3.18 1.07 4.5 2.55C12.32 6.07 13.87 5 15.5 5 17.5 5 19 6.5 19 8.5c0 2.9-2.95 5.79-7.39 10.23L12 21.35z"/> </svg> </button> </div>
                </div>
            </div>
            <!-- product 3-->
            <div class="bg-white rounded shadow-md overflow-hidden">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="img/plant.jpeg" alt="Plant Product" class="object-cover w-full h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Snake Plant</h3>
                    <p class="text-gray-600">Easy to care for indoor plant.</p>
                    <div class="mt-2">
                        <span class="text-blue-500 font-semibold">199</span>
                        <span class="text-gray-500 ml-2 line-through">199</span>
                    </div>
                    <div class="mt-4 flex space-x-2"> <button class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600"> <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"> <path d="M9 2c-1.67 0-3 1.33-3 3 0 1.17.69 2.17 1.69 2.69L15 12v2H6c-1.1 0-2 .9-2 2v3c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-3c0-1.1-.9-2-2-2h-9v-2l8.31-4.19c.21-.11.42-.26.59-.43.37-.37.59-.87.59-1.41 0-1.1-.9-2-2-2H9zm0 2h6c.55 0 1 .45 1 1 0 .28-.11.52-.29.71L9 9.46V4zm8 13H7v2h10v-2zm0-5H7v2h10v-2zm-6-3h2v2h-2V9z"/> </svg> </button> <button class="text-gray-500 hover:text-red-500"> <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"> <path d="M12 21.35L9.39 18.73C4.95 14.29 2 11.4 2 8.5 2 6.5 3.5 5 5.5 5c1.63 0 3.18 1.07 4.5 2.55C12.32 6.07 13.87 5 15.5 5 17.5 5 19 6.5 19 8.5c0 2.9-2.95 5.79-7.39 10.23L12 21.35z"/> </svg> </button> </div>
                </div>
            </div>
    </div>
  </section>
<!-- section 3 -->
  <section id="section3" class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-4">What our Customers Say</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-white shadow rounded-lg p-4">
          <h3 class="text-xl font-semibold mb-2">John Doe</h3>
          <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut lacus metus. Sed et imperdiet turpis, id blandit ante.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
          <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
          <p class="text-gray-700 mb-4">Nulla venenatis ipsum a felis faucibus, ut fermentum metus tincidunt.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
          <h3 class="text-xl font-semibold mb-2">Michael Johnson</h3>
          <p class="text-gray-700 mb-4">Fusce tincidunt dui in nisl egestas, in fringilla nunc auctor. Sed convallis tortor non libero eleifend aliquet.</p>
        </div>
      </div>
    </div>
  </section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>


