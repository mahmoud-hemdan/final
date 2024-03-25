@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Reservation table</h3>
    <div class="card-body">
        <table class="table  table-bordered" style="margin-top: 50px">
            <thead class="dark">
                <tr>

                    <th scope="col">reservations_date</th>
                    <th scope="col">reservations_time</th>
                    <th scope="col">reservations_degree</th>
                    <th scope="col">reservations_name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            <tbody>
                <tr>


                <tr></tr>

                <td>{{ $reservation['reservations_date'] }}</td>
                <td>{{ $reservation['reservations_time'] }}</td>
                <td>{{ $reservation['reservations_degree'] }}</td>
                <td>{{ $reservation['reservations_name'] }}</td>
                <td>{{ $reservation['email'] }}</td>
                <td>{{ $reservation['phone'] }}</td>
                <td>
                    <a href="{{ route('Reservations.view') }}"> <i class="fa-solid fa-house"
                            style="color: green; font-size: 30px"></i></a>
                </td>
                </tr>
                <style>
                    td {
                        text-align: center;

                    }

                    th {
                        text-align: center;
                    }
                </style>
            </tbody>
        </table>
    </div>
</div>


@include('temp.script')
