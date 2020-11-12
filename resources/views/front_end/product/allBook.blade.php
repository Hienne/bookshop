@extends('layouts.master')

@section('title', trans('common.list_book'))

@section('content')
<div class="mt-3">
    <h2 class="text-center py-4 m-0 title">{{ trans('common.books') }}</h2>
    <div class="row">
        @include('front_end.common.product-card')
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $books->links('vendor.pagination.bootstrap-4') }}
    </div> 
</div>
@endsection