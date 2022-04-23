@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Edit Problem</h2>
                <a href="{{ route('problem.index') }}" class="btn-shadow">Back</a>
            </div>
            <div class="p-6">
                <form action="{{ route('problem.update', $problem) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="name" class="formLabel">Name</label>
                            <input type="text" name="name" class="formInput" value="{{ $problem->name }}">

                            @error('name')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="category_id" class="formLabel">category</label>
                            <select name="category_id" id="category_id" class="formInput">
                                <option value="none">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $problem->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 mr-4">
                            <label for="visibility" class="formLabel">visibility</label>
                            <select name="visibility" id="visibility" class="formInput">
                                <option value="none">Select Visiblity</option>
                                <option value="public" {{ $problem->visibility == 'public' ? 'selected' : '' }}>Public</option>
                                <option value="private" {{ $problem->visibility == 'private' ? 'selected' : '' }}>Private</option>
                            </select>

                            @error('visibility')
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

                    <div class="mt-6 flex">
                        <div class="flex-1">
                            <label for="tags" class="formLabel">Tags</label>

                            @foreach ($tags as $tag)
                                <input type="checkbox" id="{{ $tag->slug }}" name="tags[]" @foreach ($problem->tags as $ptag)
                                    @if ($tag->id == $ptag->id)
                                        checked
                                    @endif
                                @endforeach
                                value="{{ $tag->id }}">
                                <label for="{{ $tag->slug }}" class="mr-2 cursor-pointer"> {{ $tag->name }}</label>
                            @endforeach

                            @error('tags')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1">
                            <label for="thumbnail" class="formLabel">Thumbnails</label>
                            <input type="file" name="thumbnail[]" multiple id="thumbnail" class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">

                            @error('media_image')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="upload_image_preview flex"></div>

                    <div class="mt-6">
                        <button type="submit" class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">update</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function($){
            CKEDITOR.replace("description");
        });

        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#thumbnail').on('change', function() {
                imagesPreview(this, 'div.upload_image_preview');
            });
        });
    </script>
@endsection
