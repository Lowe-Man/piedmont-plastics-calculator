<form wire:submit.prevent="submit" class="calculator-container">
    <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="logo my-6 justify-self-center">
    <h4 class="title bg-[#E6ECEE] py-3 text-center">Sheet Weight Conversion Calculator</h4>
    <div class="weight text-center my-3">
        <span class="weight-label">Weight</span>
        @if($weight == 0)
            <span class="weight-value mt-1 font-semibold left-1/2 text-[4rem]">{!! $weight !!}</span>
        @else
            <span class="weight-value mt-1 font-semibold left-1/2 text-[4rem] text-[#00CC99]">{!! $weight !!}</span>
        @endif
    </div>
    <div class="material mx-4">
        <label for="material" class="block mb-2 text-sm text-gray-900 dark:text-gray-400 font-semibold">Material</label>
        <select id="material" wire:model="material" class="border cursor-pointer border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="0" selected>Choose a material</option>
            <option value="0.75">PVC Foam Sheet</option>
            <option value="0.905">Polypropylene</option>
            <option value="0.96">UHMW</option>
            <option value="1.04">Styrene</option>
            <option value="1.07">ABS</option>
            <option value="1.2">Acrylic</option>
            <option value="1.2">Polycarbonate</option>
            <option value="1.27">PETG</option>
            <option value="1.3">Acrylic Mirror</option>
            <option value="1.4">PVC Type 1</option>
            <option value="1.44">Acetal</option>
            <option value="2.16">Teflon</option>
        </select>
    </div>
    <div class="length ml-4 mr-1 mt-4">
        <label for="length" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Length</label>
        <input type="text" id="length" wire:model="length" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full text-center">
    </div>
    <div class="width mr-4 ml-1 mt-4">
        <label for="width" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Width</label>
        <input type="text" id="width" wire:model="width" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full text-center">
    </div>
    <div class="thickness ml-4 mr-1 mt-4 mb-4">
        <label for="thickness" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Thickness (.25)</label>
        <input type="text" id="thickness" wire:model="thickness" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full text-center">
    </div>
    <div class="calculate-btn flex flex-col justify-end ml-1 mr-4 mb-4">
        @if($errors->has('width') || $errors->has('length'))
            <button type="submit" class="text-white bg-[#00A0DE] hover:bg-[#0080b1] disabled:bg-[#99C7E3] disabled:cursor-not-allowed focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full h-[42px]" disabled="disabled">Calculate</button>
        @else
            <button type="submit" class="text-white bg-[#00A0DE] hover:bg-[#0080b1] disabled:bg-[#99C7E3] disabled:cursor-not-allowed focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full h-[42px]">Calculate</button>
        @endif
    </div>
</form>
