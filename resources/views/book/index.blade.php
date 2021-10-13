<table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Author ID</th>
        <th>Author</th>

    @foreach ($books as $book)

    </tr>
                <td>{{$book->ID}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->author_id}}</td>
                <td>{{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</td>
    </tr>

    @endforeach


</table>
