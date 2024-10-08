
<script src="{{asset('admin_assets/plugins/toastr/toastr.min.js')}}"></script>
<script>
    $(document).ready(function () {
        @if(session('success'))
        toastr.success("{{session('success')}}")
        @elseif(session('error'))
        toastr.error("{{session('error')}}")
        @endif
    });

</script>
