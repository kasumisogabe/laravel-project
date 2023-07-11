@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Incomes</h1>
    <a href="{{ route('incomes.create') }}" class="btn btn-primary">Add New Income</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($incomes as $income)
            <tr>
                <td>{{ $income->id }}</td>
                <td>{{ $income->type->name }}</td>
                <td>{{ $income->amount }}</td>
                <td>{{ $income->date }}</td>
                <td>{{ $income->note }}</td>
                <td>
                    <a href="{{ route('incomes.show', ['income' => $income->id]) }}" class="btn btn-info">View</a>
                    <a href="{{ route('incomes.edit', ['income' => $income->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('incomes.destroy', ['income' => $income->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection