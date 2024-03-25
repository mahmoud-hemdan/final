@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Edit a new customer</h3>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('customer.saveupdate') }}">
            @csrf
            <input type="hidden" value="{{ $customer->id }}" name="old_id">
            <label>ID</label>
            <input type="text" class="form-control mb-4" name="id" value="{{ $customer->id }}">
            @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>customer_name</label>
            <input type="text" class="form-control mb-4" name="customer_name" value="{{ $customer->customer_name }}">
            @error('customer_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>email</label>
            <input type="email" class="form-control mb-4" name="email" value="{{ $customer->email }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>phone</label>
            <input type="tel" class="form-control mb-4" name="phone" value="{{ $customer->phone }}">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>city</label>
            <input type="text" class="form-control mb-3" name="city" value="{{ $customer->city }}">
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <input type="submit" class="form-control btn btn-success mt-3" value="Save Now Customer">

        </form>
    </div>
</div>

@include('temp.script')
