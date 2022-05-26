@props(['data', 'text',])

<!-- card -->
<div class="report-card">
    <div class="card">
        <div class="card-body flex flex-col">
            <!-- bottom -->
            <div class="mt-8">
                <h1 class="h5">{{ count($data) }}</h1>
                <p>{{ $text }}</p>
            </div>
            <!-- end bottom -->
        </div>
    </div>
    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
</div>
<!-- end card -->
