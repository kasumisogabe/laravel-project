<!DOCTYPE html>
<html>
<head>
  <title>Edit Income</title>
</head>
<body>
  <h1>Edit Income</h1>

  <form method="POST" action="/incomes/{{ $income->id }}">
    @csrf
    @method('PUT')

    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" value="{{ $income->amount }}">

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="{{ $income->date }}">

    <label for="note">Note:</label>
    <textarea id="note" name="note">{{ $income->note }}</textarea>

    <button type="submit">Update</button>
  </form>
</body>
</html>