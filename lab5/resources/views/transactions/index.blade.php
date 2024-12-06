<div>
    <h1>Transactions</h1>
    <a href="{{ route('transactions.create') }}">Add Reservation</a>

    @if($transactions->isEmpty())
        <p>No reservations found.</p>
    @else
        <table border="1">
            <thead>
            <tr>
                <th>name_surname_worker</th>
                <th>name_worker_sender</th>
                <th>name_worker_receiver</th>
                <th>account_sender</th>
                <th>account_receiver</th>
                <th>amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->name_surname_worker }}</td>
                    <td>{{ $transaction->name_worker_sender }}</td>
                    <td>{{ $transaction->name_worker_receiver }}</td>
                    <td>{{ $transaction->account_sender }}</td>
                    <td>{{ $transaction->account_receiver }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>
                        <a href="{{ route('transactions.edit', $transaction->id) }}">Update</a>
                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this transaction?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
