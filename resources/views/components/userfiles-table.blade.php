@props(['files'])
<table class="table">
    <tbody>
    @foreach($files as $file)
        <tr>
            <td>{{$file->name}}</td>
            @can('update',$file)
                <td style="width: 10%"><a class="btn btn-secondary btn-sm" href="{{route('files.edit',$file)}}" role="button">Edit</a></td>
                <td style="width: 10%">
                    <form method="POST" action="{{route('files.destroy',$file)}}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-secondary btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            @endcan
            <td style="width: 10%"><a class="btn btn-secondary btn-sm" href="{{route('files.show',$file)}}">Download</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
