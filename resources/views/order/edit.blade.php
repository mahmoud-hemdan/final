@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Edit a new Order</h3>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('order.saveupdate') }}">
            @csrf
            <input type="hidden" value="{{ $order->id }}" name="old_id">
            <label>ID</label>
            <input type="text" class="form-control mb-4" name="id" value="{{ $order->id }}">
            @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>order_name</label>
            <input type="text" class="form-control mb-4" name="order_name" value="{{ $order->order_name }}">
            @error('order_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>order_description</label>
            <input type="text" class="form-control mb-4" name="order_description"
                value="{{ $order->order_description }}">
            @error('order_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>order_address</label>
            <input type="text" class="form-control mb-3" name="order_address" value="{{ $order->order_address }}">
            @error('order_address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <input type="submit" class="form-control btn btn-success mt-3" value="Save Now Order">

        </form>
    </div>
</div>

@include('temp.script')
