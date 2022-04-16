@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Create Category</h2>
                <a href="{{ route('category.index') }}" class="btn-shadow">Back</a>
            </div>
            <div class="p-6">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <div class="flex mt-6">

                        <div class="flex-1 mr-4">
                            <label for="name" class="formLabel">Category</label>
                            <input type="tel" name="name" class="formInput" value="{{ old('name') }}">

                            @error('name')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 mr-4">
                            <label for="tags" class="formLabel">Slug</label>
                            <input type="tel" name="" class="formInput" value="">
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Create</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection
