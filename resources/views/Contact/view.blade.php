@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Contact table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($Contact->count() > 0)
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
                    @foreach ($Contact as $key => $item)
                <tr></tr>
                <td>{{ $key + 1 }}</td>

                <td>{{ $item['callme_name'] }}</td>
                <td>{{ $item['callme_email'] }}</td>
                <td>{{ $item['callme_message'] }}</td>
                <td>{{ $item['created_at'] }}</td>

                <td class="text-center">
                    <a href="{{ route('Contact.show', $item->id) }}"> <i
                            class="fa-solid fa-eye btn btn-success"></i></a>


                </td>

                <td>
                    <a href="{{ route('Contact.delete', $item->id) }}"> <i class="fa-solid fa-trash"
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
