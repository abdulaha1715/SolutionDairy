@extends('layouts.dashboard')

@section('content')

    @if (Session('success'))
        <p>{{ Session('success') }}</p>
    @endif

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Tag</h2>
                <a href="{{ route('tag.create') }}" class="btn-shadow">add new</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center">Id</th>
                        <th class="px-4 py-2 border-r">Name</th>
                        <th class="px-4 py-2 border-r">slug</th>
                        <th class="px-4 py-2 border-r text-center">Problems</th>
                        <th class="px-4 py-2 border-r text-center w-40">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    @forelse ($tags as $tag)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">
                                {{ $tag->id }}
                            </td>
                            <td class="border border-l-0 px-4 py-2">{{ $tag->name }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $tag->slug }}</td>
                            <td class="border border-l-0 px-4 py-2 text-center">
                                {{ count($tag->problems) }}
                            </td>
                            <td class="border border-l-0 border-r-0 px-4 py-2 w-40">
                                <div class="flex justify-center">
                                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn-bs-primary mx-1">Edit</a>
                                    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST" onsubmit="return confirm('Do you want to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-bs-danger mx-1">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border py-6 text-center text-xl text-red-700">No Category Found!</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="m-5">
                {{ $tags->links() }}
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection
