<x-default-layout>

    <div class="pt-2 pb-32" x-data="{ tab: '#description', menu: 'description'}">
        <div class="product-header lg:mx-auto lg:max-w-7xl lg:px-12 lg:gap-24">
            <h2 class="py-3 text-2xl font-semibold">Mickey and Minnie on the Swing - Disney Traditions</h2>
            <div class="gap-4 pb-4 text-sm text-gray-500 border-b-2 md:flex">
                <div class="pr-4 product-brand md:border-r-2">Brand:
                    <a href="#" class="text-blue-500">Disney Traditions</a>
                </div>
                <div class="flex pr-4 product-review md:border-r-2">
                    <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    <span> ( 2 Reviews )</span>
                </div>
                <div class="product-sku">SKU: MMS074902740</div>
            </div>
        </div>
        <div class="py-6 lg:gap-6 lg:grid lg:grid-cols-5 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:px-12">
            <div class="max-w-xl px-4 mx-auto lg:col-span-2 lg:max-w-none lg:mx-0 lg:px-0 sm:px-6">
                <div class="flex grid h-full grid-cols-5 gap-3">
                    <div class="z-0 col-span-5 text-sm">
                        <!-- Main zoom image -->
                        <a
                            class="relative MagicZoom"
                            id="zoom"
                            data-options="
                                zoomWidth: 500;
                                zoomHeight: 500;
                                selectorTrigger: hover"
                            title="..."
                            href="https://www.cadeaucity.com/18735-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg">
                            <img src="https://www.cadeaucity.com/18735-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"/>
                            <button class="absolute z-50 w-2/5 h-10 text-sm text-white bg-blue-500 left-8/12 lg:w-32 top-3 xl:left-3/4"> FREE DELIVERY</button>

                        </a>

                        <!-- Thumbnails -->
                        <a
                            data-zoom-id="zoom"
                            href="https://www.cadeaucity.com/18735-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            data-image="https://www.cadeaucity.com/18735-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            title="...">
                            <img src="https://www.cadeaucity.com/18735-MagicZoom/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"/>
                        </a>
                        <a
                            data-zoom-id="zoom"
                            href="https://www.cadeaucity.com/18737-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            data-image="https://www.cadeaucity.com/18737-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            title="...">
                            <img src="https://www.cadeaucity.com/18737-MagicZoom/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"/>
                        </a>
                        <a
                            data-zoom-id="zoom"
                            href="https://www.cadeaucity.com/18738-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            data-image="https://www.cadeaucity.com/18738-thickbox_default/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"
                            title="...">
                            <img src="https://www.cadeaucity.com/18738-MagicZoom/mickey-et-minnie-sur-la-balancoire-disney-traditions.jpg"/>
                        </a>

                        </div>
                </div>
            </div>
            <div class="col-span-3 mt-6 lg:mt-0">
                <h2 class="pb-3 text-2xl font-extrabold">€ 87.99</h2>
                <div class="flex gap-4 pb-4 text-sm text-gray-500 border-b-2">
                    <div class="pr-4 product-brand lg:border-r-2">Condition: <span class="font-bold text-blue-500">New</span></div>
                    <div class="product-sku">Status:
                        <span class="font-bold text-green-500">In stock</span>
                        {{-- red if out of stock --}}
                        {{-- <span class="font-bold text-red-500">Out of stock</span>  --}}
                    </div>
                </div>
                <div class="pb-4 border-b-2">
                    {{-- Display description in paragraph form --}}
                    <h2 class="py-3 text-xl font-bold text-blue-500">CADEAUCITY EXCLUSIVE!</h2>
                    <p class="pb-3">Romanticism and originality for this superb achievement featuring Mickey and his beloved on a swing (which really swings!).</p>
                    {{-- Display description in bullet form --}}
                    <ul class="list-disc list-inside">
                        <li>Material: Resin </li>
                        <li>Design: Hand painted, wood effect</li>
                        <li>Height: 22.5 cm</li>
                        <li>Width: 19 cm</li>
                        <li>Length: 6 cm</li>
                        <li>Designer: Jim Shore</li>
                        <li>© Disney</li>
                        <li>Walt Disney Showcase Collection</li>
                    </ul>
                    <p class="pt-4 text-sm">Reference: 6008328</p>
                </div>

                <div class="grid gap-4 py-4 border-b-2 md:grid-cols-4 ">
                    <input type="number" name="quantity" required placeholder="Quantity">
                    <button type="button" class="py-3 text-white bg-black rounded-sm">Add to Cart</button>
                    <button type="button" class="py-3 text-black bg-yellow-300 rounded-sm">Buy Now</button>
                    <button type="button" class="py-3 text-black border rounded-sm">Add to Wishlist</button>
                </div>
                <div class="py-4 border-b-2 text-md">
                    <p>Categories:
                        <a href="#" class="text-blue-500">Disney Sample One, </a>
                        <a href="#" class="text-blue-500">Pixar Sample Two, </a>
                        <a href="#" class="text-blue-500">Toy Story Sample Three, </a>
                        <a href="#" class="text-blue-500">Cinderella Sample Four</a>
                    </p>
                    <p>Tags: <span class="text-gray-500">Toys, Disney, Kids, Cute, Little</span></p>
                </div>
                <div class="grid gap-4 py-4 text-xs border-b-2 md:grid-cols-5">
                    <p class="md:col-span-3">By adding this product to your cart, collect a total of up to 8 loyalty points for this order.                                </p>
                    <a href="#" class="font-bold">Find other products of the brand</a>
                    <img src="https://www.cadeaucity.com/img/m/47-medium.jpg" class="h-12 mx-auto">
                </div>
            </div>
        </div>


        <div class="lg:max-w-7xl lg:mx-auto lg:px-12 md:pt-6">
            <div class="border-b border-gray-200">
                <nav class="grid grid-cols-3 -mb-px text-xs font-bold md:text-xl" aria-label="Tabs">
                    <a href="#"
                    class="px-1 py-4 text-center border-b-2 border-transparent hover:text-gray-500 hover:border-yellow-300 focus:border-yellow-300 focus:text-black" x-on:click.prevent="tab='#description'; menu='description'"
                    :class="{ 'text-black border-yellow-300': menu == 'description', 'text-gray-400':  menu != 'description' }"
                    >
                        Description
                    </a>
                    <a href="#" class="px-1 py-4 text-center text-gray-400 border-b-2 border-transparent hover:text-gray-500 hover:border-yellow-300 focus:border-yellow-300 focus:text-black" x-on:click.prevent="tab='#specification'; menu='specification'">
                        Specification
                    </a>
                    <a href="#" class="px-1 py-4 text-center text-gray-400 border-b-2 border-transparent hover:text-gray-500 hover:border-yellow-300 focus:border-yellow-300 focus:text-black" x-on:click.prevent="tab='#reviews'; menu='reviews'">
                        Reviews
                    </a>
                </nav>
            </div>
        </div>
        {{-- tab content static --}}
        {{-- DESCRIPTION --}}
        <div class="pt-12 lg:max-w-7xl lg:mx-auto lg:px-12" x-show="tab == '#description'" x-cloak>
            <h2 class="font-bold">Product Sample Long Description Title #1</h2>
            <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png">
            <h2 class="pt-8 font-bold">Product Sample Long Description Title #1</h2>
            <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul class="ml-3 list-disc list-inside">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                <li>Ut enim ad minim veniam</li>
                <li>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
        </div>

        {{-- SPECIFICATION --}}
        <div class="flex flex-col pt-12 lg:max-w-7xl lg:mx-auto lg:px-12" x-show="tab == '#specification'" x-cloak>
            <div class="-my-2 overflow-visible overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="w-full border divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        Material
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Resin
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        L x W x H
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        6cm x 19cm x 22.5cm
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        Designer
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Jim Shore
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        Description
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Romanticism and originality for this superb achievement featuring Mickey and his beloved on a swing (which really swings!).
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        Category
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Disney
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm font-bold text-black whitespace-nowrap bg-gray-50">
                                        Reference
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        6008328
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- REVIEWS --}}
        <div class="pt-12 lg:max-w-7xl lg:mx-auto lg:px-12" x-show="tab == '#reviews'" x-cloak>
            {{-- BAR GRAPH --}}
            <h2 class="font-bold">Average Rating</h2>
            <h2 class="py-2 text-6xl font-bold text-green-500 font-nano">2.3
                <span class="text-2xl">/ 5</span>
            </h2>
            <div class="flex product-review">
                <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                <span> ( 2 Reviews )</span>
            </div>
            <div class="mt-6 md:w-1/2">
                <div class="flex items-center mt-1">
                    <div class="tracking-tighter text-yellow-400 ">
                        <span>5 star</span>
                    </div>
                    <div class="w-3/5 px-6">
                        <div class="w-full h-2 bg-gray-300 rounded-lg">
                            <div class="h-2 bg-yellow-300 rounded-lg" style="width: 51%"></div>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        <span class="text-sm">51%</span>
                    </div>
                </div><!-- first -->
                <div class="flex items-center mt-1">
                    <div class="tracking-tighter text-yellow-400">
                        <span>4 star</span>
                    </div>
                    <div class="w-3/5 px-6">
                        <div class="w-full h-2 bg-gray-300 rounded-lg">
                            <div class="h-2 bg-yellow-300 rounded-lg" style="width: 17%"></div>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        <span class="text-sm">17%</span>
                    </div>
                </div><!-- second -->
                <div class="flex items-center mt-1">
                    <div class="tracking-tighter text-yellow-400">
                        <span>3 star</span>
                    </div>
                    <div class="w-3/5 px-6">
                        <div class="w-full h-2 bg-gray-300 rounded-lg">
                            <div class="h-2 bg-yellow-300 rounded-lg" style="width: 19%"></div>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        <span class="text-sm">19%</span>
                    </div>
                </div><!-- thierd -->
                <div class="flex items-center mt-1">
                    <div class="tracking-tighter text-yellow-400">
                        <span>2 star</span>
                    </div>
                    <div class="w-3/5 px-6">
                        <div class="w-full h-2 bg-gray-300 rounded-lg">
                            <div class="h-2 bg-yellow-300 rounded-lg" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        <span class="text-sm">80%</span>
                    </div>
                </div><!-- 4th -->
                <div class="flex items-center mt-1">
                    <div class="tracking-tighter text-yellow-400">
                        <span>1 star</span>
                    </div>
                    <div class="w-3/5 px-6">
                        <div class="w-full h-2 bg-gray-300 rounded-lg">
                            <div class="h-2 bg-yellow-300 rounded-lg" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        <span class="text-sm">0%</span>
                    </div>
                </div><!-- 5th -->
            </div>

            {{-- LIST OF CUSTOMER REVIEWS --}}
            <h2 class="w-full p-4 mt-8 font-bold bg-gray-100">2 Reviews For This Product</h2>
            <div class="divide-y divide-gray-200">
                <div class="flex py-10">
                    <div class="flex-shrink-0 mr-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=Hpk5hV3qM6&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" class="w-16 h-16 bg-white rounded-full">
                    </div>
                    <div>
                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                        <div class="flex gap-4 text-sm text-gray-500">
                            <div class="pr-4 border-r-2 product-brand">by
                                <a href="#" class="text-blue-500">John Doe</a>
                            </div>
                            <div class="product-sku">Nov 4th 2020</div>
                        </div>
                        <p class="mt-3">
                            I like the logo but not the color. Looking forward to their other products.
                        </p>
                    </div>
                </div>
                <div class="flex py-10">
                    <div class="flex-shrink-0 mr-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=Hpk5hV3qM6&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" class="w-16 h-16 bg-white rounded-full">
                    </div>
                    <div>
                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                        <div class="flex gap-4 text-sm text-gray-500">
                            <div class="pr-4 border-r-2 product-brand">by
                                <a href="#" class="text-blue-500">Romeo Cruz</a>
                            </div>
                            <div class="product-sku">Jan 7th 2020</div>
                        </div>
                        <p class="mt-3">
                            I like the logo but not the color. Looking forward to their other products.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- RELATED PRODUCTS CAROUSEL --}}
        <div class="pt-12 lg:max-w-7xl lg:mx-auto lg:px-12">

            <h2 class="w-full p-4 my-8 text-xl font-black text-center text-black bg-gray-100">Related Products</h2>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
              },
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 3,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 4,
                spaceBetween: 0,
                },
            },
            })" class="relative flex flex-row">
                <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                    <button @click="swiper.slidePrev()" class="flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow lg:-ml-4 focus:outline-none">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-left">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="swiper-container" x-ref="container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/7773-large_default/congratulations-mickey-et-minnie-disney-traditions.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #1</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/13579-large_default/mickey-et-minnie-forment-un-coeur-disney-britto.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #2</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/13611-large_default/mickey-minnie-et-la-bague-de-fiancailles-disney-traditions.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #3</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/19046-large_default/mickey-et-minnie-de-paques-disney-traditions.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #4</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/13611-large_default/mickey-minnie-et-la-bague-de-fiancailles-disney-traditions.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #3</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-auto p-6 swiper-slide hover:rounded hover:shadow">
                            <div class="flex flex-col overflow-hidden">
                                <div class="flex-shrink-0">
                                    <div>
                                        <img class="relative object-cover w-full min-h-56" src="https://www.cadeaucity.com/13611-large_default/mickey-minnie-et-la-bague-de-fiancailles-disney-traditions.jpg" alt="">
                                        <div class="grid grid-cols-3 gap-3 px-10 py-2 bg-white bottom-36">
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                            <button class="mx-auto w-10 h-10 p-2 rounded-full hover:bg-yellow-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p><a href="#" class="text-blue-500 hover:text-yellow-400">Disney Couple Long Product Title #3</a></p>
                                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                        <span class="text-xs"> ( 2 Reviews )</span>
                                        <p>$105.30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                </div>

                <div class="absolute inset-y-0 right-0 z-10 flex items-center ">
                    <button @click="swiper.slideNext()" class="flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow lg:-mr-4 focus:outline-none">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-right">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-default-layout>
