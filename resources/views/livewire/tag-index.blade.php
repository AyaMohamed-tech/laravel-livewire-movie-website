<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button wire:click="showCreateModal">Create Tag</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Title</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Rating</th>
              <th class="px-4 py-3">Public</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr class="text-gray-700">

              <td class="px-4 py-3 text-ms border">Title hire</td>
              <td class="px-4 py-3 text-xs border">Date hire</td>
              <td class="px-4 py-3 text-sm border">Rating hire</td>
              <td class="px-4 py-3 text-sm border">Public</td>
              <td class="px-4 py-3 text-sm border">Edit/Delete</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <x-jet-dialog-modal wire:model="showTagModal">
      <x-slot name="title">Create Tag</x-slot>
      <x-slot name="content">
        <div class="mt-10 sm:mt-0">            
            <div class="mt-5 md:col-span-2 md:mt-0">
              <form>
                <div class="overflow-hidden shadow sm:rounded-md">
                  <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                          
                      <div class="col-span-6">
                        <label for="street-address" class="block text-sm font-medium text-gray-700">Tag name</label>
                        <input type="text" wire:model="tagName" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
        
                    </div>
                  </div>

                </div>
              </form>
            </div>
        
        </div>
      </x-slot>
      <x-slot name="footer">
        <x-jet-button wire:click="closeTagModal">Cancel</x-jet-button>
        <button wire:click="createTag" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 mx-2">CREATE</button>
      </x-slot>
    </x-jet-dialog-modal>
  </section>

