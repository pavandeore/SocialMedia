<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <link rel="stylesheet" href="Styles/User.css" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <!-- component -->
    <nav
      class="flex items-center justify-between flex-wrap bg-white py-4 lg:px-12 shadow border-solid border-t-2 border-blue-700"
    >
      <div
        class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0"
      >
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
          <span class="font-semibold text-xl tracking-tight">My Navbar</span>
        </div>
        <div class="block lg:hidden">
          <button
            id="hamburger"
            class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700 toggle block"
          >
            <img
              class="toggle hidden"
              src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
              width="40"
              height="40"
            />
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
      </div>

      <div
        class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8 toggle hidden"
      >
        <div class="text-md font-bold text-blue-700 lg:flex-grow">
          <a
            href="#responsive-header"
            class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2"
          >
            Menu 1
          </a>
          <a
            href="#responsive-header"
            class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2"
          >
            Menu 2
          </a>
          <a
            href="#responsive-header"
            class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2"
          >
            Menu 3
          </a>
        </div>
        <!-- This is an example component -->
        <div class="relative mx-auto text-gray-600 lg:block hidden">
          <input
            class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
            type="search"
            name="search"
            placeholder="Search"
          />
          <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
            <svg
              class="text-gray-600 h-4 w-4 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              viewBox="0 0 56.966 56.966"
              style="enable-background: new 0 0 56.966 56.966"
              xml:space="preserve"
              width="512px"
              height="512px"
            >
              <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"
              />
            </svg>
          </button>
        </div>
        <div class="flex">
          <a
            href="#"
            class="block text-md px-4 py-2 rounded text-blue-700 ml-2 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0"
            >Sign in</a
          >

          <a
            href="#"
            class="block text-md px-4 ml-2 py-2 rounded text-blue-700 font-bold hover:text-white mt-4 hover:bg-blue-700 lg:mt-0"
            >login</a
          >
        </div>
      </div>
    </nav>

    <!-- Navbar ends here -->

    <!-- Main content -->
    <main style="background-color:white;">
      <div class="">
        <div class="">
          <div class="">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus
            obcaecati nobis commodi, ratione iusto dolore explicabo, totam nemo
            at, neque quisquam consectetur. Recusandae mollitia animi vero
            suscipit laudantium commodi. Aliquam. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Debitis non alias facilis ex expedita
            voluptatem aspernatur nostrum? Molestiae voluptatem earum culpa
            debitis, aliquid assumenda, nihil ut maxime rem cumque tenetur.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequatur, atque vero repellat a non vel illo voluptatibus
            temporibus deserunt, recusandae ut itaque maiores praesentium
            quibusdam at! Quae animi omnis consectetur! Lorem ipsum dolor sit,
            amet consectetur adipisicing elit. Quae error delectus, nostrum ab
            necessitatibus nobis magnam, earum tempore, sunt itaque dolores
            blanditiis dicta quasi eius inventore praesentium quibusdam omnis
            id.
          </div>
        </div>
        
        <div class="">
          <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-12">
                <h1
                  class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
                >
                  Contact Us
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                  Whatever cardigan tote bag tumblr hexagon brooklyn
                  asymmetrical gentrify.
                </p>
              </div>
              <form method="post">
              
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  </div>
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label
                        for="message"
                        class="leading-7 text-sm text-gray-600"
                        >Message</label
                      >
                      <textarea
                        id="message"
                        name="message"
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                      ></textarea>
                    </div>
                  </div>
                  <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="post">
                      Button
                    </button>
                  </div>
                  </div>
                </div>
                <div class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 mx-6">
        <?php 
        
        include "../backend/post.php";
        ?>
        
        </div>
              </div>
              </form>
              
            </div>
          </section>
        </div>
        
        
        <div class="">
          <div class="">
            <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus
            obcaecati nobis commodi, ratione iusto dolore explicabo, totam nemo
            at, neque quisquam consectetur. Recusandae mollitia animi vero
            suscipit laudantium commodi. Aliquam. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Debitis non alias facilis ex expedita
            voluptatem aspernatur nostrum? Molestiae voluptatem earum culpa
            debitis, aliquid assumenda, nihil ut maxime rem cumque tenetur. -->
       
          </div>
        </div>
      </div>
    </main>
    <!-- Main content ends here -->

    <!-- end -->

    <script type="text/javascript" src="JS/loader.js"></script>
  </body>
</html>