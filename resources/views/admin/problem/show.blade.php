@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="card-header flex justify-between items-center">
                <h1 class="h4">Problem Details </h1>
                <a href="http://solutiondairy.test/dashboard/problem" class="btn-shadow">Back</a>
            </div>
            <!-- end header -->

            <!-- problem name -->
            <div class="name p-6 pb-0">
                <h3 class="h3">Problem Name</h3>
            </div>
            <!-- end problem name -->

            <!-- problem info -->
            <div class="grid grid-cols-5 gap-6 xl:grid-cols-2 p-6 pt-0">

                <!-- card -->
                <div class="card mt-6">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                            <i class="fad fa-wallet"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Category</h1>
                            <p class="text-xs capitalize">payments</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2  bg-green-600 text-white mr-3">
                            <i class="fad fa-tags"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Tags</h1>
                            <p class="text-xs capitalize">items, rounded, text</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                            <i class="fad fa-blog"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Visiblity</h1>
                            <p class="text-xs capitalize">Public</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                            <i class="fad fa-comments"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold">Date</h1>
                            <p class="text-xs">Apr 14, 2022</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

            </div>
            <!-- end problem info -->

            <!-- body -->
            <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
                <div class="p-0">
                    <p class="text-black font-medium capitalize">Categories: Comparison</p>
                    <p class="text-black text-sm capitalize">Tags: last, month</p>


                    <div class="mt-20 mb-10 items-center">
                        <h4 class="h4">Description</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="card-header flex flex-row justify-between">
                <h1 class="h6">Problem Solution </h1>

                <div class="flex flex-row justify-center items-center">
                    <a href="">
                        <i class="fad fa-chevron-double-down mr-6"></i>
                    </a>

                    <a href="">
                        <i class="fad fa-ellipsis-v"></i>
                    </a>
                </div>
            </div>
            <!-- end header -->


            <!-- body -->
            <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
                <div class="p-0">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="">
                    <div class="problem-screenshort ">
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/800/800" data-fancybox="gallery" data-caption="Optional caption">
                            <img src="https://picsum.photos/800/800" class="m-1" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->
    </div>
    <!-- End General Report -->

@endsection
