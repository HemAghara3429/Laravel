<div>

    @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
    @endif

    @if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
    @endif

    <form action="{{ url('/search') }}" method="GET">

        <input type="text" name="search" placeholder="Search by Name"
            value="{{ isset($search) ? $search : '' }}">

        <button type="submit">Search</button>

    </form>

    <br>

    <!-- Multiple Delete Form -->
    <form action="{{ url('/multiple-delete') }}" method="POST">

        @csrf

        <button type="submit"
            onclick="return confirm('Are you sure you want to delete selected records?')">
            Delete Selected
        </button>

        <br><br>

        <table border="1" cellpadding="10">

            <tr>
                <th>
                    <input type="checkbox" id="checkAll">
                </th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Batch</th>
                <th>Operation</th>
            </tr>

            @forelse($student as $item)

            <tr>

                <td>
                    <input type="checkbox"
                        name="ids[]"
                        value="{{ $item->id }}"
                        class="checkbox">
                </td>

                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->batch }}</td>

                <td>
                    <a href="{{ url('/getstudent/edit/' . $item->id) }}">Edit</a>

                    |

                    <a href="{{ url('/getstudent/delete/' . $item->id) }}"
                        onclick="return confirm('Are you sure you want to delete this record?')">
                        Delete
                    </a>
                </td>

            </tr>

            @empty

            <tr>
                <td colspan="6" style="text-align:center;">
                    No Student Found
                </td>
            </tr>

            @endforelse

        </table>

    </form>

    <br>

    {{ $student->links() }}

</div>

<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>

<script>
    // Select All Checkbox
    document.getElementById('checkAll').addEventListener('click', function() {

        let checkboxes = document.querySelectorAll('.checkbox');

        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('checkAll').checked;
        });

    });
</script>
