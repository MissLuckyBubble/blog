@props(['$trigger'])
<div x-data="{show: false}" @click.away="show = false">
    {{--    Trigger--}}
    <div @click="show = !show">
        {{$trigger}}
    </div>

    {{--    DrowDown--}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-1.5 rounded-xl">
        {{$slot}}
    </div>
</div>
