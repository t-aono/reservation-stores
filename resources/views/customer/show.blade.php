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

                    <div class="w-full xl:w-4/5 mx-auto">
                        <div class="bg-white shadow-sm rounded mb-6">
                            <label class="text-lg px-3 block mb-1">{{ $reserves[0]->c_name }} 様</label>
                            <label class="text-md px-3 flex">
                                <svg class="h-5 w-5 text-gray-500 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                    <polyline points="3 7 12 13 21 7" /></svg>
                                {{ $reserves[0]->c_mail }}
                            </label>
                            <table class="text-center w-full border-collapse mt-3">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            予約日時</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                            予約店舗</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            予約プラン</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            料金</th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-grey-dark border-b border-grey-light">
                                            支払い</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reserves as $reserve)
                                        <tr class="hover:bg-grey-lighter">
                                            <td class="py-4 px-6 border-b border-grey-light">{{ str_replace('-', '/', $reserve->r_dt) }}</td>
                                            <td class="py-4 px-6 border-b border-grey-light">{{ $reserve->s_name }}</td>
                                            <td class="py-4 px-6 border-b border-grey-light">{{ $reserve->p_name }}</td>
                                            <td class="py-4 px-6 border-b border-grey-light">{{ number_format($reserve->price) }} 円</td>
                                            <td class="py-4 px-6 border-b border-grey-light">
                                                @if ( $reserve->payment ) 
                                                    決済済み
                                                @else 
                                                    未決済
                                                @endif
                                            </td>
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
