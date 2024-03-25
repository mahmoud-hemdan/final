@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Add a new Order</h3>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('order.savenew') }}">
            @csrf


            <label>order_name</label>
            <input type="text" class="form-control mb-4" name="order_name">
            @error('order_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>order_description</label>
            <input type="text" class="form-control mb-4" name="order_description">
            @error('order_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>order_address</label>
            <input type="tel" class="form-control mb-4" name="order_address">
            @error('order_address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <input type="submit" class="form-control btn btn-success mt-3" value="Save Now Order">

        </form>
    </div>
</div>

@include('temp.script')
