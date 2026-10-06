<h1>Add Course</h1>

<form method="POST" action="{{ route('admin.store') }}">

    @csrf

    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>

    <div>
        <label>instructor</label>
        <input type="text" name="instructor">
    </div>

    <div>
        <label>instructor des</label>
        <input type="text" name="instructor_des">
    </div>

    <div>
        <label>duration</label>
        <input type="text" name="duration">
    </div>

    <div>
        <label>total</label>
        <input type="text" name="total">
    </div>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>



    <div>
        <label>Price</label>
        <input type="number" name="price">
    </div>

    <button type="submit">
        Create Course
    </button>

</form>