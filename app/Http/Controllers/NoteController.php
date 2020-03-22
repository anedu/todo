<?php
// настроить все редиректы.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    // вывод всех заметок
    public function show()
    {
    	//
    	$notes = Note::all();
    	return view('welcome', compact('notes'));
    }

    // создание заметки
    public function create(Request $request)
    {
        //
        $note = new Note;
        $note->note_text = $request->note_text;
        $note->save();
        return redirect()->back();
    }

	// удаление заметки
    public function delete(Request $request)
    {
        //
        $note = Note::find($request->id);
        $note->delete();
        return redirect()->back();
    }

	// обновление заметки
    public function update(Request $request)
    {
        //
        $note = Note::find($request->id);
        $note->note_text = $request->note_text;
        $note->save();
        return redirect()->back();
    } 
}