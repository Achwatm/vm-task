<div class="py-12 px-12">
    <h1 class="mb-4 w-1/2 pb-1 text-xl font-extrabold border-gray-500 border-b leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-white">Last purchasers<h1>
    <table class="w-full text-white mb-5">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Name')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Email')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Birthday')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Birthdate')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Purchases')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Last purchase on')</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Updated at')</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($usersWithRecentPurchases as $rUser )
                    <tr class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td  class="px-6 py-4">
                            {{$rUser->name ?? '-'}}
                        </td>
                        <td  class="px-6 py-4">
                            {{$rUser->email ?? '-'}}
                        </td>
                        <td  class="px-6 py-4">
                            {{date('d M', strtotime($rUser->birthdate))}}
                        </td>
                        <td  class="px-6 py-4">
                            {{$rUser->birthdate}}
                        </td>
                        <td  class="px-6 py-4">
                            {{$rUser->purchases()->count()}}
                        </td>
                        <td  class="px-6 py-4">
                            {{$rUser->purchase_date}}
                        </td>
                        <td  class="px-6 py-4">
                            {{$rUser->updated_at ?? '-'}}
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>