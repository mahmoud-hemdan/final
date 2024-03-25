@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View customer table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($customer->count() > 0)
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">customer_name</th>
                        <th scope="col">customer_email</th>
                        <th scope="col">customer_phone</th>
                        <th scope="col">customer_city</th>
                        <th scope="col">show customer</th>
                        <th scope="col">edit customar</th>
                        <th scope="col">Delete customar</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($customer as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>

                <td>{{ $item['customer_name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['phone'] }}</td>
                <td>{{ $item['city'] }}</td>
                <td class="text-center">
                    <a href="{{ route('customer.show', $item->id) }}"> <i
                            class="fa-solid fa-eye btn btn-success"></i></a>
                </td>
                <td>
                    <a href="{{ route('customer.edit', $item->id) }}"><i class="fa-solid fa-pencil"
                            style="color: blue;font-size: 25px"></i></i></a>
                </td>
                <td>
                    <a href="{{ route('customer.delete', $item->id) }}"> <i class="fa-solid fa-trash"
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
