<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            収支追加
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('records.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700">日付:</label>
                            <input type="date" id="date" name="date" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700">カテゴリ:</label>
                            <input type="text" id="category" name="category" maxlength="50" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">内容:</label>
                            <input type="text" id="description" name="description" maxlength="255" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-700">金額:</label>
                            <input type="number" id="amount" name="amount" min="0" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">種類:</label>
                            <select id="type" name="type" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="expense">支出</option>
                                <option value="income">収入</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">登録</button>
                            <a href="{{ route('records.index') }}" class="text-gray-600 hover:underline">キャンセル</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
