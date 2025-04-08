<?php

namespace App\Services;

use App\Models\Contact;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Log;

class ContactService
{
    protected $contact;

    /**
     * @param Contact $contact
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllContacts()
    {
        return $this->contact->orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * @param int $id
     * @return Contact|null
     */
    public function getContactById($id)
    {
        return $this->contact->find($id);
    }

    /**
     * @param array $data
     * @return Contact
     */
    public function createContact(array $data)
    {
        return $this->contact->create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return Contact|null
     */
    public function updateContact($id, array $data)
    {
        $contact = $this->contact->find($id)->update($data);
        return $contact;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteContact($id)
    {
        $contact = $this->contact->find($id)->delete();
        return $contact;
    }
}