@if(!empty($success))
    <div class="alert-box success">
        {{-- {{ $success }} --}}
        Test message.
    </div>
@endif

@if(!empty($warning))
    <div class="alert-box warning">
        {{ $warning }}
    </div>
@endif

@if(!empty($error))
    <div class="alert-box error">
        {{ $error }}
    </div>
@endif
