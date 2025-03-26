<x-layout>
    <div="note-containner">
        <a href="{{route('note.create')}}" class="new-note-btn">New Note</a>
        <div class class="notes">
            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{Str::words($note->note, 30)}}
                </div>
                <div class="note-buttons">
                    <a href="{{route('note.show', $note)}}" class="new-note-btn" class = "note-view-button">View</a>
                    <a href="{{route('note.edit',$note)}}" class="new-note-btn" class="note-edit-button">Edit</a>
                    <form action="{{route('note.destroy', $note)}}" method="POST"> @csrf @method('DELETE')
                        <button class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>    
