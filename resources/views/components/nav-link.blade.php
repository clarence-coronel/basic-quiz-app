<a {{ $attributes->merge(['class' => 'group relative text-neutral-500 px-2 py-1 rounded-md font-semibold duration-200']) }}>
    <span>{{$slot}}</span>
    <div class="group-hover:w-full duration-200 absolute bottom-0 left-1/2 translate-x-[-50%] w-0 h-0.5 bg-neutral-400 rounded-full"></div>
</a>