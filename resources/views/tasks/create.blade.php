<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Task
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   placeholder="description" />
                            
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="taskname" class="block font-medium text-sm text-gray-700">Task Name</label>
                            <input type="text" name="taskname" id="taskname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   placeholder="taskname" />
                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="file" class="block font-medium text-sm text-gray-700">File</label>
                            <input type="file" name="file" id="file"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    />
                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="enddate" class="block font-medium text-sm text-gray-700">End Date</label>
                            <input type="date" name="enddate" id="enddate"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />
                            
                        </div>



                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="create" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>