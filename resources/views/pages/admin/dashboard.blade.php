<h1>Admin Dashboard</h1>


<a href="{{ route('admin.create') }}">
    Add Course
</a>
<h1>Courses</h1>




    <div class="dashboard">
        @foreach($courses as $course)
        <div class="dashboard-items">
            <a href="{{ route('admin.edit', $course) }}">Edit</a>
            <form
                action="{{ route('admin.destroy', $course) }}"
                method="POST"
            >
                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    onclick="return confirm('Are you sure you want to delete this course?')"
                >
                    Delete
                </button>
            </form>
            <h2>{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
            <p>{{ $course->price }} DA</p>
        </div>
        @endforeach
    </div>
    <style>
        .dashboard{
            display: flex;
            gap: 20px;
        }
    </style>
