<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION</title>
</head>
<body>
    <h1>TRANSACTION</h1>

        <div>ID : {{ $transaction->id}}</div>
        <div>Transaction Title : {{ $transaction->transaction_title}}</div>
        <div>Description : {{ $transaction->description}}</div>
        <div>Status : {{ $transaction->status}}</div>
        <div>Total Amount : {{ $transaction->total_amount}}</div>
        <div>Transaction Number : {{ $transaction->transaction_number}}</div>
        <div>Timestamps : {{ $transaction->timestamps}}</div>
        <hr>

        <form action="{{route('deleteTransaction', ['id' => $transaction->id])}}" method="POST" onsubmit="return confirm('Are you sure?')">
            @method("DELETE")
            @csrf 
            <button type="submit">DELETE</button>
        
        </form>

        <form action="{{route('showAllTransactions')}}" method="GET">
       

            <button type="submit">BACK</button>
        
        </form>


    <!-- id',
        'transaction_title',
        'description',
        'status',
        'total_amount',
        'transaction_number',
        'timestamps',
     -->
</body>
</html>