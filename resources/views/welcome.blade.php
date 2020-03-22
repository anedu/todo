@extends('template')
@section('content')
    <div class="border-bottom pb-3">
        <h3>Создать заметку:</h3>
        <form action="/insert" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="note_text" id="" cols="50" rows="4" class="form-control" placeholder="Введите дело"></textarea>
                
            </div>
            <button type="submit" class="btn btn-success">Создать дело</button>
        </form>
        
    </div>
    <!-- вывод всех заметок -->
    @foreach ($notes as $note)
        <div class="py-1 px-1">
            <div>
                {{ $note->note_text }}
            </div>
            <div class="form-group">
               <form action="/delete" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $note->id }}" name="id">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form> 
            </div>
            <div class="form-group">
                <form action="/update" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $note->id }}" name="id">
                    <input type="text" class="form-control" value="{{ $note->note_text }}" name="note_text">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection