<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                        <div class="w-full px-5 py-4 mb-5 bg-green-100 border-l-4 border-green-500">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-3">
                            <a href="{{ route('messages.create') }}"
                                class="block w-full p-2 text-center text-white bg-indigo-400 hover:bg-indigo-600">{{ __('New Message') }}</a>
                        </div>
                        <div class="col-span-9">
                            <table class="min-w-full leading-normal">
                                <thead class="border-b bg-gray-50">
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        {{ __('Sender') }}</th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        {{ __('Subject') }}</th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                    </th>
                                </thead>
                                <tbody>
                                    @each('messenger.partials.thread', $threads, 'thread',
                                    'messenger.partials.no-threads')
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
