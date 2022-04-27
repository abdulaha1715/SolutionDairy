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
                            <label for="category_id" class="formLabel">category</label>
                            <select name="category_id" id="category_id" class="formInput">
                                <option value="none">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Public</option>
                                <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Private</option>
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
                            <label for="tags" class="formLabel">
                                Tags
                                <a href="#add_new_tag_dialog" class="popup-with-move-anim text-teal-600 text-sm ml-5">Add New Tag</a>
                            </label>

                            <div class="tag_list">
                                @foreach ($tags as $tag)
                                    <input type="checkbox" id="{{ $tag->slug }}" name="tags[]" value="{{ $tag->id }}">
                                    <label for="{{ $tag->slug }}" class="mr-2 cursor-pointer"> {{ $tag->name }}</label>
                                @endforeach
                            </div>

                            @error('tags')
                                <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1">
                            <label for="thumbnail" class="formLabel">Thumbnails</label>
                            <input type="file" name="thumbnails[]" multiple id="thumbnail" class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">

                            @error('media_image')
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="upload_image_preview flex"></div>

                    <div class="mt-6">
                        <button type="submit" class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Create</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

    <!-- Start Tag create dialog box -->
    <div id="add_new_tag_dialog" class="zoom-anim-dialog mfp-hide">
        <h1>Add New Tag</h1>
        <p class="text-red-500 my-1" id="msg"></p>
        <input type="text" name="new_tag"
        class="border my-2 border-teal-600 focus:outline-none focus:shadow-none px-2 py-1">
        <button type="button" id="add_new_tag"
        class="border my-2 border-teal-600 bg-teal-600 text-white focus:outline-none focus:shadow-none px-2 py-1">Add</button>
    </div>
    <!-- End Tag create dialog box -->
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function($){
            // Editor
            CKEDITOR.replace("description");

            // Pop up
            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                closeOnBgClick: false,
                focus: "input[name='new_tag']",
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });

            // Ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                }
            });

            // Add Tag via Ajax
            $('#add_new_tag').on('click', function(e) {
                e.preventDefault();
                $('#msg').text('');

                let name = $('input[name="new_tag"]');

                let formData = {
                    name: $(name).val()
                }

                let url = '{{ route('ajax.tag.store') }}';


                if ($(name).val() != '') {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: formData,
                        dataType: "json",
                        success: function(response){
                            if (response.error) {
                                $('#msg').text('Tag Already Exists');
                                console.log('error');
                            } else {
                                var tag = response.tag;
                                // Field Reset
                                $(name).val('');
                                // popup disable
                                $.magnificPopup.close();

                                // add to list
                                $('.tag_list').prepend('<input checked type="checkbox" id="'+ tag.slug + '" name="tags[]" value="' + tag.id + '"><label for="' + tag.slug + '" class="mr-2 ml-1 cursor-pointer">' + tag.name + '</label>');
                            }
                            console.log(response);
                        },
                        error: function(error){

                        }
                    });
                }

            });

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

@section('style')
    <style>
        /* Styles for dialog window */
        #add_new_tag_dialog {
            background: white;
            padding: 20px 30px;
            text-align: left;
            max-width: 400px;
            margin: 40px auto;
            position: relative;
        }
        /**
                                   * Fade-zoom animation for first dialog
                                   */
        /* start state */
        .my-mfp-zoom-in .zoom-anim-dialog {
            opacity: 0;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
        }
        /* animate in */
        .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
        /* animate out */
        .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            opacity: 0;
        }
        /* Dark overlay, start state */
        .my-mfp-zoom-in.mfp-bg {
            opacity: 0;
            -webkit-transition: opacity 0.3s ease-out;
            -moz-transition: opacity 0.3s ease-out;
            -o-transition: opacity 0.3s ease-out;
            transition: opacity 0.3s ease-out;
        }
        /* animate in */
        .my-mfp-zoom-in.mfp-ready.mfp-bg {
            opacity: 0.8;
        }
        /* animate out */
        .my-mfp-zoom-in.mfp-removing.mfp-bg {
            opacity: 0;
        }
        /**
                                   * Fade-move animation for second dialog
                                   */
        /* at start */
        .my-mfp-slide-bottom .zoom-anim-dialog {
            opacity: 0;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
            -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
            -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
            -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
            -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
            transform: translateY(-20px) perspective(600px) rotateX(10deg);
        }
        /* animate in */
        .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
            opacity: 1;
            -webkit-transform: translateY(0) perspective(600px) rotateX(0);
            -moz-transform: translateY(0) perspective(600px) rotateX(0);
            -ms-transform: translateY(0) perspective(600px) rotateX(0);
            -o-transform: translateY(0) perspective(600px) rotateX(0);
            transform: translateY(0) perspective(600px) rotateX(0);
        }
        /* animate out */
        .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
            opacity: 0;
            -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
            -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
            -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
            -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
            transform: translateY(-10px) perspective(600px) rotateX(10deg);
        }
        /* Dark overlay, start state */
        .my-mfp-slide-bottom.mfp-bg {
            opacity: 0;
            -webkit-transition: opacity 0.3s ease-out;
            -moz-transition: opacity 0.3s ease-out;
            -o-transition: opacity 0.3s ease-out;
            transition: opacity 0.3s ease-out;
        }
        /* animate in */
        .my-mfp-slide-bottom.mfp-ready.mfp-bg {
            opacity: 0.8;
        }
        /* animate out */
        .my-mfp-slide-bottom.mfp-removing.mfp-bg {
            opacity: 0;
        }
    </style>
@endsection
