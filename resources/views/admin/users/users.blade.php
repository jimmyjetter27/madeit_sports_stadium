@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
    <main>
        <livewire:admin.users/>
    </main>
</div>
@include('admin.layouts.footer')

