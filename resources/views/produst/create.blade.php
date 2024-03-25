@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Add a new Product</h3>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('product.savenew') }}">
            @csrf
            <label>products_image</label>
            <input type="file" class="form-control mb-4" name="produsts_image">
            @error('produsts_image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>products_name</label>
            <input type="text" class="form-control mb-4" name="produsts_name">
            @error('produsts_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>products_description</label>
            <input type="text" class="form-control mb-4" name="produsts_description">
            @error('produsts_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>products_prise</label>
            <input type="tel" class="form-control mb-4" name="produsts_prise">
            @error('produsts_prise')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>products_quantity</label>
            <input type="text" class="form-control mb-3" name="produsts_quantity">
            @error('produsts_quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <input type="submit" class="form-control btn btn-success mt-3" value="Save Now Product">

        </form>
    </div>
</div>
<style>

</style>

@include('temp.script')
