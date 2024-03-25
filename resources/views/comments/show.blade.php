@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View comment table</h3>
    <div class="card-body">
        <table class="table" style="margin-top: 50px">
            <thead class="dark">
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">message</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            <tbody>
                <tr>


                <tr></tr>
                <td>{{ $massage['name'] }}</td>
                <td>{{ $massage['email'] }}</td>
                <td>{{ $massage['message'] }}</td>

                <td>
                    <a href="{{ route('comments.view') }}"> <i class="fa-solid fa-house"
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
