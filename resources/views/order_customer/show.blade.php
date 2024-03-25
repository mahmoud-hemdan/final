@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Product table</h3>
    <div class="card-body">
        <table class="table  table-bordered" style="margin-top: 50px">
            <thead class="dark">
                <tr>

                    <th scope="col">order_id</th>
                    <th scope="col">customer_id</th>
                    <th scope="col">Show</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                <tr></tr>

                <td> {{ $playertour->order->pluck('order_name')->implode(', ') }}</td>
                <td> {{ $playertour->customer->pluck('customer_name')->implode(', ') }}</td>
                <td>
                    <a href="{{ route('order_customer.view') }}"> <i class="fa-solid fa-house"
                            style="color: green; font-size: 30px"></i></a>
                </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@include('temp.script')
