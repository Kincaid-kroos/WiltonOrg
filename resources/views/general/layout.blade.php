<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ff3f19",
                        },
                    },
                },
            };
        </script>
        <title>Wilton Asset Management system</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-24" src="" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li class="py-2 rounded-xl">
                    <a href="register.html" class="hover:text-laravel bg-black text-white font-bold py-2 px-3"
                        >Admin</a
                    >
                </li>

                
                <li>
                    <a href="register.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

        <!-- Hero -->
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/laravel-logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Wilton<span class="text-black">Org</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Manage your Assets, Simple and Easy Today!
                </p>
                <div>
                    <a
                        href="register.html"
                        class="inline-block border-2 hover:animate-bounce border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up Today with us</a
                    >
                </div>
            </div>
        </section>

        @yield('content')

        <main>
            <!-- Search -->
            <form action="">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                    <div class="absolute top-4 left-3">
                        <i
                            class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                        ></i>
                    </div>
                    <input
                        type="text"
                        name="search"
                        class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Make a search"
                    />
                    <div class="absolute top-2 right-2">
                        <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >
                            Search 
                        </button>
                    </div>
                </div>
            </form>
           

            <h1 class="font-bold text-center text-3xl text-[#ff3f19] py-8">
                Partnership Deals
              </h1>
            <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Kincaid Industries</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Nairobi,
                                KN
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="https://images.pexels.com/photos/5848486/pexels-photo-5848486.jpeg"
                            alt=""
                        />
                        <div>
                            <div class="text-2xl font-bold mb-4">Green MX</div>
                            <p class="text-md text-[#000000]">
                                A farm company based, specializing in agricultural produces for exportation to Europe.
                              </p>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials start -->

<!-- Container to heading -->
<div class="px-5 text-center">
    <!-- Heading -->
    <h2 class="font-bold text-center text-2xl text-[#ff3f19] pt-8">
      Partner Reviews
    </h2>
    <!-- Testimonials Container -->
    <div class="flex flex-col mt-24 md:flex-row md:gap-12 md:pt-12">

         <!-- Testimonial b -->
      <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg md:flex md:w-1/3">
        <img src="https://images.pexels.com/photos/6311585/pexels-photo-6311585.jpeg" class="-mt-14 w-20 h-20 rounded-full object-cover" alt="" />
        <h5 class="text-lg font-bold text-[#ff3f19]">Chis Gavin</h5>
        <p class="text-md text-[#000000]">
          “The WiltonOrg asset management system has been a game-changer for our organization.
           It's intuitive, and the reporting features are incredibly helpful.”
        </p>
      </div>
      <!-- Testimonial a -->
      <div class="flex flex-col items-center justify-center p-6 space-y-6 rounded-lg md:w-1/3">
        <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg" class="-mt-14 w-20 h-20 rounded-full object-cover" alt="" />
        <h5 class="text-lg font-bold text-[#ff3f19]">Tess Green</h5>
        <p class="text-md text-[#000000]">
            "We've tried several asset management solutions, 
            and WiltonOrg's system stands out. It's reliable, customizable, and the customer support is top-notch."
        </p> 
      </div>
  
      <!-- Testimonial c -->
      <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg md:flex md:w-1/3">
        <img src="https://images.pexels.com/photos/428340/pexels-photo-428340.jpeg" class="-mt-14 w-20 h-20 rounded-full object-cover" alt="" />
        <h5 class="text-lg font-bold text-[#ff3f19]">Bernie Sanders</h5>
        <p class="text-lg text-[#000000]">
          “I've been using WiltonOrg's asset management system for a few months now, 
          and it has truly streamlined our workflow. Easy to use and highly efficient!”
        </p>
      </div>
    </div>
  
    <div class="my-16 p-12 hover:animate-bounce">
      <a href="/shop" class="p-3 px-6 text-white bg-[#ff3f19] rounded-xl font-semibold
        no-underline hover:bg-[#b7db37]">Get Started</a>
    </div>
  </div>
  
  
  
  <!-- Testimonials end -->
  

            
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

            <a
                href="create.html"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Admin Panel</a
            >
        </footer>
    </body>
</html>