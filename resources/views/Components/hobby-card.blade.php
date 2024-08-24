
<style>
    .card {
        width: 11rem;
        height: 10rem;
        border-radius: 20px;
        background: #f5f5f5;
        position: relative;
        padding: 0.5rem;
        border: 2px solid #c3c6ce;
        transition: 0.5s ease-out;
        /* overflow: visible; */
    }

    .cardDetails {
        overflow: hidden;
        height: 100%;
        ;
        display: grid;
        place-content: center;

    }

    .cardDetails img {
        width: 95%;
        height: 95%;
        display: grid;
        place-content: center;
        transition: all 0.5s;
    }

    .cardButton {
        transform: translate(-50%, 125%);
        width: 60%;
        border-radius: 1rem;
        border: none;
        background-color: #008bf8;
        color: #fff;
        font-size: 0.8rem;
        padding: .5rem 1rem;
        position: absolute;
        left: 50%;
        bottom: 0;
        opacity: 0;
        transition: 0.3s ease-out;
        font-weight: 700;
        text-transform: capitalize;
    }

    /*Hover*/
    .card:hover {
        box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
    }

    .card:hover .cardButton {
        transform: translate(-50%, 50%);
        opacity: 1;
    }

    .card:hover .cardDetails img {
        transform: scale(1.1);
    }
</style>

<div class="card">
    <div class="cardDetails">
        <img src='{{ asset("Images/hobbies/$hobbyImage") }}' alt="" className='img-fluid' />
    </div>
    <button class="cardButton">{{ $caption }}</button>
</div>