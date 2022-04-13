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

            <!-- problem info -->
            <div class="grid grid-cols-5 gap-6 xl:grid-cols-2 p-6 pt-0">

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                            <i class="fad fa-blog"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">User</h1>
                            <p class="text-xs capitalize">Shanto</p>
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

                    <!-- problem name -->
                    <div class="name pb-0">
                        <h3 class="h3">Problem Name</h3>
                    </div>
                    <!-- end problem name -->


                    <div class="mt-10 mb-10 items-center">
                        <h4 class="h4">Description</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>

                    <div class="category my-4">
                        <h4>Categories</h4>
                        <hr class="my-4">
                        <a href="" class="btn-shadow inline-block capitalize">Comparison</a>
                    </div>

                    <div class="tags my-4">
                        <h4>Tags</h4>
                        <hr class="my-4">
                        <a href="" class="btn-shadow inline-block capitalize">last</a>
                        <a href="" class="btn-shadow inline-block capitalize">month</a>
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
            <div class="card-header flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
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
        <div class="card">
            <!-- header -->
            <div class="card-header flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
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
        <div class="card">
            <!-- header -->
            <div class="card-header flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
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
        <div class="card">
            <!-- header -->
            <div class="card-header flex flex-row justify-between accordion">
                <h1 class="h6">Problem Solution # </h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                <div class="p-6">
                    <div class="mb-10 items-center">
                        <h4 class="h4">Solution</h4>
                        <p class="text-black">Amore sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                    </div>
                </div>

                <div class="pt-6 ">
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
