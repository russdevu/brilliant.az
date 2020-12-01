<div class="alert-message-container">
    @if(!empty($success))
        <div id="alert-area" class="alert-area success">
            {{-- {{ $success }} --}}
            Test message.
        </div>
    @endif

    @if(!empty($warning))
        <div id="alert-area" class="alert-area warning">
            {{ $warning }}
        </div>
    @endif

    @if(!empty($error))
        <div id="alert-area" class="alert-area error">
            {{ $error }}
        </div>
    @endif
</div>

