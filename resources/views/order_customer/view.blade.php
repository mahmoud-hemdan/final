<h2>Lorem ipsum dolor sit amet.</h2>@include('temp.homehead')
@include('temp.bodyhome')
<div class="card">
    <h3 class="card-header show">View Oreder Customer table</h3>
    <div class="card-body">
        @if (session('success'))
            <h2 class="alert alert-success text-center">{{ session('success') }}</h2>
        @endif
        <table class="table table-bordered" style="margin-top: 50px">
            <thead class="dark">


                @if ($playertour->count() > 0)
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">order_id</th>
                        <th scope="col">customer_id</th>
                        <th scope="col">Show</th>
                        <th scope="col">delete</th>

                    </tr>
            </thead>
            <tbody>
                @foreach ($playertour as $key => $winner)
                    <tr style="text-align: center">
                        <td> {{ $key + 1 }}</td>
                        <td> {{ $winner->order->pluck('order_name')->implode(', ') }}</td>
                        <td> {{ $winner->customer->pluck('customer_name')->implode(', ') }}</td>

                        {{-- <td> @foreach ($winner->customer as $tournament)
                                        {{ $tournament->customer_name }},
                                    @endforeach --}}



                        <td class="text-center">
                            <a href="{{ route('order_customer.show', $winner->id) }}"> <i
                                    class="fa-solid fa-eye btn btn-success"></i></a>

                        </td>

                        <td>
                            <a href="{{ route('order_customer.delete', $winner->id) }}"> <i class="fa-solid fa-trash"
                                    style="color: red; font-size: 25px"></i></i></a>
                        </td>
                    </tr>
                @endforeach

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
