<x-app>
    <section class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto">
            <h1 class="display-4 font-weight-normal">We already have {{$count}} files!</h1>
            <p class="lead font-weight-normal">Here you can upload and download files</p>
            <a class="btn btn-outline-secondary p-3 mx-2" href="{{ route('files.create') }}">Upload</a>
            <a class="btn btn-outline-secondary p-3 mx-2" href="{{ route('files.index') }}">Search</a>
        </div>
    </section>

    @if($files->count()>0)
        <hr>
        <section class="text-center">
            <h1 class="display-4 font-weight-normal">Last 5 uploaded files</h1>
            <x-table :files=$files></x-table>
        </section>
    @endif
</x-app>
