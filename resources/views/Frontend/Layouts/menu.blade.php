<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1" style="background-color: var(--primary-color)">
            <h3 style="margin-top: 0; margin-bottom: 0; padding: 3px 0;">
                <i class="fa-solid fa-list-ul"></i> Danh mục
            </h3>
        </li>
        @foreach ( $theLoais as $theLoai )
            @if(count($theLoai->LoaiTin)>0)
                <li href="#" class="list-group-item menu1" style="cursor: pointer;">
                    {{ $theLoai->Ten }}
                </li>
                <ul>
                    @foreach ( $theLoai->LoaiTin as $loaiTin )    
                    <li class="list-group-item">
                        <a href="#">{{ $loaiTin->Ten }}</a>
                    </li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>
</div>