@extends('layouts.app')

@section('title', '収支一覧')

@section('content')
    <h2>収支一覧</h2>

    @if ($records->isEmpty())
        <p>まだ収支が登録されていません。</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>日付</th>
                    <th>カテゴリ</th>
                    <th>内容</th>
                    <th>金額</th>
                    <th>種類</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->category }}</td>
                        <td>{{ $record->description }}</td>
                        <td>{{ number_format($record->amount) }}円</td>
                        <td>{{ $record->type === 'expense' ? '支出' : '収入' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
