@foreach ($products->get() as $prod)

<div class='p-6 rounded-lg bg-blue-100 shadow-md w-full max-w-sm'>
<img src={{ $prod->imageURL }} class=''>
    <h3 class='text-2xl font-semibold mb-2'>{{ $prod->name }}</h3>
    <hr class='border-t-2 border-blue-300 mb-2' />
    <div class='italic text-gray-600 mb-4'>
        {{ $prod->description }}
    </div>
    <div class='text-3xl text-right text-blue-700 font-bold'>
        {{ $prod->price }}
    </div>
</div>

@endforeach

<div id="name_error" hx-swap-oob="true" ></div> 

<div id="img_error" hx-swap-oob="true" ></div>
 
<div id="price_error" hx-swap-oob="true" ></div> 

<div id="description_error" hx-swap-oob="true" ></div> 

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-green-200 text-green-800 p-2 rounded">
        The product has been added successfully!
    </div>
</div>
