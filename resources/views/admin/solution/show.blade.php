@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="card-header flex justify-between items-center">
                <h1 class="h4">Problem Details <a href="http://solutiondairy.test/dashboard/problem" class="btn-shadow d-inline-block ml-3">Add Solution</a></h1>
                <a href="http://solutiondairy.test/dashboard/problem" class="btn-shadow">Back</a>
            </div>
            <!-- end header -->

            <!-- problem info -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-2 p-6 pt-0">

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-calendar"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Published On</h1>
                            <p class="text-xs capitalize">{{ $problem->created_at->format('d M, Y') }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-user"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Publishe By</h1>
                            <p class="text-xs capitalize">{{ Auth::user()->name }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold capitalize">Visiblity</h1>
                            <p class="text-xs capitalize">{{ $problem->visibility }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="card-body flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-list-alt "></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold">Category</h1>
                            <p class="text-xs">{{ $problem->category->name }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end problem info -->

            <!-- problem info -->
            <div class="grid grid-cols-1 gap-6 xl:grid-cols-2 p-6 pt-0">
                <!-- card -->
                <div class="card mb-6 xl:mt-1">
                    <div class="p-6 flex items-center">
                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-tags"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Tags</h1>
                            <div class="space-x-2">
                                @foreach ($problem->tags as $tag)
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200" href="#">{{ $tag->name }}</a>
                                @endforeach
                            </div>
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
                        <h3 class="text-2xl font-bold">{{ $problem->name }}</h3>
                    </div>
                    <!-- end problem name -->


                    <div class="mt-10 mb-10 items-center">
                        <h4 class="text-lg font-bold mb-3">Description</h4>
                        {!! $problem->description !!}
                    </div>
                </div>

                <div class="">
                    <div class="problem-screenshort problem-gallery">
                        {{-- {{ $problem->media }} --}}
                        @foreach ($problem->media as $pmedia)
                            <a href="{{ $pmedia->name }}">
                                <img src="{{ $pmedia->name }}" class="m-1" alt="">
                            </a>
                        @endforeach
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
                <h1 class="h6">Solution # </h1>
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
                    <div class="problem-screenshort problem-gallery">
                        <a href="https://picsum.photos/1024?random={{ rand(1,1000) }}">
                            <img src="https://picsum.photos/150?random={{ rand(1,1000) }}" class="m-1" alt="">
                        </a>
                        <a href="https://picsum.photos/1024?random={{ rand(1,1000) }}">
                            <img src="https://picsum.photos/150?random={{ rand(1,1000) }}" class="m-1" alt="">
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.problem-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
