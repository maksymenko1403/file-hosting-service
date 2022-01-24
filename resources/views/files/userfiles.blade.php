<x-app>
    <h1 class="display-4 font-weight-normal mt-4 text-center" id="heading">Your files</h1>
        <div class="m-3 w-50 mx-auto ">
            <x-userfiles-table :files=$files></x-userfiles-table>
        <div class="mt-5">
            {{$files->links()}}
        </div>
    </div>
</x-app>
