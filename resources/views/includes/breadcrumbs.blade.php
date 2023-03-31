<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{$heading}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{isset($main) ? $main : ''}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{isset($child) ? $child : ''}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

