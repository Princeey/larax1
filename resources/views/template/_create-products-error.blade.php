@include('template._products-list-for-create', ['products' => $products]);

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-red-200 text-red-800 p-4 rounded">
        <div>Fix the following:</div>
        <ul class="ms-2">
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

</div>