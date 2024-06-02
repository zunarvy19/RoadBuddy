<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex text-center items-center px-4 py-2 bg-[#D16902] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:opacity-75 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
