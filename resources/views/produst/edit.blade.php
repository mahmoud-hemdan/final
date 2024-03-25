@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">Edit a new Product</h3>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('produst.saveupdate') }}">
            @csrf
            <input type="hidden" value="{{ $produst->id }}" name="old_id">
            <label>ID</label>
            <input type="text" class="form-control mb-4" name="id" value="{{ $produst->id }}">
            @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>produsts_image</label>
            <input type="file" class="form-control mb-4" name="produsts_image"
                value="{{ $produst->produsts_image }}">
            @error('produsts_image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>produsts_name</label>
            <input type="text" class="form-control mb-4" name="produsts_name" value="{{ $produst->produsts_name }}">
            @error('produsts_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>produsts_description</label>
            <input type="text" class="form-control mb-4" name="produsts_description"
                value="{{ $produst->produsts_description }}">
            @error('produsts_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>produsts_prise</label>
            <input type="text" class="form-control mb-3" name="produsts_prise"
                value="{{ $produst->produsts_prise }}">
            @error('produsts_prise')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>produsts_quantity</label>
            <input type="text" class="form-control mb-3" name="produsts_quantity"
                value="{{ $produst->produsts_quantity }}">
            @error('produsts_quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <input type="submit" class="form-control btn btn-success mt-3" value="Save Now Product">

        </form>
    </div>
</div>

@include('temp.script')
