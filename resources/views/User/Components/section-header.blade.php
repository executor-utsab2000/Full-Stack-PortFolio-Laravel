<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Kanit:ital,wght@0,500;0,600;1,800&display=swap');

    .headerBlue {
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #3a86ff;
        font-size: 1rem;
        font-family: 'Kanit', sans-serif;
        font-weight: 700;
    }

    .headerBlack {
        word-spacing: 3px;
        letter-spacing: 1px;
        color: #343a40;
        font-size: 1.5rem;
        font-weight: 800;
        font-family: 'DM Serif Display', serif;
    }
</style>

<div>
    <p class="headerBlue">{{ $heading }}</p>
    <p class="headerBlack pe-5">
        {{ $subHeading }}
        <i class="{{ $icon }} mx-2" style ="color: red; font-size: 2rem"></i>
    </p>
</div>
