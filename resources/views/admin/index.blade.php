@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <x-admin.report-card :data="$problem" text="problem" />
        <x-admin.report-card :data="$solution" text="solution" />
    </div>
    <!-- End General Report -->

    <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">
    <!-- Browser Stats -->
    <div class="card">
        <div class="card-header">Browse </div>

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fad fa-spider-black-widow mr-4"></i>
                <h1>Problems</h1>
            </div>
            <div><span class="num-2">38</span>%</div>
        </div>
        <!-- end brawser -->

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fad fa-list-alt mr-4"></i>
                <h1>Categoris</h1>
            </div>
            <div><span class="num-2">23</span>%</div>
        </div>
        <!-- end brawser -->

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fad fa-tags mr-4"></i>
                <h1>Tags</h1>
            </div>
            <div><span class="num-2">94</span>%</div>
        </div>
        <!-- end brawser -->
    </div>
    <!-- end Browser Stats -->

    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Recent Sales</div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r"></th>
                    <th class="px-4 py-2 border-r">product</th>
                    <th class="px-4 py-2 border-r">price</th>
                    <th class="px-4 py-2">date</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2">80</span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">92</span> minutes ago</td>
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Apple iPhone 8.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2">56</span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">38</span> minutes ago</td>
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Apple MacBook Pro.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2">20</span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">80</span> minutes ago</td>
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Samsung Galaxy S9.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2">85</span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">21</span> minutes ago</td>
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Samsung Galaxy S8 256GB.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2">89</span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2">87</span> minutes ago</td>
                </tr>
                <tr>
                    <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 border-b-0 px-4 py-2">apple watch.</td>
                    <td class="border border-l-0 border-b-0 px-4 py-2">$<span class="num-2">37</span></td>
                    <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"><span class="num-2">56</span> minutes ago</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->
</div>


</div>

@endsection
