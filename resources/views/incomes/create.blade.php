<!DOCTYPE html>
<html>
<head>
  <title>Create Income</title>
</head>
<body>
  <h1>Create Income</h1>

  <form method="POST" action="/incomes">
    @csrf

    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount">

    <label for="date">Date:</label>
    <input type="date" id="date" name="date">

    <label for="note">Note:</label>
    <textarea id="note" name="note"></textarea>

    <button type="submit">Create</button>
  </form>
</body>
</html>