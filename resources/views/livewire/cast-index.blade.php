<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
          <form>
            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                      
                  <div class="col-span-6">
                    <label for="street-address" class="block text-sm font-medium text-gray-700">Cast TMDB ID</label>
                    <input type="text" wire:model="castTMDBId" autocomplete="castTMDBId" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
    
                </div>
              </div>

            </div>
          </form>
        <x-jet-button wire:click="generateCast">Generate Cast</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Slug</th>
              <th class="px-4 py-3">Poster</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
           @foreach ($casts as $cast)
           <tr class="text-gray-700">

            <td class="px-4 py-3 text-ms border">{{ $cast->name }}</td>
            <td class="px-4 py-3 text-xs border">{{ $cast->slug }}</td>
            <td class="px-4 py-3 text-sm border">{{ $cast->poster_path }}</td>
            <td class="px-4 py-3 text-sm border">Edit/Delete</td>
          </tr>
           @endforeach
          </tbody>
        {{ $casts->links() }}
        </table>
      </div>
    </div>
  </section>

