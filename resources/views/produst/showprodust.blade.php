@include('temp.homehead')

@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Product table</h3>
    <div class="card-body">
        <table class="table  table-bordered" style="margin-top: 50px">
            <thead class="dark">
                <tr>

                    <th scope="col">produsts_image</th>
                    <th scope="col">produsts_name</th>
                    <th scope="col">produsts_description</th>
                    <th scope="col">produsts_prise</th>
                    <th scope="col">produsts_quantity</th>
                    <th scope="col">show produst</th>

                </tr>
            </thead>
            <tbody>
                <tr>


                <tr></tr>

                <td>{{ $produst['produsts_image'] }}</td>
                <td>{{ $produst['produsts_name'] }}</td>
                <td>{{ $produst['produsts_description'] }}</td>
                <td>{{ $produst['produsts_prise'] }}</td>
                <td>{{ $produst['produsts_quantity'] }}</td>
                <td>
                    <a href="{{ route('products') }}"> <i class="fa-solid fa-house"
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
