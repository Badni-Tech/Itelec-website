<h1>Edit Course</h1>

<form method="POST"
      action="{{ route('admin.update', $course) }}">

    @csrf
    @method('PUT')

    <div>
        <label>Title</label>
        <input
            type="text"
            name="title"
            value="{{ old('title', $course->title) }}"
        >
    </div>
    <div>
        <label>Instructor</label>
        <input
            type="text"
            name="instructor"
            value="{{ old('instructor', $course->instructor) }}"
        >
    </div>
    <div>
        <label>instructor_des</label>
        <input
            type="text"
            name="instructor_des"
            value="{{ old('instructor_des', $course->instructor_des) }}"
        >
    </div>
    <div>
        <label>duration</label>
        <input
            type="text"
            name="duration"
            value="{{ old('duration', $course->duration) }}"
        >
    </div>
    <div>
        <label>total</label>
        <input
            type="text"
            name="total"
            value="{{ old('total', $course->total) }}"
        >
    </div>

    <div>
        <label>Description</label>

        <textarea name="description">{{ old('description', $course->description) }}</textarea>
    </div>

    
    <div>
        <label>Price</label>

        <input
            type="number"
            name="price"
            value="{{ old('price', $course->price) }}"
        >
    </div>

    <button type="submit">
        Update Course
    </button>

</form>