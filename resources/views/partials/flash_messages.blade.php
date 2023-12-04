<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var Toast = actions.Toast;

        @if (isset($flashSuccess) || session()->has('success'))
        var flashSuccess = Toast.create(app, {
            message: "{{ session()->get('success', $flashSuccess ?? null) }}",
            duration: 3000,
        });
        flashSuccess.dispatch(Toast.Action.SHOW);
        @endif

        @if (isset($flashWarning) || session()->has('warning'))
        var flashWarning = Toast.create(app, {
            message: "{{ session()->get('warning', $flashWarning ?? null) }}",
            duration: 3000,
        });
        flashWarning.dispatch(Toast.Action.SHOW);
        @endif

        @if (isset($flashNotice) || session()->has('notice'))
        var flashNotice = Toast.create(app, {
            message: "{{ session()->get('notice', $flashWarning ?? null) }}",
            duration: 3000,
        });
        flashNotice.dispatch(Toast.Action.SHOW);
        @endif

        @if (isset($flashError) || session()->has('error'))
        var flashError = Toast.create(app, {
            message: "{{ session()->get('error', $flashWarning ?? null) }}",
            duration: 3000,
            isError: true,
        });
        flashError.dispatch(Toast.Action.SHOW);
        @endif
    });
</script>
