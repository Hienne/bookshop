@extends('layouts.master')

@section('title', trans('cart.cart'))

@section('content')
<div class="card my-4">
    <div class="card-body">
        <h3 class="card-title">{{ trans('cart.detail') }}</h3>
        @if ($totalQty == 0)
        <p class="card-text">{{ trans('cart.empty') }} <a href="{{ route('home') }}"
                class="card-link">{{ trans('cart.shopping') }}</a></p>
        @else
        <div class="table-responsive text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('cart.book_name') }}</th>
                        <th scope="col">{{ trans('cart.author') }}</th>
                        <th scope="col">{{ trans('cart.price') }}</th>
                        <th scope="col">{{ trans('cart.quantity') }}</th>
                        <th scope="col">{{ trans('cart.total') }}</th>
                        <th scope="col">{{ trans('cart.remove') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    {{ Form::open(['class' => 'form-horizontal']) }}
                    <tr>
                        <td>
                            <img src="{{ asset($book['item']->book_image) }}" width="50" height="50" alt="Image">
                        </td>
                        <td style="width: 400px">
                            <a href="{{ route('detailBook', ['id'=>$book['item']->id]) }}">{{ $book['item']->book_name }}</a>
                        </td>
                        <td>{{ $book['item']->price }} VND</td>
                        <td>
                            {{ Form::hidden('bookId', $book['item']->id, ['id' => 'bookId' . $book['item']->id]) }}
                            {{ Form::number('qty', $book['qty'], ['class' => 'form-control form-control-sm text-center w-50 mx-auto', 'min' => '1', 'max' => '10', 'id' => 'qty' . $book['item']->id]) }}
                        </td>
                        <td>{{ ($book['price']) }} VND</td>
                        <td>
                            <a id="remove{{ $book['item']->id }}" href="#"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    {{ Form::close() }}
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <div class="card-body table-responsive">
            <h3 class="card-title">{{ trans('cart.ship_address') }}</h3>
            @guest
            <p class="card-text">{{ trans('cart.logged_in') }} <a href="{{ route('login') }}"
                    class="card-link">{{ trans('cart.login') }}</a></p>
            @else
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">{{ trans('cart.name') }}</th>
                        <td class="text-right">{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('cart.phone') }}</th>
                        <td class="text-right">{{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('cart.address') }}</th>
                        <td class="text-right">{{ Auth::user()->address }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">
                <a href="#"
                    class="btn btn-primary">{{ trans('cart.edit') }}</a>
            </div>
            @endguest
        </div>
    </div>
    <div class="card">
        <div class="card-body table-responsive">
            <h3 class="card-title">{{ trans('cart.payment') }}</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">{{ trans('cart.items_on_cart') }}</th>
                        <td class="text-right">{{ $totalQty }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('cart.shipping_fee') }}</th>
                        <td class="text-right">30000 VND</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('cart.total') }}</th>
                        <td class="text-right">{{ $totalPri + 30000 }} VND</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ trans('cart.payment_method') }}</th>
                        <td class="text-right">
                            <select name="payment" id="payment" class="form-control">
                                <option value="0">{{ trans('cart.payment_on_delivery') }}</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">
                @if ($totalQty !== 0)
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">{{ trans('cart.checkout') }}</a>    
                @else
                    <a href="{{ route('cart.checkout') }}" class="btn btn-primary">{{ trans('cart.checkout') }}</a>    
                @endguest
                
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- Remove item using Ajax -->
<script type="text/javascript">
    $(document).ready(function () {
        if({{ $totalQty !== 0 }})
        {
            @foreach($books as $book) 
            $("#remove{{ $book['item']->id }}").click(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('cart.delete', $book['item']->id) }}",
                    method: 'POST',
                    data: {
                        _method: 'DELETE'
                    },
                    success: function () {
                        location.reload();
                    },
                
                });
            });
        @endforeach
        }
    });
</script>
<!-- Update item using Ajax -->
<script type="text/javascript">
    $(document).ready(function () {
        if({{ $totalQty }} != 0)
        {
            @foreach($books as $book)
        $('#qty{{ $book["item"]->id }}').change(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('cart.update') }}",
                method: 'POST',
                data: {
                    _method: 'PUT',
                    bookId: $('#bookId{{ $book["item"]->id }}').val(),
                    qty: $('#qty{{ $book["item"]->id }}').val(),
                },
                success: function () {
                    location.reload();
                },
            });
        });
        @endforeach
        }
    });
</script>
@endsection