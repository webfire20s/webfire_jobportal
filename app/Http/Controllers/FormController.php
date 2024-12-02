<?php
namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('admin.forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'form_description' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048', // 2MB max
        ]);

        $file = $request->file('document');
        $path = $file->store('documents', 'public');
        $size = $file->getSize();

        Form::create([
            'form_description' => $request->form_description,
            'document_path' => $path,
            'file_size' => $size / 1024, // Convert to KB
        ]);

        return redirect()->route('forms.index')->with('success', 'Form created successfully.');
    }

    public function edit(Form $form)
    {
        return view('admin.forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        $request->validate([
            'form_description' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $path = $file->store('documents', 'public');
            $size = $file->getSize();
            $form->update([
                'document_path' => $path,
                'file_size' => $size / 1024,
            ]);
        }

        $form->update([
            'form_description' => $request->form_description,
        ]);

        return redirect()->route('forms.index')->with('success', 'Form updated successfully.');
    }

    public function destroy(Form $form)
    {
        if ($form->document_path) {
            \Storage::disk('public')->delete($form->document_path);
        }
        $form->delete();
        return redirect()->route('forms.index')->with('success', 'Form deleted successfully.');
    }
}
