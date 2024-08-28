<form action="{{ route('langAdd') }}" method="post">
    @csrf

    @foreach ($languages as $item)
        <div style="margin-bottom: 1rem">
            <span class="pe-3">{{ $item->language_name }}</span>
            <input type="checkbox" name="languages[]" id="" value="{{ $item->language_id     }}">
        </div>
    @endforeach


    <div class=" ">
        <input type="submit" value="Submit">
    </div>
</form>


{{-- {{ $languages    }} --}}