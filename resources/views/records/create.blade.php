@extends('layouts.app')

@section('title', '収支追加')

@section('content')
    <h2>収支追加</h2>

    <form action="{{ route('records.store') }}" method="POST">
        @csrf

        <div>
            <label for="date">日付:</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div>
            <label for="category">カテゴリ:</label>
            <input type="text" id="category" name="category" maxlength="50" required>
        </div>

        <div>
            <label for="description">内容:</label>
            <input type="text" id="description" name="description" maxlength="255">
        </div>

        <div>
            <label for="amount">金額:</label>
            <input type="number" id="amount" name="amount" min="0" required>
        </div>

        <div>
            <label for="type">種類:</label>
            <select id="type" name="type" required>
                <option value="expense">支出</option>
                <option value="income">収入</option>
            </select>
        </div>

        <div>
            <button type="submit">登録</button>
            <a href="{{ route('records.index') }}">キャンセル</a>
        </div>
    </form>
@endsection
