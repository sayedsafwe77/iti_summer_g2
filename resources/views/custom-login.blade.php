<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" name="email" value="{{ old('email') }}" placeholder="email">
    @error('email')
        <span>{{ $message }}</span>
    @enderror
    <input type="text" name="password" placeholder="password">
    @error('password')
        <span>{{ $message }}</span>
    @enderror
    <input type="submit">
</form>
