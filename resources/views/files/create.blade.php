<x-app>
    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container col-md-4 col-md-offset-4">
            <div class="form-group mt-4">
                <label class="form-label display-6 pb-1" for="file_path">File</label>
                <input type="file" class="form-control" id="file_path"  name="file_path"/>
            </div>
            <x-input-error name='file_path'></x-input-error>

            <div class="form-group mt-4">
                <label class="display-6 pb-3" for="name">File name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter file name" value="{{old('name')}}">
            </div>
            <x-input-error name="name"></x-input-error>


            <div class="form-group mt-4">
                <label class="display-6 pb-3" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="7">{{old('description')}}</textarea>
            </div>
            <x-input-error name="description"></x-input-error>

            <span class="display-6">Visibility</span>
            <div class="form-check mt-2">
                <input class="form-check-input" type="radio" name="is_private" id="public" value="0" required checked>
                <label class="form-check-label" for="public">
                    Public
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_private" id="private" value="1">
                <label class="form-check-label" for="private">
                    Private
                </label>
            </div>
            <button type="submit" class="btn btn-secondary my-4 p-4">Upload</button>
        </div>
    </form>
</x-app>
