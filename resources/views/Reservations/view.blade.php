@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Reservation table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($reservation->count() > 0)
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">reservations_date</th>
                        <th scope="col">reservations_time</th>
                        <th scope="col">reservations_degree</th>
                        <th scope="col">reservations_name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">Show</th>
                        <th scope="col">Delete</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($reservation as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>

                <td>{{ $item['reservations_date'] }}</td>
                <td>{{ $item['reservations_time'] }}</td>
                <td>{{ $item['reservations_degree'] }}</td>
                <td>{{ $item['reservations_name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['phone'] }}</td>
                <td class="text-center">
                    <a href="{{ route('Reservations.show', $item->id) }}"> <i
                            class="fa-solid fa-eye btn btn-success"></i></a>
                </td>

                <td>
                    <a href="{{ route('Reservations.delete', $item->id) }}"> <i class="fa-solid fa-trash"
                            style="color: red; font-size: 25px"></i></i></a>
                </td>
                @endforeach
                </tr>
                <style>
                    td {
                        text-align: center
                    }

                    th {
                        text-align: center;
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
