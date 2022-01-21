<footer>
    <section class="bg-gray-800 lg:p-36 pt-10 px-5 lg:pb-0 text-gray-400">
        <div class="grid grid-rows-1 lg:grid-cols-4 gap-8 mb-16" >
            <div class="text-gray-400">
                <h5 class="uppercase font-light text-sm" >About</h5>
                <p class="my-2">Accessing small Payments both locally and over 20 country overseas without stress.</p>
            </div>
            <div>
                <h5 class="uppercase font-light text-sm" >Legal</h5>
                <ul class="my-2 grid grid-rows-1 gap-1">
                    <li>Privacy Policy</li>
                    <li>Terms and conditions</li>
                </ul>
            </div>
            <div>
                <h5 class="uppercase font-light text-sm" >RESOURCES</h5>
                <ul class="my-2 grid grid-rows-1 gap-1">
                    <li><a href="{{ route("faqs") }}">FAQs</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
            <div>
                <h5 class="uppercase font-light text-sm" >Social</h5>
                <ul class="my-2 grid grid-rows-1 gap-1">
                    <li><a href="{{ route("faqs") }}">Facebook</a></li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        {{-- <div class="text-center my-16" >
            Hallifield money is a subsidiaries of Hallifield Prime Investment Limited created on January 2022 with aim accessing small Payments both locally and over 20 country overseas without stress.
        </div> --}}

        <div class="py-10 grid grid-cols-1">
            <div class="text-center text-sm" >
                Hallifield &#169; {{ date('Y') }}. All Rights Reserved.
            </div>           
        </div>
    </section>
</footer>