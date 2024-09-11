<form action="{{ route('langAdd') }}" method="post">
    @csrf

    @foreach ($languages as $item)
        <div style="margin-bottom: 1rem">
            <span class="pe-3">{{ $item->language_name }}</span>
            <input type="checkbox" name="languages[]" class="language" id="" value="{{ $item->language_id }}">
        </div>
    @endforeach


    <div class=" ">
        <input type="submit" value="Submit">
    </div>
</form>


{{-- <script>
    let language = document.querySelectorAll('.language')
    // console.log(language);

    language.forEach(elm => {
        elm.addEventListener('click', () => {
            console.log(elm.parentNode.children[2]); // Log the clicked element
            elm.parentNode.children[2].removeAttribute('disabled')
        });
    });
</script> --}}
