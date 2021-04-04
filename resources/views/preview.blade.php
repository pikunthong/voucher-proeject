<form action="/" method="get">
    <div class="input-group">
        <input type="text" class="form-control" name="search" value="{{Request::get('search')}}">
        {{--                        value="{{Request::get('search') ให้ค่าอยู่ในช่องกรอก --}}
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" >ค้นหา</button>
        </div>
    </div>
</form>
