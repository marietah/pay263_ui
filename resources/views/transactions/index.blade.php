@extends(' layouts.base')
                        
    @section('content')
    <div class="col-lg-12">
        
                <div class="card" >
                    <div class="card-body">

                        <div class="container my-4">
                            <div class="row">
                                <h2 class="fs-3 text-center my-3">Filter by Date</h2>
                                {{-- <div class="m"> --}}
                                    <form action="/filter-transactions" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="start_date">
                                            <input type="date" class="form-control" name="end_date">
                                            <button class="btn btn-primary" type="submit">GET</button>
                                        </div>
                                    </form>
                                </div>       

        <table class="table"  table id="example" class="display">
           
        <thead>
            
            <tr>
                <th>Ref</th>
                <th>Date</th>
                <th>Terminal_Id</th>
                <th>Status</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Commission</th>
                <th>Fees</th>
                <th>Tax</th>
                <th>Amount</th>

            </tr>
            </thead>
                @foreach($transaction as $transaction)
                <tbody>
                <tr>   
                    <td>{{ $transaction['reference'] }}</td>
                    <td>{{ $transaction['transaction_date'] }}</td>
                    <td>{{ $transaction['terminal_id'] }}</td>
                    <td>{{ $transaction['status'] }}</td>
                    <td>{{ $transaction['debit'] }}</td>
                    <td>{{ $transaction['credit'] }}</td>
                    <td>{{ $transaction['commission'] }}</td>
                    <td>{{ $transaction['fees'] }}</td>
                    <td>{{ $transaction['tax'] }}</td>
                    <td>{{ $transaction['amount'] }}</td>
                </tr>
                </tbody>
                @endforeach
                
                </table>
</div>
</div>
</div>
@endsection