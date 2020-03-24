@extends("layouts.banner")

@section("content")
<div class="text">
    <form method="post">
        @csrf
        <span style="display:inline-block">
        <label for="foo" style="display:block">Persoon 1</label>
        <input type="text" name="p1" id="foo" />
        </span>

        <span style="display:inline-block">
    <label for="bar"  style="display:block">Persoon 2</label>
    <input type="text" name="p2" id="bar" />
        </span>
        <br>
        <button type="submit"> Bereken </button>
    </form>
</div>

@endsection
