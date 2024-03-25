@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View customer table</h3>
    <div class="card-body">
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">
                <tr>

                    <th scope="col">customer_name</th>
                    <th scope="col">customer_email</th>
                    <th scope="col">customer_phone</th>
                    <th scope="col">customer_city</th>
                    <th scope="col">show customer</th>

                </tr>
            </thead>
            <tbody>
                <tr>


                <tr></tr>


                <td>{{ $customer['customer_name'] }}</td>
                <td>{{ $customer['email'] }}</td>
                <td>{{ $customer['phone'] }}</td>
                <td>{{ $customer['city'] }}</td>
                <td>
                    <a href="{{ route('customers') }}"> <i class="fa-solid fa-house"
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
