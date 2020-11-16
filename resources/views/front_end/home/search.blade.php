@extends('layouts.master')

@section('title', trans('common.home'))

@section('content')
<div class="col-md-12 text-center my-5">
    <h3 class="title">{{ trans('common.search_result', ['keyword' => $keyword]) }}</h3>
    <p class="m-0">{{ trans('common.top_results', ['books' => $books->count()]) }}</p>
</div>

<div class="row">
    @include('front_end.common.product-card')
</div>

<div class="d-flex justify-content-center mt-3">
    {{ $books->links('vendor.pagination.bootstrap-4') }}
</div> 
@endsection