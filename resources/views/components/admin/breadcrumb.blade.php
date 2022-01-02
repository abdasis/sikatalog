<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @foreach(request()->segments() as $segment)
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{Str::title($segment)}}</a></li>
                        @endforeach
                    </ol>
                </div>
                <h4 class="page-title">{{Str::title(request()->segment(2))}}</h4>
            </div>
        </div>
    </div>
</div>
