<script>
    $(document).ready(function() {
        @if (session('success'))
            toastr.success('{{ session('success') }}');
        @endif
    });
</script>
