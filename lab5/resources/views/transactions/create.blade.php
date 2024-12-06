<h1>Create Transactions</h1>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf

    <label for="name_surname_worker">name_surname_worker</label><br>
    <input type="text" id="name_surname_worker" name="name_surname_worker" required><br><br>

    <label for="name_worker_sender">name_worker_sender</label><br>
    <input type="text" id="name_worker_sender" name="name_worker_sender" required><br><br>

    <label for="name_worker_receiver">name_worker_receiver</label><br>
    <input type="text" id="name_worker_receiver" name="name_worker_receiver" required><br><br>

    <label for="account_sender">account_sender</label><br>
    <input type="text" id="account_sender" name="account_sender" required><br><br>

    <label for="account_receiver">account_receiver</label><br>
    <input type="text" id="account_receiver" name="account_receiver" required><br><br>

    <label for="amount">amount</label><br>
    <input type="number" id="amount" name="amount" required><br><br>

    <button type="submit">Create Transactions</button>
</form>
