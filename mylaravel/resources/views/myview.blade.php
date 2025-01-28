<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="d-flex justify-content-center">
    <h1> ตารางสูตรคูณ </h1>

</div>
<form method="post" action="{{ url('mycontroller') }}">
    @csrf
    <div class="d-flex justify-content-center mt-3">
        <input type="text" name="myinput" class="p-3 bg-light bg-opacity-10 border border-black rounded me-2">
        <button type="submit" class="btn btn-dark">submit</button>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="card border-3 border-success rounded-4" style="width: 20rem">
            <div class="card-body">
                @for ($i = 0; $i <= 12; $i++)
                {{-- {{ $myinput }} * {{ $i }} = {{ $myinput * $i }} --}}
                <div class="d-flex justify-content-between align-items-center py-2">
                    <span class="h5 text-secondary"> {{ $myinput }} x {{ $i }}</span>
                    <span class="h5 text-secondary"> = </span>
                    <span class="h5 text-success"> {{ $myinput * $i }} </span>
                </div>
            @endfor
            </div>
        </div>
    </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
