<form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline-block"
    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $project->title }}?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="card-link btn bg-danger text-white"><i class="fa-solid fa-trash"></i></button>
</form>
