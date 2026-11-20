@component('mail::message')
# Task Completed Notification

The following task has been **marked as completed**:

## Task Details

- **Title:** {{ $task->title }}
- **Description:** {{ $task->description ?? 'No description provided.' }}
- **Status:** Completed
- **Created At:** {{ $task->created_at->format('Y-m-d H:i:s') }}
- **Updated At:** {{ $task->updated_at->format('Y-m-d H:i:s') }}

---

This email was automatically generated when the task status was changed to "completed".

@component('mail::panel')
Sent via Laravel Mail Driver (Log Mode)
@endcomponent
@endcomponent
