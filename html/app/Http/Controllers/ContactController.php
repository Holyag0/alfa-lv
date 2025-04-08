<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->getAllContacts();
        return view('contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = $this->contactService->getContactById($id);
        if (!$contact) {
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }
        return view('contacts.show', compact('contact'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $this->contactService->createContact($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function edit($id)
    {
        $contact = $this->contactService->getContactById($id);
        if (!$contact) {
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, $id)
    {
        $contact = $this->contactService->updateContact($id, $request->validated());
        if (!$contact) {
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        $deleted = $this->contactService->deleteContact($id);
        if (!$deleted) {
            return redirect()->route('contacts.index')->with('error', 'Contact not found.');
        }
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}