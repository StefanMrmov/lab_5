<h1>Edit Transactions</h1>

<form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name_surname_worker">name_surname_worker</label><br>
    <input type="text" id="name_surname_worker" name="name_surname_worker" value="{{ $transaction->name_surname_worker }}" required><br><br>

    <label for="name_worker_sender">name_worker_sender</label><br>
    <input type="text" id="name_worker_sender" name="name_worker_sender" value="{{ $transaction->name_worker_sender }}"
           required><br><br>

    <label for="name_worker_receiver">name_worker_receiver</label><br>
    <input type="text" id="name_worker_receiver" name="name_worker_receiver" value="{{ $transaction->name_worker_receiver }}" required><br><br>

    <label for="account_sender">account_sender</label><br>
    <input type="text" id="account_sender" name="account_sender" value="{{ $transaction->account_sender }}"
           required><br><br>

    <label for="account_receiver">account_receiver</label><br>
    <input type="text" id="account_receiver" name="account_receiver" value="{{ $transaction->account_receiver }}"
           required><br><br>

    <label for="amount">amount</label><br>
    <input type="number" id="amount" name="amount" value="{{ $transaction->amount }}"
           required><br><br>

    <button type="submit">Update Transcations</button>
</form>
