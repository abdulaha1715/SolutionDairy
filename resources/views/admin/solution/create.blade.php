@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Create Problem</h2>
                <a href="{{ URL::previous() }}" class="btn-shadow">Back</a>
            </div>
            <div class="p-6">
                <form action="{{ route('solution.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-6 flex">
                        <div class="flex-1">
                            <label for="problem_id" class="formLabel">Solution For</label>
                            <select name="problem_id" id="problem_id" class="formInput">
                                <option value="none">Select Solution</option>
                                @foreach ($problems as $problem)
                                    <option class="py-1" value="{{ $problem->id }}" {{ request('problem_id') == $problem->id ? 'selected' : '' }}>{{ $problem->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="mt-6 flex">
                        <div class="flex-1">
                            <label for="solution" class="formLabel">Solution</label>

                            <textarea name="solution" id="solution" class="formInput"></textarea>
                            @error('solution')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-6">
                        <div class="flex-1 ml-1 mr-1">
                            <label for="thumbnail" class="formLabel">Thumbnails</label>
                            <input type="file" name="thumbnails[]" multiple id="thumbnail" class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">
                            @error('thumbnail')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="upload_image_preview flex"></div>

                    <div class="mb-6">
                        <button type="submit"
                            class="px-10 py-2 bg-teal-600 text-white rounded mt-3 uppercase text-base">Create</button>
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
            CKEDITOR.replace("solution");
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
                $('div.upload_image_preview').html('');
                imagesPreview(this, 'div.upload_image_preview');
            });
        });
    </script>
@endsection
