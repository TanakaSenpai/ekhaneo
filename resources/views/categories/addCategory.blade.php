@include('assets.header')
<div class="card m-2">
    <div class="card-body d-flex flex-column">
        <label class="class-header fs-3 text-dark fw-semibold text-center m-2">Add Category</label>
        @if ($errors->any())
                    <div class="alert alert-danger errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        <form action="{{ route('addCat') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="m-2">
            <label for="name" class="m-1">Category name:</label>
            <input type="text" class="form-control" name="category" id="name" value="{{ old('category') }}">
        </div>

        <div class="m-2">
            <label for="photo" class="m-1">Add category logo:</label>
            <input type="file" name="logo" class="form-control" id="photo" value="{{ old('logo') }}">
            <label class="mx-2" style="font-size: .8rem;">Logo must be less than 512x512.</label>
        </div>
        <button class="btn btn-dark m-2" type="submit">Submit</button>
        </form>
    </div>
</div>

@include('assets.footer')
