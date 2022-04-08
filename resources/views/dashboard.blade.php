<x-app-layout>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="w-full">
            <div id="animation-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div
                    class="overflow-hidden relative  rounded-lg h-48 sm:h-64 xl:h-80 2xl:h-96 3xl:h-112 4xl:h-128 5xl:h-160">
                    <!-- Item 1 -->
                    <div id="carousel-item-1" class="hidden duration-300 ease-in-out" data-carousel-item="active">
                        <img src="/img/icon/index-banner.svg"
                            class="block relative h-full w-fit top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div id="carousel-item-2" class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="/img/picture/index/greenbath.png"
                            class="block relative h-full w-fit top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div id="carousel-item-3" class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="/img/picture/index/index-banner2.jpg"
                            class="block relative h-full w-fit top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>


        <div class="text-center mt-12 text-4xl text-dot font-black tracking-widest">
            產 品 介 紹
        </div>

        <div class="flex flex-wrap justify-center py-8">
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/1" class="shrink-0 flex-col items-center text-center">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path d="M494,322.7c-2.3,4-5.9,5.3-10.4,5.7c-10.9,0.9-19.9,9.9-21.1,20.7c-0.1,1.2-0.1,2.5-0.4,3.7c-0.9,4.3-4.2,7.1-8.1,6.9
                            c-3.9-0.2-7.1-3.1-7.4-7.5c-0.6-7.2-2.9-13.6-8.7-18.3c-2-1.6-4.2-2.8-7.3-4.7c0,3,0,4.8,0,6.6c0,33.1,0,66.2,0,99.3
                            c0,9.4-2.4,11.9-11.8,11.9c-108.4,0-216.9,0-325.3,0c-9.3,0-11.7-2.5-11.7-12c0-72.7,0-145.4,0-218.1c0-1.8,0-3.6,0-6.2
                            c-8.2,3.5-13,8.9-15,16.7c-0.5,2.1-0.7,4.3-1,6.4c-0.6,4.3-3.3,6.8-7.4,7c-4.2,0.2-7-2.2-7.9-6.4c-0.6-2.7-0.7-5.5-1.4-8.2
                            c-2.6-9.2-10.8-16-20.2-16.7c-4.5-0.3-8.1-1.7-10.4-5.7c0-1.5,0-3.1,0-4.6c1.9-3.7,4.9-5.5,9.2-6c13.8-1.7,20.8-9.1,22.4-22.9
                            c0.6-5.5,3.5-8.5,8-8.4c4.6,0,7.2,2.9,7.9,8.5c1.3,10.8,6.3,17.7,15.8,21.1c0-2,0-3.7,0-5.5c0-35.8,0-71.5,0-107.3
                            c0-10,2.3-12.2,12.4-12.2c108,0,216,0,324,0c10.1,0,12.4,2.3,12.4,12.3c0,75.2,0,150.4,0,225.6c0,1.8,0,3.7,0,6.2
                            c8.3-3.3,13-8.8,15-16.8c0.5-2.1,0.6-4.3,1-6.4c0.7-4,3.1-6.4,7.2-6.6c4.1-0.2,6.8,1.8,7.9,5.7c0.3,1.2,0.5,2.4,0.6,3.6
                            c1.2,11.8,9.1,20.2,21,21.8c4.6,0.6,8.5,1.6,10.5,6.2C494,319.6,494,321.2,494,322.7z M414.6,388.4c-3.4,1.1-6.6,2.6-10.1,3.2
                            c-10.4,1.6-18.4,8.3-20.7,18c-0.6,2.4-0.7,4.9-1.2,7.3c-0.9,4-3.6,6.1-7.6,6.1c-3.8,0-6.4-2.1-7.4-5.8c-0.4-1.5-0.6-3-0.8-4.6
                            c-1.2-10-8-17.9-17.8-20.2c-2.2-0.5-4.6-0.6-6.9-1.1c-4-0.8-6.8-4-6.6-7.8c0.2-4,2.3-6.7,6.3-7.6c1.3-0.3,2.8-0.3,4.1-0.5
                            c10.2-1.3,18.3-8.6,20.5-18.3c0.5-2.4,0.5-4.9,1.1-7.3c1-3.8,3.6-5.7,7.5-5.7c3.8,0,6.4,2,7.4,5.8c0.4,1.3,0.6,2.7,0.7,4.1
                            c1.4,11.7,9.4,19.8,20.9,21.5c3.6,0.5,7,2.2,10.2,3.2c0-98,0-197.1,0-295.8c-8-2-13.5,0.5-19.2,6.2c-35.4,36-71.2,71.5-106.9,107.2
                            c-5.5,5.5-10.2,6.5-14,2.7c-3.8-3.8-3-8.2,2.8-13.9c32.7-32.7,65.4-65.4,98.2-98.1c1.2-1.2,2.3-2.5,4.2-4.5
                            c-7.3,0-13.3,0.2-19.3-0.1c-3.9-0.2-6.6,1-9.3,3.8c-21.2,21.4-42.6,42.7-64,64c-4.4,4.4-9.2,4.7-12.6,1.2
                            c-3.3-3.5-2.9-7.8,1.3-12.3c0.7-0.8,1.5-1.5,2.3-2.3c16.7-16.7,33.5-33.5,50.2-50.2c1.1-1.1,2.1-2.3,3.5-3.9
                            c-78.4,0-155.9,0-233.6,0c0,17.4,0,34.5,0,50.6c3.3-1.1,6.5-2.9,9.9-3.4c11.9-1.7,19.8-9.4,21.2-21.5c0.2-1.4,0.4-2.8,0.7-4.1
                            c1-3.8,3.8-5.7,7.5-5.7c3.7,0,6.4,2,7.4,5.8c0.4,1.5,0.6,3,0.8,4.6c1.2,10.1,8.4,18.3,18.1,20.5c2.4,0.5,4.9,0.6,7.3,1.1
                            c3.8,0.9,5.7,3.7,5.7,7.5c0,3.7-1.9,6.5-5.8,7.4c-1.5,0.4-3,0.6-4.6,0.8c-11.3,1.3-19.6,9.6-20.9,20.8c-0.2,1.7-0.4,3.4-0.9,5
                            c-1.1,3.5-3.8,5.3-7.3,5.3c-3.6,0-6.3-1.8-7.4-5.3c-0.6-1.9-0.7-3.9-1-5.9c-1.2-9.8-9.6-18.3-19.3-20c-4.1-0.7-8.1-2.3-11.8-3.4
                            c0,95.2,0,191.5,0,288.4c2,0,3.6,0,5.3,0c24.4,0,48.9-0.1,73.3,0.1c3.5,0,6-1,8.5-3.5c36.7-36.8,73.5-73.6,110.2-110.3
                            c1.3-1.3,2.6-2.7,4.2-3.7c3.2-2.1,6.6-1.8,9.4,0.8c2.9,2.7,3.5,6.2,1.4,9.7c-1,1.7-2.5,3.1-3.9,4.5c-32.7,32.7-65.4,65.4-98.1,98.2
                            c-1.1,1.1-2.2,2.3-4.1,4.3c7.6,0,13.9-0.2,20.2,0.1c3.3,0.1,5.7-0.9,8.1-3.3c20.9-21.1,42-42.1,63-63.1c1.3-1.3,2.7-2.6,4.2-3.6
                            c3.5-2.3,6.9-1.7,9.7,1.2c2.8,2.9,3,6.4,0.8,9.8c-0.9,1.4-2.2,2.6-3.4,3.8c-16.9,17-33.9,33.9-50.9,50.9c-1.1,1.1-2.1,2.3-3.6,3.9
                            c54.7,0,108.4,0,162.4,0C414.6,416.2,414.6,401.8,414.6,388.4z M137.5,131.3c-2.3,2.1-4.8,4.5-6.2,5.8c2.1,2.7,4.2,5.5,6,7.8
                            c2.6-2.5,5-4.8,7.1-6.9C142.1,135.8,139.7,133.5,137.5,131.3z M58.9,195.2c-2.7,2.1-5.5,4.2-7.4,5.6c2.4,2.7,4.7,5.2,6.8,7.6
                            c2.2-2.3,4.6-4.8,6.7-6.9C62.9,199.3,60.4,196.7,58.9,195.2z M454.1,327.1c2.6-2.5,5-4.8,6.9-6.6c-2.2-2.4-4.6-5-6.6-7.1
                            c-2.4,2.1-5,4.5-7.2,6.4C449.7,322.5,452,324.9,454.1,327.1z M368.8,383.1c2.1,2.6,4.2,5.3,5.9,7.4c2.8-2.5,5.3-4.7,7.1-6.3
                            c-2.4-2.5-4.7-5.1-7-7.5C372.8,378.9,370.5,381.3,368.8,383.1z" />
                        </g>
                    </svg>

                    {{ __('玻璃系列') }}
                </a>
            </div>
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/2" class="shrink-0 flex-col items-center text-center">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path
                                d="M493.9,311.1c-0.1-10-5.4-17.2-15.1-19.7c-2.6-0.7-3-1.8-3.2-3.9c-0.5-4.8-0.8-9.6-1.9-14.3
                            c-10.8-49.9-40.1-83.9-88.1-101.8c-2.8-1.1-3.8-2.3-3.7-5.2c0.2-7.8,0.1-15.6,0.1-23.5c-0.1-5.5-2.3-8.1-7.7-8.3
                            c-2.7-0.1-3.2-1-3.4-3.4c-0.5-5.3-1.2-10.6-2.4-15.8c-13.4-57.8-61.8-96.3-121.6-96.7c-34.7-0.2-69.4,0-104,0
                            c-8.5,0-17,0.7-25.3,2.4C58.3,33.3,18.1,82.6,18.1,143.2c-0.1,113,0,226,0,339c0,7.9,2.4,11.5,7.3,11.3c4.7-0.2,6.7-3.6,6.7-11.3
                            c0-112.5,0-225,0-337.5c0-8.7,0.6-17.3,2.5-25.8c11.6-51.5,54.6-86,107.9-86.4c34.8-0.2,69.7-0.1,104.5,0c9.9,0,19.6,1.2,29.2,3.7
                            C320,47.9,352,85,356.8,130.1c0.3,2.9,0.2,4.5-3.6,4.3c-7.8-0.3-15.7-0.2-23.5-0.1c-2.3,0-3.4-0.3-3.8-3.1
                            c-6-40.3-37.7-67.8-78.5-68c-35.2-0.2-70.4,0-105.5,0c-5.7,0-11.3,0.4-16.9,1.6c-37.2,8.3-62.1,39.2-62.2,77.5
                            c-0.1,55.9,0,111.8,0,167.7c0,57.9,0,115.8,0,173.7c0,6.2,2.4,9.6,6.8,9.7c4.6,0.1,7.2-3.4,7.2-9.9c0-4.3,0.2-8.7-0.1-13
                            c-0.2-2.9,0.9-3.6,3.7-3.6c8.5,0.2,17,0.2,25.5,0c3-0.1,3.7,1.1,3.6,3.8c-0.2,5-0.2,10,0,15c0.1,4.7,2.9,7.6,6.8,7.7
                            c3.9,0.1,7.1-2.9,7.1-7.5c0.1-26.6,0.1-53.2,0-79.9c0-4.7-2.9-7.5-7-7.4c-4.1,0-6.7,2.7-6.9,7.5c-0.2,4.5-0.3,9,0,13.5
                            c0.3,4-0.6,5.5-5,5.3c-7.6-0.4-15.3-0.4-23,0c-4,0.2-4.9-1-4.8-4.9c0.2-36.8,0.1-73.6,0.1-110.3c0-56.4-0.2-112.8,0.1-169.2
                            c0.1-34.7,28.2-62.9,62.8-63.2c36.3-0.3,72.7-0.1,109-0.1c9.5,0,18.5,2,27,6.1c19.7,9.6,31.6,25.4,35.9,46.8
                            c0.3,1.4,2.1,3.8-1.8,4.2c-6,0.6-7.7,2.8-7.8,8.8c-0.1,7.5-0.2,15,0.1,22.5c0.1,3.3-0.8,4.8-4.1,5.9c-17.3,6-32.9,15.1-46.4,27.6
                            c-25.2,23.5-39.7,52.5-42.9,86.9c-0.3,3-0.9,4.8-4.4,5.7c-8.8,2.3-14,9.4-14.1,18.9c-0.2,9.6-0.1,19.3,0,29
                            c0.1,6.1,2.5,8.5,8.5,8.5c95.5,0,191.1,0,286.6,0c6,0,8.5-2.5,8.5-8.5C494,330.1,494,320.6,493.9,311.1z M77,439.8
                            c0.1-1.5,1.9-1,2.9-1c8.8,0,17.6,0,26.5-0.1c2.4,0,3.1,0.7,3.2,3.1c0.6,11.2,0.7,11.2-10.5,11.2c-2,0-4,0-6,0c-4.3,0-8.7,0-13,0
                            c-1.1,0-2.9,0.6-3-0.8C76.7,448.1,76.8,444,77,439.8z M316.9,149.3c2.8-3.3,9.9-0.9,15.2-1c10.6-0.2,21.3,0,31.9-0.1
                            c2.8,0,4.3,0.2,4,3.6c-0.4,5.3,1.7,12.2-0.9,15.4c-2.7,3.3-9.9,0.8-15.2,1c-3.3,0.1-6.6,0-10,0c-7.5,0-15-0.1-22.4,0.1
                            c-2.9,0.1-3.7-0.9-3.5-3.6C316.3,159.4,314.3,152.5,316.9,149.3z M222.8,285.8c3.5-46.7,40.9-91.7,86.1-103.1
                            c1.6-0.4,3.3-0.5,4.9-0.5c16.2,0,32.4,0.4,48.5-0.2c10-0.3,19.1,1.8,27.9,6c41.7,19.7,65.4,52.4,71.1,98.2c0.5,4.1-0.9,4.6-4.4,4.5
                            c-38.3-0.1-76.7-0.1-115-0.1c-38.2,0-76.4-0.1-114.5,0.1C223.3,290.9,222.5,289.8,222.8,285.8z M474.4,334.2
                            c-44.2-0.2-88.3-0.1-132.5-0.1c-44.2,0-88.3-0.1-132.5,0.1c-4.5,0-5.7-1.2-5.4-5.5c0.4-5.5,0-11,0.1-16.5c0.1-5.7,1.7-7.5,7.5-7.5
                            c22.5,0,45,0,67.5,0c63.7,0,127.3,0,191,0c8.8,0,9.8,1,9.8,9.7c0,4.7-0.3,9.3,0.1,14C480.3,332.8,479.2,334.2,474.4,334.2z" />
                            <path class="st1" d="M242.8,368.9c-2.4,0.2-4.7,1.8-5.6,4.7c-1.5,4.7-2.9,9.5-4,14.3c-0.9,4.1,0.8,7.2,5,8.4c4,1.1,7-0.7,8.2-4.4
                            c1.7-4.8,3-9.8,4.1-14.8C251.5,372.7,247.9,368.8,242.8,368.9z" />
                            <path class="st1" d="M230.9,415.3c-3.6,0.3-5.9,2-6.8,5.2c-1.3,4.4-2.6,8.9-3.8,13.4c-1,4,1.1,7.7,4.6,8.8c3.7,1.1,7.4-0.7,8.7-4.6
                            c1.6-4.7,2.9-9.5,4-14.4C238.6,419.2,235.1,415.2,230.9,415.3z" />
                            <path class="st1" d="M472.9,466.8c-1-3.1-3.2-4.9-5.9-5.1c-5.1-0.1-8.7,3.9-7.7,8.2c1.1,5,2.4,9.9,4.2,14.7
                            c1.3,3.7,4.3,5.5,8.3,4.3c4.2-1.2,5.9-4.3,5-8.4C475.8,476,474.4,471.4,472.9,466.8z" />
                            <path class="st1" d="M451,388.2c-1-5-2.4-10-4.1-14.9c-1.3-3.8-4.6-5.4-8.4-4.2c-3.8,1.2-5.7,4.1-4.7,8.2c1.1,4.8,2.5,9.6,4,14.4
                            c0.9,3.1,3.3,4.4,6.2,4.8C448.3,396.7,451.9,392.8,451,388.2z" />
                            <path class="st1" d="M220,462.1c-3.4-1.4-7.5,0.6-8.7,4.5c-1.6,4.8-3,9.8-4.1,14.8c-0.9,4.1,2.6,8,7.3,8.1c2.9-0.3,5.4-2,6.4-5.4
                            c1.3-4.4,2.6-8.9,3.7-13.3C225.6,466.6,223.9,463.6,220,462.1z" />
                            <path class="st1" d="M410.8,471.7c-0.7-5-3.6-7.5-7.9-7.1c-4.2,0.4-6.3,3.4-5.9,9.9c0.4,3.2,0.9,7.6,1.6,12
                            c0.8,4.2,3.6,6.5,7.8,5.9c4.2-0.6,6.2-3.6,5.8-7.9C411.9,480.2,411.4,475.9,410.8,471.7z" />
                            <path class="st1" d="M293.7,369c-4.2-0.7-7.2,1.4-7.9,5.7c-0.8,4.7-1.4,9.5-1.9,14.3c-0.4,4.3,1.7,7,5.9,7.8c4,0.7,7.2-2,7.9-6.5
                            c0.7-4.4,1.1-8.9,1.7-14.3C299.7,372.8,298,369.7,293.7,369z" />
                            <path class="st1" d="M349,375.5c-0.3-4-2.7-6.5-6.7-6.6c-4.1-0.1-6.7,2.3-7.1,6.2c-0.4,5.1-0.4,10.3,0,15.4c0.3,3.9,2.8,6.4,7,6.3
                            c4.1-0.1,6.4-2.4,6.8-6.4c0.2-2.5,0-5,0-7.5C349,380.5,349.2,378,349,375.5z" />
                            <path class="st1" d="M394.4,396.8c4.3-0.9,6-3.8,5.6-9.7c-0.4-3-0.9-7.6-1.7-12.2c-0.7-4.2-3.4-6.5-7.7-6c-4.3,0.5-6.3,3.5-6,7.7
                            c0.4,4.6,0.9,9.3,1.6,13.9C387.1,395,390.5,397.6,394.4,396.8z" />
                            <path class="st1" d="M349,423.7c-0.3-4.1-2.8-6.5-6.8-6.6c-3.8-0.1-6.6,2.1-6.9,5.8c-0.5,5.4-0.5,11,0,16.4c0.3,3.7,3,5.9,6.9,5.8
                            c3.9-0.1,6.3-2.2,6.7-6c0.3-2.4,0.1-5,0.1-7.5c0,0,0,0,0,0C349,429,349.2,426.3,349,423.7z" />
                            <path class="st1" d="M349,471.8c-0.4-4.1-2.8-6.4-6.9-6.4c-4.1,0-6.7,2.4-6.9,6.4c-0.3,5-0.3,10,0,14.9c0.2,4.1,3.5,7.1,7.2,6.8
                            c3.9-0.4,6.4-2.6,6.7-6.7c0.2-2.5,0-5,0-7.5C349,476.7,349.2,474.2,349,471.8z" />
                            <path class="st1" d="M463.9,434.3c-1.1-4.8-2.5-9.6-4-14.4c-1-2.9-3.4-4.4-6.7-4.6c-4,0-7.5,3.8-6.7,7.9c1.1,5,2.5,10,4.1,14.9
                            c1.3,3.9,5.1,5.8,8.8,4.5C463.1,441.2,464.8,438.2,463.9,434.3z" />
                            <path class="st1"
                                d="M400.3,444.6c4-0.6,6.1-3.3,5.9-7.4c-0.3-4.3-0.8-8.6-1.4-12.9c-0.7-5.4-3.6-8.1-7.9-7.6
                            c-4.3,0.4-6.4,3.5-5.8,10.9c0.4,2.7,0.8,7.1,1.7,11.5C393.5,443.2,396.4,445.2,400.3,444.6z" />
                            <path class="st1" d="M281.2,464.6c-4.1-0.4-7,1.9-7.8,6.6c-0.7,4.2-1.1,8.6-1.5,12.1c-0.3,5.7,2.1,9,6.3,9.3c3.8,0.3,6.9-2.4,7.6-7
                            c0.6-4.3,1.1-8.6,1.5-12.8C287.6,468,285.2,465,281.2,464.6z" />
                            <path class="st1" d="M287.4,416.8c-4.3-0.5-7,1.7-7.7,5.9c-0.7,4.4-1.2,8.9-1.7,12.2c-0.3,6.2,1.9,9.3,6.1,9.7
                            c4.1,0.4,7.1-2.4,7.8-7.3c0.6-4.3,1.2-8.6,1.5-12.9C293.7,420.3,291.8,417.4,287.4,416.8z" />
                        </g>
                    </svg>


                    {{ __('淋浴設備') }}
                </a>
            </div>
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/3" class="shrink-0 flex-col items-center text-center">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path d="M308.4,216.6c0-7.4,0-14.2,0-21c0-13.5-0.1-27.1,0-40.6c0.2-16.9,13.9-30.2,30.7-30.1c16.5,0.1,30,13.3,30.4,30
                            c0.1,5.1,0,10.1,0,15.5c-5.1,0-9.9,0-15.3,0c0-4.8,0.1-9.5,0-14.2c-0.1-9.2-6.7-16.1-15.4-16c-8.5,0.1-15.1,6.8-15.1,15.8
                            c-0.1,20,0,40,0,60.3c5.1,0,9.8,0,15,0c0-4.7,0-9.5,0-14.7c5.3,0,10.2,0,15.4,0c0,4.8,0,9.5,0,14.9c2,0,3.7,0,5.4,0
                            c33.1,0,66.2,0,99.3,0c12,0,17.9,5.8,17.7,17.9c-0.2,12.8,1.2,25.8-2.5,38.4c-6.2,21.1-19.4,36.1-39.5,45c-2.3,1-3.9,1.8-3.9,5
                            c0.1,37.7,0.1,75.4,0.1,113.1c0,0.8,0.1,1.6,0.2,2.6c11.5,2.2,18.6,9.7,23.8,19.5c2.8,5.2,5.8,10.2,9.2,15.1c1,1.5,3.3,2.8,5.1,2.9
                            c4.9,0.4,9.8,0.1,14.9,0.1c0,5.1,0,9.8,0,14.9c-155,0-310,0-465.4,0c0-4.7,0-9.5,0-14.7c9.5,0,19,0,29.3,0c0-2,0-3.7,0-5.3
                            c0-40.3,0.5-80.5-0.3-120.8c-0.2-12.4-3.7-24.8-6-37.1c-7.6-41.4-15.4-82.8-23.1-124.2c-1.8-9.8,5.1-18.1,15.1-18.3
                            c7.2-0.2,14.3-0.1,21.5,0c9.8,0,15.5,4.6,17.3,14.3c4.6,24.5,9.1,49.1,13.6,73.6c4.8,26.1,9.7,52.2,14.5,78.3
                            c0.1,0.5,0.3,0.9,0.8,1.9c1.6,0,3.5,0,5.3,0c38.3,0,76.7,0,115,0c17.1,0,26.6,10.1,25.6,27.1c-1.8,31-26.9,57-58,59.9
                            c-10,0.9-19.9,1.5-30.5,2.2c3.5,16.1,7,31.8,10.7,48.3c1.5,0,3,0,4.5,0c31.8,0,63.6,0,95.5,0.1c3.1,0,4.9-0.9,6.4-3.6
                            c3.2-5.8,6.9-11.4,10.2-17.2c4.9-8.8,12-14.6,22.5-17c0-1.5,0-3.1,0-4.6c0-36.6,0-73.2,0.1-109.8c0-3.2-0.8-4.9-4-6.4
                            c-26.6-12.3-40.6-33.1-41.9-62.4c-0.3-7.6-0.1-15.3,0-22.9c0.1-9.4,6.5-15.8,16-15.8C288.3,216.6,298,216.6,308.4,216.6z
                            M277.9,232.1c0,8.3-0.1,16.1,0,23.8c0.6,28.5,23.6,51.9,52.1,52.3c26.4,0.4,52.8,0.2,79.2,0c12.7-0.1,23.8-4.7,33.5-13
                            c20-17,19.6-39.8,18.1-63.1C399.9,232.1,339.2,232.1,277.9,232.1z M323.9,437.8c30.7,0,61,0,91.2,0c0-38.3,0-76.2,0-114.1
                            c-30.6,0-60.8,0-91.2,0C323.9,361.9,323.9,399.7,323.9,437.8z M63.2,476.1c30.3,0,60.3,0,90.5,0c-3.6-15.9-7-31.5-10.5-47.1
                            c-8.7,0.5-16.8,1-25.3,1.5c-0.3-5.2-0.5-10.1-0.7-14.9c1.2-0.2,1.9-0.3,2.5-0.3c20.5-1.3,40.9-2.8,61.4-3.8
                            c17.4-0.8,31.8-7.1,42.1-21.5c1-1.5,1.9-3.1,2.9-4.8c-54.7,0-108.7,0-162.8,0C63.2,415.5,63.2,445.5,63.2,476.1z M85.3,338.7
                            C75.8,287.6,66.4,237.1,57,186.3c-7.9,0-15.4,0-23.3,0C43,237.3,52.4,288,61.7,338.7C69.7,338.7,77.1,338.7,85.3,338.7z
                            M447.7,476.3c-3.9-6.2-7-11.9-10.7-17.2c-2.8-4-7.2-5.6-12.1-5.6c-36.9,0-73.8-0.1-110.7,0.1c-3.3,0-7.6,1.1-9.5,3.3
                            c-5,5.7-8.9,12.3-13.7,19.4C343.9,476.3,395.2,476.3,447.7,476.3z M63.2,369.2c56.2,0,112,0,167.7,0c3.5-10.6-1-15.3-10.4-15.2
                            c-50.6,0.3-101.1,0.2-151.7,0.2c-1.8,0-3.7,0-5.6,0C63.2,359.5,63.2,364.1,63.2,369.2z" />
                            <path
                                d="M384.8,170.8c0-4.8,0-8.9,0-13.1c0-0.6,0.2-1.2,0.3-2.1c30.4,0,60.5,0,91,0c0-40.8,0-81.3,0-122c-71,0-141.9,0-213.2,0
                            c0,40.4,0,80.8,0,121.8c9.8,0,19.7,0,29.9,0c0,5.2,0,9.9,0,15c-0.9,0.1-2,0.4-3,0.4c-9.1,0-18.1,0.1-27.2,0
                            c-8.7-0.1-15.3-6.5-15.3-15.1c-0.1-40.9-0.1-81.8,0-122.7c0-8.6,6.7-14.8,15.4-14.9c12.4-0.1,24.8,0,37.2,0c57.9,0,115.9,0,173.8,0
                            c12.1,0,17.9,5.8,17.9,17.8c0,39.1,0,78.3,0,117.4c0,11.7-5.9,17.6-17.7,17.6c-28,0-56,0-84,0C388.5,170.8,387,170.8,384.8,170.8z" />
                            <path d="M216.8,232c5.4,0,10.1,0,15,0c0,5.1,0,9.8,0,15c-4.8,0-9.6,0-15,0c0,4.6,0,8.6,0,12.7c0,10.9-4.1,16-15.3,18.3
                            c0,4.6,0,9.3,0,14c-0.1,9.8-6.4,16.1-16.1,16.2c-9.7,0.1-19.4,0.1-29.1,0c-9.5-0.1-15.7-6.5-15.9-16c-0.1-4.6,0-9.2,0-13.9
                            c-2.6-0.9-5.3-1.5-7.5-2.8c-5-2.9-7.7-7.4-7.8-13.3c0-4.9,0-9.8,0-15c-5.2,0-9.9,0-14.9,0c0-5.2,0-10,0-15.3c4.8,0,9.6,0,14.9,0
                            c0-5.2-0.1-10,0-14.7c0.1-9.5,6.5-15.9,15.9-15.9c20-0.1,40.1-0.1,60.1,0c9.2,0,15.5,6.5,15.6,15.7
                            C216.8,221.8,216.8,226.6,216.8,232z M140.6,262.1c20.5,0,40.6,0,60.5,0c0-15.3,0-30.3,0-45.2c-20.4,0-40.3,0-60.5,0
                            C140.6,232,140.6,246.9,140.6,262.1z M185.9,292.8c0-5.1,0-9.9,0-14.7c-10.2,0-20.1,0-29.9,0c0,5.1,0,10,0,14.7
                            C166.2,292.8,176,292.8,185.9,292.8z" />
                            <path d="M334.7,61c2.9-2.9,6.3-6.2,9.3-9.2c20.1,20.1,40.3,40.3,60.7,60.7c-3.1,2.9-6.5,6.2-9.5,9C375.3,101.5,355.1,81.3,334.7,61
                            z" />
                            <path d="M397.8,51.6c12.5,12.5,24.9,25,37.6,37.7c-3.3,3.1-6.9,6.4-10.1,9.4c-12.2-12.2-24.8-24.8-37.5-37.5
                            C390.9,58.2,394.3,54.9,397.8,51.6z" />
                            <path d="M335.4,104.9c-2.8,2.9-6.2,6.2-9.2,9.3c-7.4-7.4-14.9-14.9-22.5-22.5c3.1-2.9,6.5-6.2,9.4-9
                            C320.5,89.9,327.9,97.4,335.4,104.9z" />
                        </g>
                    </svg>

                    {{ __('衛浴設備') }}
                </a>
            </div>
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/4" class="shrink-0 flex-col items-center text-center">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path
                                d="M255.6,442.8c-69.6,0-139.1,0-208.7,0c-18.8,0-28.9-10.1-28.9-28.8c0-11.5,0.2-23-0.1-34.5c-0.3-12,4.8-20.4,15.2-26.4
                            c64.4-37.3,128.8-74.7,193.1-112.2c1.6-1,3.6-2.5,4-4.2c1-3.3-0.1-5.5-4.1-6.9c-32.7-11.4-54.9-42.5-55.2-76.9
                            c-0.3-40.5,32.2-77.9,72.4-83c41.5-5.4,79.3,17.2,93,55.4c5.2,14.5-0.7,28.6-14.2,33.7c-13.6,5.1-27.8-1.6-33.5-15.9
                            c-10.2-25.4-40.3-32.2-58-12.9c-8.5,9.4-11.4,20.4-6.8,32.4c4.9,12.8,14.5,20.1,28.1,22.1c3,0.4,6,0.3,9,0.7
                            c11.8,1.7,20.1,10.9,20.3,22.9c0.2,8.1,0.3,16.3,0,24.4c-0.2,4.2,1.1,6.5,4.9,8.7c63.8,36.9,127.5,74.1,191.4,110.9
                            c11.3,6.5,16.9,15.4,16.4,28.5c-0.4,11.7,0,23.4-0.1,35c-0.1,16.3-10.7,27-27,27C396.5,442.9,326,442.8,255.6,442.8z M255.5,425.9
                            c69.7,0,139.5,0,209.2,0c9.7,0,12.1-2.5,12.1-12.3c0-11-0.3-22,0.1-32.9c0.2-6.5-2.4-10.3-7.9-13.5
                            c-66-38.1-131.8-76.5-197.8-114.7c-4.8-2.8-7.2-6.2-7-11.9c0.3-7.8,0-15.6,0.1-23.4c0.2-13.6,0.5-14.5-14-15.4
                            c-20.1-1.4-38.2-17-43.8-37.1c-5.3-18.8,2.3-40.2,18.6-52.2c27.7-20.4,65.9-9,78.8,23.6c2.6,6.5,6.8,9.1,12.1,7.1
                            c4.9-1.8,6.2-6.2,3.7-12.9c-11.3-30.6-42.5-48.4-75.6-43.2c-42.1,6.7-67.7,52.3-50.9,91c8.5,19.5,23.3,32.1,43.9,37.7
                            c8.6,2.4,10,4.1,10,12.9c0,3.5-0.3,7.1,0.1,10.6c0.7,6.8-2.4,10.6-8.1,13.9c-65.7,38-131.2,76.2-196.9,114.1
                            c-5.4,3.1-7.9,6.8-7.7,13.1c0.4,11,0.1,21.9,0.1,32.9c0,10.2,2.3,12.6,12.4,12.6C116.8,425.9,186.2,425.9,255.5,425.9z" />
                            <path d="M256,409.7c-63.7,0-127.4,0-191.1,0c-10.5,0-12.9-2.3-12.9-12.7c0.1-18-2-15,14.3-24.6c57.5-33.7,114.9-67.6,172.6-100.9
                            c10.7-6.2,23.4-6.2,34-0.1c60.2,34.7,120,70.1,180,105.1c5,2.9,7.6,6.5,7.1,12.4c-0.3,3.9,0,7.8-0.1,11.7c-0.2,5.4-3.2,8.5-8.5,9
                            c-1.8,0.2-3.5,0.1-5.3,0.1C382.7,409.7,319.3,409.7,256,409.7z M442.4,392.5c0.2-0.4,0.5-0.8,0.7-1.3c-1.2-0.9-2.2-1.9-3.5-2.6
                            c-57.8-33.9-115.6-67.9-173.5-101.6c-6.2-3.6-13.8-3.7-19.9-0.2c-58.3,33.8-116.4,67.9-174.5,102c-1.1,0.7-2,1.8-4,3.6
                            C193.8,392.5,318.1,392.5,442.4,392.5z" />
                        </g>
                    </svg>

                    {{ __('曬衣架') }}
                </a>
            </div>
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/5" class="shrink-0 flex-col items-center text-center">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 26.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path d="M43.5,468.5c0-141.5,0-283.2,0-425c141.6,0,283.2,0,425,0c0,141.6,0,283.2,0,425C326.9,468.5,185.2,468.5,43.5,468.5z
                            M196.3,179.3c85.5,0,170.5,0,255.4,0c0-39.9,0-79.5,0-119.1c-130.6,0-260.9,0-391.3,0c0,85.2,0,170.3,0,255.3
                            c39.9,0,79.5,0,119.3,0c0-1.8,0-3.3,0-4.8c0-60.2,0-120.4,0-180.6c0-1.5-0.1-3.1,0.1-4.6c0.5-4.2,4.1-7.3,8.2-7.3
                            c4.1,0,7.7,3.1,8.2,7.3c0.2,1.4,0.1,2.8,0.1,4.1C196.3,146.1,196.3,162.6,196.3,179.3z M332.7,196.4c0,85.3,0,170.4,0,255.3
                            c39.9,0,79.5,0,119.1,0c0-85.3,0-170.2,0-255.3C412.1,196.4,372.6,196.4,332.7,196.4z M60.3,451.8c85.3,0,170.3,0,255.2,0
                            c0-39.9,0-79.5,0-119.1c-85.2,0-170.1,0-255.2,0C60.3,372.4,60.3,411.9,60.3,451.8z M196.5,315.6c39.9,0,79.5,0,119.1,0
                            c0-39.9,0-79.5,0-119.1c-39.8,0-79.4,0-119.1,0C196.5,236.2,196.5,275.7,196.5,315.6z" />
                            <path
                                d="M187.9,97.4c-4.6-0.1-8.3-4-8.2-8.6c0.2-4.4,3.9-8,8.4-8c4.6,0.1,8.4,4,8.2,8.6C196.1,93.8,192.3,97.4,187.9,97.4z" />
                        </g>
                    </svg>

                    {{ __('隔音地板') }}
                </a>
            </div>
            <div class="text-2xl tracking-wider text-center font-semibold p-6 hover:fill-side-bg hover:text-side-bg">
                <a href="/product/6" class="shrink-0 flex-col items-center text-center">
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class=" h-28 hover:fill-side-bg mb-2"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path
                                d="M463.6,203.4c-1.9,6.6-3,13.5-5.8,19.6c-12.6,26.9-34.3,40.5-63.7,40.6c-111.5,0.2-223.1,0.1-334.6,0.1
                            c-1.5,0-3-0.1-4.4-0.3c-3.8-0.7-6.6-4.2-6.7-8.1c0-3.7,2.6-7.3,6.2-8c2.2-0.5,4.6-0.6,6.8-0.6c109.9,0,219.8,0,329.7,0
                            c11.1,0,21.7-1.7,31.4-7.6c19.6-12,28.6-36.1,21.7-58.2c-7.1-22.4-28.3-36.7-52.4-35.1c-22,1.5-41.2,18.9-45.1,41.1
                            c-0.6,3.2-0.6,6.5-1.1,9.6c-0.9,5.4-4.2,8.1-9.1,7.8c-4.7-0.4-7.8-3.8-7.6-9.2c0.9-26.8,13.1-47,36.9-59
                            c41.8-21.2,89.9,4.3,97.2,50.8c0.1,0.6,0.5,1.2,0.7,1.8C463.6,193.7,463.6,198.5,463.6,203.4z" />
                            <path d="M195,307.8c42.8,0,85.7,0,128.5,0c26.8,0,47.5,11.3,61.1,34.4c23.8,40.5-2.9,93.9-49.6,99.7c-40.3,5.1-76.2-25.4-76.6-65.1
                            c-0.1-7.3,5.2-11.8,11.3-9.6c4.5,1.6,5.5,5.4,5.8,9.7c0.8,16.2,7.8,29.3,20.9,38.9c17.1,12.6,40.7,12.8,58.1,0.7
                            c18-12.6,25.9-34.8,19.8-55.8c-5.9-20.2-24.5-34.9-45.7-35.9c-2.4-0.1-4.9-0.2-7.3-0.2c-86.6,0-173.3,0-259.9,0
                            c-2.1,0-4.3-0.1-6.4-0.5c-3.9-0.8-6.6-4.3-6.5-8.2c0.1-4,3.1-7.5,7.1-8.1c1.9-0.3,3.8-0.3,5.7-0.3
                            C105.8,307.8,150.4,307.8,195,307.8z" />
                            <path d="M141.8,187.7c24.9,0,49.7,0,74.6,0c13.3,0,25.7-2.7,36.4-11.2c17.6-14,23.9-38.6,14.9-59.3c-8.8-20.3-30.6-33.1-51.6-30.3
                            c-23.9,3.2-41.7,20.5-44.7,43.5c-0.3,2.1-0.4,4.3-0.6,6.5c-0.5,5.3-4.1,8.9-8.8,8.6c-4.7-0.2-8.2-4-8.1-9.4c0.2-9.3,2-18.2,6-26.7
                            c12.4-26.6,39.7-42.6,67.5-39.6c30,3.2,53.1,23.6,59.9,52.9c8.5,36.5-17.2,75-54.2,80.7c-5.7,0.9-11.5,1.3-17.3,1.4
                            c-51.6,0.1-103.2,0.1-154.9,0c-2,0-4.1-0.1-6-0.5c-3.9-0.8-6.6-4.3-6.5-8.2c0.1-4,3.1-7.5,7.1-8.1c1.7-0.3,3.5-0.3,5.3-0.3
                            C87.8,187.7,114.8,187.7,141.8,187.7z" />
                        </g>
                    </svg>
                    {{ __('V A F') }}
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="text-center mt-12 text-4xl text-dot font-black tracking-widest">
            最 新 消 息
        </div>
        <div class="flex flex-wrap justify-center py-6 tracking-wider">

            @foreach ($news as $new)
                <div class="py-4 px-4 flex-col w-80">
                    <a class=" underline-offset-4 underline" href="{{ route('news', $new->id) }}"><img
                            src="{{ $new->photo_path ? '/storage/' . str_replace('public/', '', $new->photo_path) : '' }}"
                            class="block h-60 w-max">
                    </a>
                    <div class="text-2xl font-semibold py-2 mt-2">
                        {{ $new->title }}
                    </div>
                    <div class="py-2 h-24">
                        {{ Str::limit($new->description, $limit = 82, $end = '...') }}
                    </div>
                    <div class="py-2 block w-auto text-right">
                        <a class=" underline-offset-4 underline" href="{{ route('news', $new->id) }}">Read more</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <div class="bg-contact-us-banner bg-no-repeat bg-left-top h-96 text-center">
        <div class="text-5xl pt-24 font-bold tracking-widest">
            D I Y小學堂
        </div>

        <div class="justify-items-center grid">
            <div class="p-3 rounded-md bg-dot text-white text-3xl mt-10 w-56">
                <a href="{{ route('customer_diy') }}">
                    點 我 進 入
                </a>
            </div>
        </div>



    </div>

</x-app-layout>

<script>
    /* Carousel */
    const carouselItems = [{
            position: 0,
            el: document.getElementById('carousel-item-1')
        },
        {
            position: 1,
            el: document.getElementById('carousel-item-2')
        },
        {
            position: 2,
            el: document.getElementById('carousel-item-3')
        },
    ];

    const carouselOptions = {
        activeItemPosition: 1,
        interval: 5000,

        indicators: {
            activeClasses: 'bg-white dark:bg-gray-800',
            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
            items: [{
                    position: 0,
                    el: document.getElementById('carousel-indicator-1')
                },
                {
                    position: 1,
                    el: document.getElementById('carousel-indicator-2')
                },
                {
                    position: 2,
                    el: document.getElementById('carousel-indicator-3')
                },
            ]
        },
    };
    const carousel = new Carousel(carouselItems, carouselOptions);
    carousel.cycle();
</script>
