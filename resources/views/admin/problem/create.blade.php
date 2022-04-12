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

        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->

@endsection
