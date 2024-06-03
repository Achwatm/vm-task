<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users - with last purchase date') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">
        <table class="w-full text-white mb-5">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Id')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Name')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Email')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Birthdate')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Purchases')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Last purchase on')</th>
                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Updated at')</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                    <tr class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$user->id ?? '-'}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->name ?? '-'}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->email ?? '-'}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->birthdate ?? '-'}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->purchases()->count()}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->purchase_date}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->updated_at ?? '-'}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          {{ $users->links() }}
    </div>
</x-app-layout>
