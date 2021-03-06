<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="w-full lg:w-2/3 mx-auto">
                        <div class="flex justify-end">
                            <a href="{{ route('customer.download') }}"><x-grn-btn type="buttton" value="CSVダウンロード" /></a>
                        </div>
                        <div class="bg-white shadow-sm rounded my-6">
                            <table class="text-center w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                            名前</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            メールアドレス</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr class="hover:bg-grey-lighter">
                                            <td class="py-4 px-6 border-b border-grey-light">{{ $customer->name }}</td>
                                            <td class="py-4 px-6 border-b border-grey-light">{{ $customer->mail }}</td>
                                            <td class="py-4 px-6 border-b border-grey-light"><a href="{{ route('customer.show', ['id' => $customer->c_id]) }}" class="font-bold text-green-400">予約履歴</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
