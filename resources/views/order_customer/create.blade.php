@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Add a new order_customer</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{ route('order_customer.savenew') }}">
            @csrf
            {{-- @method('HEAD') --}}

            <label>customers</label>
            <select name="customer" id="" class="form-control mb-4">

                @foreach ($customer as $item)
                    <option value="{{ $item->id }}">{{ $item->customer_name }}</option>
                @endforeach
            </select>
            @error('customer_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>orders</label>
            <select name="order" class="form-control mb-4">

                @foreach ($order as $item)
                    <option value="{{ $item->id }}">{{ $item->order_name }}</option>
                @endforeach
            </select>
            @error('order_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <br>
            <button type="submit" class="form-control btn btn-success mt-3">
                add order_customer
            </button>
        </form>

        @include('temp.script')
