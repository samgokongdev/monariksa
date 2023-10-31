<div class="flex items-center justify-center mt-10">
    @auth
        <div class="flex flex-col items-center justify-center space-y-4">
            <div class="text-lg">
                Anda Sudah Login sebagai <span class="font-bold">{{ auth()->user()->name }}</span>
            </div>
            <div>
                <button wire:click='logout()'
                    class="bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-lg">Logout</button>
            </div>
        </div>
    @else
        <div class="bg-white p-10 rounded-md shadow-lg w-1/2 ">
            <form wire:submit='login'>
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-col">
                        <label>Email</label>
                        <input type="email" wire:model='email'
                            class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label>Password</label>
                        <input type="password" wire:model='password'
                            class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                    </div>
                    <button type="submit"
                        class="w-full mt-4 bg-gray-600 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded-lg">Login</button>
                </div>
            </form>
        </div>
    @endauth
</div>
