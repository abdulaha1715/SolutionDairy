@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header">Recent Problems</div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center">Id</th>
                        <th class="px-4 py-2 border-r">Problems</th>
                        <th class="px-4 py-2 border-r text-center">visiblity</th>
                        <th class="px-4 py-2 border-r text-center">Categories</th>
                        <th class="px-4 py-2 border-r text-center">Tags</th>
                        <th class="px-4 py-2 border-r text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    @forelse ($problems as $problem)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">
                                {{ $problem->id }}
                            </td>
                            <td class="border border-l-0 px-4 py-2">{{ $problem->name }}</td>
                            <td class="border border-l-0 px-4 py-2 text-center">{{ $problem->visiblity }}</td>
                            <td class="border border-l-0 px-4 py-2 text-center">{{ $problem->category_id }}</td>
                            <td class="border border-l-0 px-4 py-2 text-center">tags</td>
                            <td class="border border-l-0 border-r-0 px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="" class="text-white bg-teal-500 px-3 py-1 mr-2">Edit</a>
                                    <form action="" method="POST" onsubmit="return confirm('Do you want to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-800 px-3 py-1">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="border py-6 text-center text-xl">No Problem Found!</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="mt-5">
                {{ $problems->links() }}
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection
