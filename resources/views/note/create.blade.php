<x-layout>
    <div class="note-container">
        <h1 class="note-title">New Note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note-form">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>    
