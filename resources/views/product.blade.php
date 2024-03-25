@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Product table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">
                @if ($produst->count() > 0)


                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">produsts_image</th>
                        <th scope="col">produsts_name</th>
                        <th scope="col">produsts_description</th>
                        <th scope="col">produsts_prise</th>
                        <th scope="col">produsts_quantity</th>
                        <th scope="col">show </th>
                        <th scope="col">edit </th>
                        <th scope="col">Delete </th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($produst as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>

                <td>
                    <img src="{{ asset('product/image/' . $item->produsts_image) }}" style='width:70px;height:70px;'>
                </td>
                <td>{{ $item['produsts_name'] }}</td>
                <td>{{ $item['produsts_description'] }}</td>
                <td>{{ $item['produsts_prise'] }}</td>
                <td>{{ $item['produsts_quantity'] }}</td>
                <td class="text-center">
                    <a href="{{ route('produst.show', $item->id) }}"> <i
                            class="fa-solid fa-eye btn btn-success"></i></a>
                </td>
                <td>
                    <a href="{{ route('produst.edit', $item->id) }}"><i class="fa-solid fa-pencil"
                            style="color: blue;font-size: 25px"></i></i></a>
                </td>
                <td>
                    <a href="{{ route('produst.delete', $item->id) }}"> <i class="fa-solid fa-trash"
                            style="color: red; font-size: 25px"></i></i></a>
                </td>
                @endforeach
                </tr>
                <style>
                    td {
                        text-align: center
                    }
                </style>
            </tbody>
        </table>
    @else
        <h2 class="text-center">No Data Yat..!</h2>
        @endif
    </div>
</div>
</div>




@include('temp.script')
