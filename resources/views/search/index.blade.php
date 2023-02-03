<x-base.base>
    <x-slot:title>
        OnlineStore main page
        </x-slot>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average">
            <div class="container">
                @if(is_string($products))
                    <div class="not-find">
                        {{$products}}
                    </div>
                @else
                    <div class="find">
                        «{{$search}}»
                    </div>
                    @foreach($products as $product)
                        <x-product.product :product="$product" :link='$link'></x-product.product>
                    @endforeach
                @endif
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>
