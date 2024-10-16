<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS PAGE</h1>

    <form action="{{route('createTransaction')}}" method="GET">
        @method("GET")
    
            <button type="submit">CREATE</button>
    </form>

    @foreach ($transactions as $transaction)
    <div>ID: {{ $transaction->ID }}</div>
    <div>Transaction_title: {{ $transaction->transaction_title }}</div>
    <div>Description: {{ $transaction->description }}</div>
    <div>Status: {{ $transaction->status }}</div>
    <div>Total_amount: {{ $transaction->total_amount }}</div>
    <div>transaction_number: {{ $transaction->transaction_number }}</div>
    <div>timestamps: {{ $transaction->timestamps }} </div>
   
    
    <form action="{{route('editTransaction', ['id' => $transaction->id])}}" method="GET">
       
           
    <button type="submit">edit</button>
        
    </form>

    <form action="{{route('viewTransaction', ['id' => $transaction->id])}}" method="GET">

           
    <button type="submit">VIEW</button>
        
    </form>
    <hr>
    @endforeach
</body>

    
</body>
</html>
