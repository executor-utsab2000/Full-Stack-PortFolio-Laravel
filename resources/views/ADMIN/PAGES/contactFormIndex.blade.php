@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Contact Form
@endsection



@section('css_js')
    <style>
        .contactLongText {
            font-size: 0.7rem;
        }

        .status {
            text-align: center;
        }

        .statusTxt {
            font-weight: 700;
            font-size: 0.8rem;
            color: #ef233c;
            background-color: #80ed99;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            letter-spacing: 1px;
            text-transform: capitalize;
        }

        .ConfirmIfNotBtn button {
            letter-spacing: 1px;
            color: #ffb703;
            font-weight: 800;
            font-size: 0.6rem;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: #ef233c
        }
    </style>
@endsection



@section('pageHeader', 'Contact Form Details')

@section('addBtnDisplay', 'd-none')

@section('adminContent')

    <div class="contact_formIndex">
        @foreach ($contactData as $item)
            <div class="tabContents contactFormTabs my-3">
                <div class="row">
                    <div class="col-lg-9 my-auto">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center  my-md-auto mx-auto px-2 id">
                                {{ $item->contact_user_Id }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">
                                {{ $item->contact_user_name }}</div>
                            <div
                                class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 text-danger contactLongText">
                                {{ $item->contact_user_phone }}</div>
                            <div
                                class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 text-danger contactLongText">
                                {{ $item->contact_user_email }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 contactLongText">
                                {{ $item->contact_user_residence }}</div>
                            <div
                                class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 contactLongText">
                                {{ $item->contact_user_purpose }}</div>
                        </div>
                    </div>
                    <div class="col-lg-2 status my-auto">
                        <span class="statusTxt">{{ $item->status }}</span>
                        <div class="ConfirmIfNotBtn mt-3 mb-2 {{ $item->status == 'contacted' ? 'd-none' : '' }}">
                            <form action="{{ route('contact_form.update', $item->contact_user_Id) }}" method="POST">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn py-2 px-4"><i class="fa-solid fa-phone me-2"></i> Contact
                                    User</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1 icons">
                        <form action="{{ route('contact_form.destroy', $item->contact_user_Id) }}" method="POST">
                            @csrf
                            @method('delete')   
                            <button class="btn" type="submit"><i class="fa-solid fa-trash-can"></i></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
