<x-app>
    <div class="m-3 w-50 mx-auto ">
        <!--<h1 class="display-4 font-weight-normal mt-4 text-center" id="heading">All public files</h1>-->
        <label for="exampleInputEmail1" class="form-label">Search for file</label>

        <div class="dropdown show mb-5">

            <form action="{{route('admin')}}" method="GET">

                <div class="input-group">
                    <input type="text" class="form-control" id="search" name="name" value="{{request('name')}}"
                           autocomplete="off">


                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <div class="dropdown-menu" id="autocomplete-dropdown">
            </div>
        </div>

        @if($files->count() != 0)
            @if(request()->has('user'))
                <h1 class="display-4 font-weight-normal mt-4 text-center" id="heading">{{$files[0]->user->name}}'s
                    files
                </h1>
            @endif
            @if(request()->has('name'))
                <h1 class="display-4 font-weight-normal mt-4 text-center" id="heading">Search query
                    '{{request('name')}}'
                </h1>
            @endif
                <x-userfiles-table :files=$files></x-userfiles-table>
            <div class="mt-5">
                {{$files->links()}}
            </div>
        @else
            <h1 class="display-4 font-weight-normal mt-4 text-center" id="heading">There are no files that satisfiy your
                requirements</h1>
        @endif

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/autocomplete.js')}}"></script>

</x-app>
