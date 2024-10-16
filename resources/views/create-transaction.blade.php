<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE TRANSACTION</title>
</head>
<body>
    <h1>CREATE TRANSACTION PAGE</h1>
    <form action="{{ route('storeTransaction') }}" method="POST">
        @csrf
        @method("POST")
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>

        <label for="transaction_title">Transaction Title:</label>
        <input type="text" id="transaction_title" name="transaction_title" required><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required><br>

        <label for="status">Status:</label>
        <select type="select" id="status" name="status" required><br>
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select><br>

        <label for="total_amount">Total Amount:</label>
        <input type="text" id="total_amount" name="total_amount" required><br>
        
        <label for="transaction_number">Transaction Number:</label>
        <input type="text" id="transaction_number" name="transaction_number" required><br>
        
        <label for="timestamps">Timestamps:</label>
        <input type="text" id="timestamps" name="timestamps" required><br>

        <button type="submit">Create Transaction</button>
`   </form>
    
    <form action="{{route('showAllTransactions',)}}" method="GET">
    
     <button type="submit">BACK</button>
        
    </form>

</body>
</html>