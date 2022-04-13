@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Create Problem</h2>
                <a href="{{ route('problem.index') }}" class="btn-shadow">Back</a>
            </div>
            <div class="p-6">
                <form action="{{ route('problem.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="name" class="formLabel">Name</label>
                            <input type="text" name="name" class="formInput" value="{{ old('name') }}">

                            @error('name')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="email" class="formLabel">visiblity</label>
                            <select name="visiblity" id="visiblity" class="formInput">
                                <option value="none" {{ old('visiblity') == 'none' ? 'selected' : '' }}>Select Visiblity</option>
                                <option value="public" {{ old('visiblity') == 'public' ? 'selected' : '' }}>Public</option>
                                <option value="private" {{ old('visiblity') == 'private' ? 'selected' : '' }}>Private</option>
                            </select>

                            @error('email')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 mr-4">
                            <label for="category" class="formLabel">category</label>
                            <input type="tel" name="category" class="formInput" value="{{ old('category') }}">

                            @error('category')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 mr-4">
                            <label for="tags" class="formLabel">tags</label>
                            <input type="tel" name="tags" class="formInput" value="{{ old('tags') }}">

                            @error('tags')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1">
                            <label for="description" class="formLabel">Description</label>

                            <textarea name="description" id="description" class="formInput" rows="10">{{ old('description') }}</textarea>

                            @error('description')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror

                            @error('status')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1 mx-5">
                            <label for="media_image" class="formLabel">Media</label>
                            <label for="media_image" class="formLabel border-2 rounded-md border-dashed border-emerald-700 py-4 text-center">Click
                                to upload image</label>
                            <input type="file" name="media_image" id="media_image" class="formInput hidden">

                            @error('media_image')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
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
