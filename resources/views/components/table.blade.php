@props(['files'])
    <table class="table w-50 mx-auto">
        <tbody>
        @foreach($files as $file)
            <tr>
                <td>{{$file->name}}</td>
                <td><a class="btn btn-secondary btn-sm" href="{{route('files.show',$file)}}">Download</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
