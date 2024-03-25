@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View order table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($order->count() > 0)
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">order_name</th>
                        <th scope="col">order_description</th>
                        <th scope="col">order_address</th>
                        <th scope="col">show order</th>
                        <th scope="col">edit order</th>
                        <th scope="col">Delete order</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($order as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item['order_name'] }}</td>
                <td>{{ $item['order_description'] }}</td>
                <td>{{ $item['order_address'] }}</td>

                <td class="text-center">
                    <a href="{{ route('order.show', $item->id) }}"> <i class="fa-solid fa-eye btn btn-success"></i></a>
                </td>
                <td>
                    <a href="{{ route('order.edit', $item->id) }}"><i class="fa-solid fa-pencil"
                            style="color: blue;font-size: 25px"></i></i></a>
                </td>
                <td>
                    <a href="{{ route('order.delete', $item->id) }}"> <i class="fa-solid fa-trash"
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
