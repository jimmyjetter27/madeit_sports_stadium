@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
    <main class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <livewire:admin.venues/>
    </main>
</div>
@include('admin.layouts.modals')
@include('admin.layouts.footer')
