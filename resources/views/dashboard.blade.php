<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="zodiac.blade.php" method="post">
                        <div>
                            <x-label for="name" />
                            Full Name
                            <x-input id="name" class="block mt-1 w-full" type="name" name="name" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="address" />
                            Address
                            <x-input id="address" class="block mt-1 w-full" type="address" name="address" />
                        </div>
                        <x-button class="ml-3" type="submit">
                            Submit
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!--After reaching the pitstop for Mile 9 your task is to design a simple for letting the user input information (full name, birthday, address) 
Output 
Fullname:
Address: 
Zodiac Sign: (use control structure Switch Statement for the condition) 
Sample Output 
Hi: Raden Alvarez
Your Address is: makati city 
Zodiac Sign (Aries) 
*Things to consider 
Use Control Structure condition (Switch statement)
PHP 
Form 
*External CSS
*JavaScript-->