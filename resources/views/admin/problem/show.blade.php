@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="card-header flex flex-row justify-between">
                <h1 class="h6">Problem Details </h1>

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
                <div class="p-8">
                    <h3 class="h3">Problem Name</h3>
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
                <div class="p-8">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="">
                    <div class="problem-screenshort ">
                        <img src="https://picsum.photos/400/400" class="m-1" alt="">
                        <img src="https://picsum.photos/400/400" class="m-1" alt="">
                        <img src="https://picsum.photos/400/400" class="m-1" alt="">
                        <img src="https://picsum.photos/400/400" class="m-1" alt="">
                        <img src="https://picsum.photos/400/400" class="m-1" alt="">
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->
    </div>
    <!-- End General Report -->

@endsection
