@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View comment table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($massage->count() > 0)
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">message</th>
                        <th scope="col">created_at</th>
                        <th scope="col">show</th>
                        <th scope="col">delete</th>

                    </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($massage as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>

                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['message'] }}</td>
                <td>{{ $item['created_at'] }}</td>

                <td class="text-center">
                    <a href="{{ route('comments.show', $item->id) }}"> <i
                            class="fa-solid fa-eye btn btn-success"></i></a>

                </td>

                <td>
                    <a href="{{ route('comments.delete', $item->id) }}"> <i class="fa-solid fa-trash"
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
