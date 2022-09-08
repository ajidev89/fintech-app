@extends('dashboard.index')

@section('content')
    <section class="bg-white shadow-sm rounded-md p-4">
        <h1 class="font-semibold text-xl px-4">Transactions</h1>
        <div id="wrapper" class="my-8 text-sm"></div>
    </section>
@endsection

@section('scripts')
    @if(session()->get('success'))
        <script>
            Toastify({
                text: "{{ session()->get('success') }}",
                duration: 3000,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                className: "border-l-4 rounded-md border-green-300 text-sm",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#fff",
                    color:"#000",
                },
            }).showToast();
        </script>
    @endif

    <script>
        new Grid({
            data: {!! $transactions !!},
            columns: [{
                name: "Reference ID",
                sort: true,
            },
            {
                name: "Amount",
                sort: true,
            },
            {
                name: "Email",
                sort: true,
            },{
                name: "Phone",
                width: '50%'
            },
            ,{
                name: "Status",
                width: '50%'
            }
        ],
        'search': {
        'placeholder': 'Search...'
        },
        'pagination': {
        'previous': '⬅️',
        'next': '➡️',
        'showing': '😃 Displaying',
        'results': () => 'Records'
        }
        }).render(document.getElementById("wrapper"));;
    </script>
@endsection