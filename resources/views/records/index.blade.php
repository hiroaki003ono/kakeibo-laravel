<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            収支一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    <p class="mb-4">
                        <a href="{{ route('records.create') }}" class="text-blue-600 hover:underline">収支を追加</a>
                    </p>

                    @if ($records->isEmpty())
                        <p>まだ収支が登録されていません。</p>
                    @else
                        <table class="min-w-full border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">日付</th>
                                    <th class="border border-gray-300 px-4 py-2">カテゴリ</th>
                                    <th class="border border-gray-300 px-4 py-2">内容</th>
                                    <th class="border border-gray-300 px-4 py-2">金額</th>
                                    <th class="border border-gray-300 px-4 py-2">種類</th>
                                    <th class="border border-gray-300 px-4 py-2">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $record->date }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $record->category }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $record->description }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ number_format($record->amount) }}円</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $record->type === 'expense' ? '支出' : '収入' }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <form action="{{ route('records.destroy', $record) }}" method="POST" onsubmit="return confirm('本当に削除しますか?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline">削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
