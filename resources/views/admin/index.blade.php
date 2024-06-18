<x-admin-layout>

    <x-slot name="title">
        Dashboard
    </x-slot>
    <div class="" >

        <div class="grid grid-cols-12 gap-3" style="padding-bottom: 50px">

            <br>
            <div class="col-span-12 ">
            <livewire:attendance.dashboard-attendance />
            </div>
            <br>
{{--            <br>--}}
            <div class="col-span-12 ">
                <livewire:dashboard.dashboard-card/>
            </div>
            <div class="col-span-6 ">
                <livewire:dashboard.dashboard-goals/>
            </div>
            <div class="col-span-6 ">
                <livewire:dashboard.dashboard-revenue/>
            </div>
{{--            <div class="col-span-4">--}}
{{--                <livewire:dasbhboard.dashboard-product/>--}}
{{--            </div>--}}
        </div>
    </div>
</x-admin-layout>
