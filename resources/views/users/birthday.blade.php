<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users - with birdthsday column') }}
        </h2>
    </x-slot> 

    <div class="py-12 px-12">
        <table class="w-full text-white mb-5">
            <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Name')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Email')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Birthday')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Birthdate')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Purchases')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Last purchase on')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Created_at')</th>
                <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">@lang('Updated_at')</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($users as $user )
                        <tr class="px-6 py-3 bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td  class="px-6 py-4">
                                {{$user->name ?? '-'}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->email ?? '-'}}
                            </td>
                            <td  class="px-6 py-4">
                                {{date('d M', strtotime($user->birthdate))}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->birthdate}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->purchases()->count()}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->purchases->sortByDesc('purchase_date')->first()->purchase_date ?? null}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->created_at ?? '-'}}
                            </td>
                            <td  class="px-6 py-4">
                                {{$user->updated_at ?? '-'}}
                            </td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
          {{ $users->links() }}
    </div>
</x-app-layout>
