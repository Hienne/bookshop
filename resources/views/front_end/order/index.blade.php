@extends('layouts.master')

@section('title', trans('order.my_order'))

@section('content')
<div class="justify-content-center">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ trans('order.my_order') }} ({{ count($orders) }})</h3>
            <div class="row">
                <div class="col-md-12">
                    <table id="table" class="table table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">{{ trans('order.id') }}</th>
                                <th scope="col">{{ trans('order.created') }}</th>
                                <th scope="col">{{ trans('order.book') }}</th>
                                <th scope="col">{{ trans('order.quantity') }}</th>
                                <th scope="col">{{ trans('order.total') }}</th>
                                <th scope="col">{{ trans('order.status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <th rowspan="{{ count($order->books) }}"><a href="#">{{ $order->id }}</a></th>
                                <td rowspan="{{ count($order->books) }}">{{ $order->created_at }}</td>
                                <td>{{ $order->books[0]->book_name }}</td>
                                <td>{{ $order->books[0]->pivot->quality }}</td>
                                <td>${{ $order->books[0]->pivot->price }}</td>
                                <td rowspan="{{ count($order->books) }}">{{ $order->order_status }}</td>
                            </tr>
                            @if (count($order->books) > 1)
                                @for ($i = 1; $i < count($order->books); $i++)
                                    <tr>
                                        <td>{{ $order->books[$i]->book_name }}</td>
                                        <td>{{ $order->books[$i]->pivot->quality }}</td>
                                        <td>${{ $order->books[$i]->pivot->price }}</td>
                                    </tr>
                                @endfor
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection