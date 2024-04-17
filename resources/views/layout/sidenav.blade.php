<div class="list-group">
    <a href="{{ route('introduction') }}" class="list-group-item">Introduction</a>

    @if($user->level >= 2)
        <a href="{{ route('syntax') }}" class="list-group-item">Basic Syntax</a>
    @endif

    @if($user->level >= 3)
        <a href="{{ route('variables') }}" class="list-group-item">Variables</a>
    @endif

    @if($user->level >= 4)
        <a href="{{ route('operators') }}" class="list-group-item">Arithmetic Operators</a>
    @endif

    @if($user->level >= 5)
        <a href="{{ route('conditionals') }}" class="list-group-item">Conditionals</a>
    @endif

    @if($user->level >= 6)
        <a href="{{ route('loops') }}" class="list-group-item">Loops</a>
    @endif

    @if($user->level >= 7)
        <a href="{{ route('functions') }}" class="list-group-item">Functions</a>

    @endif
</div>
