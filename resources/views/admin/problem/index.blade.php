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
                        <th class="px-4 py-2 border-r"></th>
                        <th class="px-4 py-2 border-r">Problems</th>
                        <th class="px-4 py-2 border-r">visiblity</th>
                        <th class="px-4 py-2 border-r">Categories</th>
                        <th class="px-4 py-2 border-r">Tags</th>
                        <th class="px-4 py-2 border-r">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
                        <td class="border border-l-0 px-4 py-2">$<span class="num-2">80</span></td>
                        <td class="border border-l-0 px-4 py-2">$<span class="num-2">80</span></td>
                        <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">92</span> minutes ago</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection
