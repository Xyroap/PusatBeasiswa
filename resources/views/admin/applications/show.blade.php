<h2>{{ $application->user->name }}</h2>
<p>{{ $application->scholarship->title }}</p>
<p>GPA: {{ $application->gpa }}</p>
<p>Status: {{ $application->status }}</p>

@if($application->status == 'Pending')

<form method="POST"
      action="{{ url('/admin/applications/'.$application->id.'/status') }}"
      style="display:inline;">
    @csrf
    @method('PATCH')

    <input type="hidden"
           name="status"
           value="Approved">

    <button type="submit">
        Approve
    </button>
</form>

<form method="POST"
      action="{{ url('/admin/applications/'.$application->id.'/status') }}"
      style="display:inline;">
    @csrf
    @method('PATCH')

    <input type="hidden"
           name="status"
           value="Rejected">

    <button type="submit">
        Reject
    </button>
</form>

@endif