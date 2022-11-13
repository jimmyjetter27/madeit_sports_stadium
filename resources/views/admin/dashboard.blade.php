@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
<main>
    <livewire:admin.admin-analytics/>
</main>
</div>
@include('admin.layouts.footer')

