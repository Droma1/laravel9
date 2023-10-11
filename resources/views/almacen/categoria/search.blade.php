
<form action="categoria" method="get" autocomplete="off" role="search">
    @csrf
    <div class="form-group">
        <div class="input-group">
            <input type="text" name="searchText" id="Buscar..." class="form-control" value="{{$searchText}}">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
        </div>
    </div>
</form>