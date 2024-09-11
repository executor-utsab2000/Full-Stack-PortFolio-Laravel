@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Category
@endsection

@section('pageHeader', 'Category Details')

@section('addBtnRoute', route('category.create'))


@section('adminContent')



    <div class="categoryIndex">
        @foreach ($categoryData as $item)
            <div class="tabContents categoryTabs my-3">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 id">{{ $item->categories_id }}</div>
                            <div class="col-6 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">{{ $item->categories_name }}</div>
                        </div>
                    </div>
                    <div class="col-lg-2 icons">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('category.edit', $item->categories_id) }}" class="nav-link">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('category.destroy', $item->categories_id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit"><i class="fa-solid fa-trash-can"></i></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
