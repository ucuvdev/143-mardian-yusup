@extends('layout.index');
@section('title', 'Profil UPZ');
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            <div class="section-body">

            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: 'upz',
                type: 'get',
                success: function(response) {
                    if (response) {
                        $('.section-body').html(response);
                    }
                }
            })
        });
    </script>
@endsection;
