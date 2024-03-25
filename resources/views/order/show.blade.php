@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Product table</h3>
    <div class="card-body">
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">
                <tr>

                    <th scope="col">order_name</th>
                    <th scope="col">order_description</th>
                    <th scope="col">order_address</th>
                    <th scope="col">created_at</th>
                    <th scope="col">show order</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                <tr></tr>

                <td>{{ $order['order_name'] }}</td>
                <td>{{ $order['order_description'] }}</td>
                <td>{{ $order['order_address'] }}</td>
                <td>{{ $order['created_at'] }}</td>

                <td>
                    <a href="{{ route('order') }}"> <i class="fa-solid fa-house"
                            style="color: green; font-size: 30px"></i></a>
                </td>
                </tr>
                <style>
                    td {
                        text-align: center;

                    }
                </style>
            </tbody>
        </table>
    </div>
</div>


@include('temp.script')
