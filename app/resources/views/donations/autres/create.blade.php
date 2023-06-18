@include('layouts.header')
<h1>Autres donations</h1>
@if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

@if ($errors->any())
    <script>
        var errorMessages = '';
        @foreach ($errors->all() as $error)
            errorMessages += '{{ $error }}\n';
        @endforeach

        Swal.fire({
            icon: 'error',
            title: 'Erreur!',
            text: errorMessages,
            showConfirmButton: false,
            timer: 5000
        });
    </script>
@endif
<div class="footer">
  @include('layouts.footer')
</div>