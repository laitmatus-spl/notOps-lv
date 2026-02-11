<x-mail::message>
# New Contact Inquiry — NotOps

A new message has been submitted through the NotOps contact form.

---

## Contact Details

| Field   | Value |
|---------|-------|
| **Name**    | {{ $submission->name }} |
| **Email**   | {{ $submission->email }} |
| **Company** | {{ $submission->company ?: '—' }} |
| **Phone**   | {{ $submission->phone ?: '—' }} |
| **Date**    | {{ $submission->created_at->format('M j, Y \a\t g:i A') }} |

---

## Message

{{ $submission->message }}

---

<x-mail::button :url="route('admin.submissions')" color="primary">
View in Dashboard
</x-mail::button>

---

*This notification was automatically sent by the NotOps contact system.*

© {{ date('Y') }} NotOps Consulting
</x-mail::message>
