<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

        <h1 class="text-white text-lg font-bold">Create new Support Ticket</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-grey-800 shadow-md overflow-hidden sm:rounded-lg">
            <form action="" method="post">
                <div class="mt-4">
                    <x-input-label  for="title" :value="('Title')"/>
                    <x-text-input  id="title" class="block mt-1 w-full"  type="text" name="title" required />
                    <x-input-error :messages = "$errors->get('title')" class="mt-2"/>
                  
                </div>


                <div class="mt-4">
                    <x-input-label  for="description" :value="('Description')"/>
                    <x-textarea default="Hello Worldsssss"  id="description" name="description"  required />
                  
                    <x-input-error :messages = "$errors->get('description')" class="mt-2"/>                
                </div>

                <div class="mt-4">
                    <x-input-label  for="title" :value="('Attachment if any')"/>
                    <x-file-input  id="attachement"     name="attachement"  required />
                    <x-input-error :messages = "$errors->get('attachement ')" class="mt-2"/>                
                </div>

            </form>
        </div>
    </div>
    
</x-app-layout>
